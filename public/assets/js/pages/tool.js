"use strict";

const vueApp = new Vue({
    el: "#vueApp",
    data: {
        activeTab: "simple",
        dataSource: "ibc",
        activeQuery: null,
        queries: null,
        params: null,
        activeSparql: null,
    },
    methods: {
        changeActiveTab(newActiveTab) {
            this.activeTab = newActiveTab;
        },
        query() {
            $("#runQueryAlert").hide();
            $("#querySubmit").addClass('spinner spinner-white spinner-right');
            KTApp.block('#tableCardEl', {
                overlayColor: '#000000',
                state: 'info',
                message: 'Processing...'
            });

            var queryBuilder;

            if(this.activeTab === 'simple') {
                queryBuilder = '/query/simple/' + this.activeQuery + '?';

                for (var i = 0; i < this.params.length; i++) {
                    if (i !== 0) queryBuilder += '&';
                    queryBuilder += this.params[i] + '=' + $("#" + this.params[i] + "ParamInput").val();
                }

                axios
                    .get(queryBuilder)
                    .then(response => {
                        $("#querySubmit").removeClass('spinner spinner-white spinner-right');
                        KTApp.unblock('#tableCardEl');
                        renderTable(response.data.headers, response.data.data)
                    });
            } else {
                var advancedSparql = $("#advancedSparqlQueryField").val();
                queryBuilder = '/query/advanced?dataset=' + this.dataSource + '&sparql=' + encodeURIComponent(advancedSparql);

                axios
                    .get(queryBuilder)
                    .then(response => {
                        $("#querySubmit").removeClass('spinner spinner-white spinner-right');
                        KTApp.unblock('#tableCardEl');
                        renderTable(response.data.headers, response.data.data);
                    });
            }
        },
        fromCamelToSentenceCase(parameterLabel) {
            const result = parameterLabel.replace(/([A-Z])/g, " $1");
            return result.charAt(0).toUpperCase() + result.slice(1);
        },
        getSparqlSource() {
            var text = this.queries[this.dataSource].find(x => x.id === this.activeQuery).sparql;
            $("#sparqlSourceEl").text(text == null ? 'Not implemented' : text);
        }
    },
    watch: {
        activeQuery: function () {
            var queryText = this.queries[this.dataSource].find(x => x.id === this.activeQuery).query_text;
            this.params = (queryText.match(/\[.+?]/g) || []).map(function (str) {
                return str.slice(1, -1);
            });
        },
    },
    beforeMount() {
        axios
            .get('/queries')
            .then(response => {
                this.queries = response.data;
            });
    },
});

var datatable;

function renderTable(headers, data) {
    $("#entryCountEl").text(data.length);
    if(datatable != null) datatable.KTDatatable('destroy');

    datatable = $('#kt_datatable').KTDatatable({
        // datasource definition
        data: {
            type: 'local',
            source: data,
            pageSize: 10,
            serverPaging: false,
            serverFiltering: false,
            serverSorting: false
        },

        // layout definition
        layout: {
            scroll: true,
            footer: false,
        },

        // column sorting
        sortable: true,
        pagination: true,
        search: {
            input: $('#kt_datatable_search_query'),
            key: 'generalSearch'
        },

        columns: headers.map(function(header) {
            return {
                field: header,
                title: header.replace(/([A-Z]+)/g, " $1").replace(/([A-Z][a-z])/g, " $1").toLowerCase()
            };
        }),
    });
}
