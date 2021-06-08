"use strict";

var selectedQueryBuilderOptions = [];

const vueApp = new Vue({
    el: "#vueApp",
    data: {
        activeTab: "simple",
        dataSource: "ibc",
        activeQuery: null,
        activeQueryObj: null,
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
                    if(this.params[i].includes('date')) queryBuilder += 'dateRange' + '=' + $("#dateRangeParamInput").val() + '&';
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
            $("#sparqlSourceEl").text(this.activeQuery == null ? 'Please select a query.' : this.activeQueryObj.sparql);
        },
        getQueryIntroduction() {
            $("#queryIntroductionEl").html("<p class='font-size-h6-lg'>" + this.activeQueryObj.introduction + "</p>");
        },
        getDatasetPredicates() {
            $("#predicatesModalTitle").text(this.dataSource.toUpperCase());
            $("#predicatesList").empty();
            if(this.dataSource === 'ibc') {
                $("#predicatesList").append(
                    "<p>?person &lt;http://dbpedia.org/ontology/name&gt; ?name</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/maritalStatus&gt; ?maritalStatus</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/parentalStatus&gt; ?parentalStatus</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/diedOn&gt; ?date</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/familyRelationship&gt; ?familyRelationship</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/role&gt; ?role</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/ageGroup&gt; ?ageGroup</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/sex&gt; ?sex</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/diedIn&gt; ?diedIn</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/publishedOn&gt; ?publishedOn</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/source&gt; ?source</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/causeOfDeath&gt; ?causeOfDeath</p>"
                );
            } else {
                $("#predicatesList").append(
                    "<p>?person &lt;http://dbpedia.org/ontology/placeOfBirth&gt; ?placeOfBirth</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/dateOfDeath&gt; ?date</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/militaryRank&gt; ?militaryRank</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/age&gt; ?age</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/martyrdomLocation&gt; ?martyrdomLocation</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/status&gt; ?status</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/actors&gt; ?actors</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/maritalStatus&gt; ?maritalStatus</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/province&gt; ?province</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/occupation&gt; ?occupation</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/motherName&gt; ?motherName</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/brigadeName&gt; ?brigadeName</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/ageGroup&gt; ?ageGroup</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/sex&gt; ?sex</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/deathYear&gt; ?deathYear</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/causeOfDeath&gt; ?causeOfDeath</p>" +
                    "<p>?person &lt;http://dbpedia.org/ontology/name&gt; ?name</p>"
                );
            }
        },
        getQueryBuilderOptions() {
            $("#queryBuilderTitle").text(this.dataSource.toUpperCase());
            $("#listBoxContainer").empty();
            $("#listBoxInputsContainer").empty();
            selectedQueryBuilderOptions = [];
            $("#listBoxContainer").append("<select id='dualListBox' class='dual-listbox' multiple></select>");

            var $this = $('#dualListBox');

            // get options
            var options = this.dataSource === 'ibc' ? [
                {
                    text: 'Name',
                    value: 'name'
                },
                {
                    text: 'Marital Status',
                    value: 'maritalStatus'
                },
                {
                    text: 'Parental Status',
                    value: 'parentalStatus'
                },
                {
                    text: 'Date of death',
                    value: 'diedOn'
                },
                {
                    text: 'Family Relationship',
                    value: 'familyRelationship'
                },
                {
                    text: 'Role',
                    value: 'role'
                },
                {
                    text: 'Age Group',
                    value: 'ageGroup'
                },
                {
                    text: 'Sex',
                    value: 'sex'
                },
                {
                    text: 'Martyrdom Location',
                    value: 'martyrdomLocation'
                },
                {
                    text: 'Published On',
                    value: 'publishedOn'
                },
                {
                    text: 'Source',
                    value: 'source'
                },
                {
                    text: 'Cause of death',
                    value: 'causeOfDeath'
                },
            ] : [
                {
                    text: 'Name',
                    value: 'name'
                },
                {
                    text: 'Place of birth',
                    value: 'placeOfBirth'
                },
                {
                    text: 'Military Rank',
                    value: 'militaryRank'
                },
                {
                    text: 'Age',
                    value: 'age'
                },
                {
                    text: 'Date of death',
                    value: 'dateOfDeath'
                },
                {
                    text: 'Marital Status',
                    value: 'maritalStatus'
                },
                {
                    text: 'Province',
                    value: 'province'
                },
                {
                    text: 'Age Group',
                    value: 'ageGroup'
                },
                {
                    text: 'Sex',
                    value: 'sex'
                },
                {
                    text: 'Martyrdom Location',
                    value: 'martyrdomLocation'
                },
                {
                    text: 'Occupation',
                    value: 'occupation'
                },
                {
                    text: 'Mother\'s Name',
                    value: 'motherName'
                },
                {
                    text: 'Cause of death',
                    value: 'causeOfDeath'
                },
                {
                    text: 'Status',
                    value: 'status'
                },
                {
                    text: 'Brigade Name',
                    value: 'brigadeName'
                },
                {
                    text: 'Actors',
                    value: 'actors'
                },
                {
                    text: 'Death Year',
                    value: 'deathYear'
                },
            ];

            // init dual listbox
            var dualListBox = new DualListbox($this.get(0), {
                addEvent: function (value) {
                    selectedQueryBuilderOptions.push(value);
                    if(value === 'diedOn' || value === 'dateOfDeath') {
                        $("#listBoxInputsContainer").append(
                            "<label class='pt-5' id='" + value + "QueryBuilderLabel'>" + value.replace(/([A-Z])/g, " $1").charAt(0).toUpperCase() + value.replace(/([A-Z])/g, " $1").slice(1) + "</label>" +
                            "<input data-provide='datepicker' data-date-format='yyyy-mm-dd' class='form-control' type='text' id='" + value + "QueryBuilderInput'>"
                        );
                    } else {
                        $("#listBoxInputsContainer").append(
                            "<label class='pt-5' id='" + value + "QueryBuilderLabel'>" + value.replace(/([A-Z])/g, " $1").charAt(0).toUpperCase() + value.replace(/([A-Z])/g, " $1").slice(1) + "</label>" +
                            "<div class='typeahead'><input type='text' id='" + value + "QueryBuilderInput' class='form-control'/></div>"
                        );

                        createTypeaheadForBuilder(value, vueApp.dataSource);
                    }
                },
                removeEvent: function (value) {
                    selectedQueryBuilderOptions.splice($.inArray(value, selectedQueryBuilderOptions), 1 );
                    $("#" + value + "QueryBuilderLabel").remove();
                    $("#" + value + "QueryBuilderInput").remove();
                },
                availableTitle: 'Available predicates',
                selectedTitle: 'Selected predicates',
                addButtonText: 'Add',
                removeButtonText: 'Remove',
                addAllButtonText: 'Add All',
                removeAllButtonText: 'Remove All',
                options: options,
            });
        }
    },
    watch: {
        activeQuery: function () {
            if(this.activeQuery != null) {
                this.activeQueryObj = this.queries[this.dataSource].find(x => x.id === this.activeQuery);
                this.params = (this.activeQueryObj.query_text.match(/\[.+?]/g) || []).map(function (str) {
                    return str.slice(1, -1);
                });
                $("#queryTextDisplay").text(this.activeQueryObj.query_text);
            } else {
                $("#queryTextDisplay").text('');
            }
        },
        dataSource: function () {
            this.activeQuery = null;
            this.activeQueryObj = null;
            this.params = null;
        },
        activeTab: function() {
            if(this.activeTab !== 'simple') $("#queryTextDisplay").text('');
        },
        params: function () {
            this.$nextTick(function() {
                if(this.params != null) typeaheadLoop();
            });
        }
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
                title: header.replace(/([A-Z]+)/g, " $1").replace(/([A-Z][a-z])/g, " $1").toLowerCase(),
                template: function (row) {
                    return (header.includes('date') || header === 'diedOn') ? row[header].split('T')[0] : row[header];
                }
            };
        }),
    });
}

function typeaheadLoop() {
    for(var i = 0; i < vueApp.params.length; i++) {
        var param = vueApp.params[i];
        if(!param.includes('date')) {
            createTypeahead(param, vueApp.dataSource);
        }
    }
}

function createTypeahead(paramName, dataset) {
    var hound = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            cache: false,
            url: '/param/' + dataset + '?paramName=' + paramName + '&keyword=%QUERY',
            wildcard: '%QUERY'
        }
    });

    $("#" + paramName + "ParamInput").typeahead({
            highlight: true,
            minLength: 0,
        },{
            name: 'suggestions',
            source: hound,
            limit: 10,
            display: function(data) {
                return data;
            },
        }
    ).bind('typeahead:select', function(ev, suggestion) {
        console.log(suggestion);
    });
}

function createTypeaheadForBuilder(paramName, dataset) {
    var hound = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.whitespace,
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        remote: {
            cache: false,
            url: '/param/' + dataset + '?paramName=' + paramName + '&keyword=%QUERY',
            wildcard: '%QUERY'
        }
    });

    $("#" + paramName + "QueryBuilderInput").typeahead({
            highlight: true,
            minLength: 0,
        },{
            name: 'suggestions',
            source: hound,
            limit: 10,
            display: function(data) {
                return data;
            },
        }
    ).bind('typeahead:select', function(ev, suggestion) {
        console.log(suggestion);
    });
}

function generateQuery() {
    var generatedQuery = "SELECT "
    for(var i = 0; i < selectedQueryBuilderOptions.length; i++) {
        var param = selectedQueryBuilderOptions[i];
        generatedQuery += "?" + param + " "
    }
    generatedQuery += '\n';
    generatedQuery += 'WHERE {\n';
    for(var k = 0; k < selectedQueryBuilderOptions.length; k++) {
        var paramAgain = selectedQueryBuilderOptions[k];
        generatedQuery += "?person <http://dbpedia.org/ontology/" + paramAgain + "> ?" + paramAgain + " .\n";
        if(paramAgain === 'diedOn') {
            generatedQuery += "FILTER (?diedOn = '" + $("#diedOnQueryBuilderInput").val() +"T00:00:00'^^<http://www.w3.org/2001/XMLSchema#dateTime>) .\n";
        } else if(paramAgain === 'dateOfDeath') {
            generatedQuery += "FILTER (?dateOfDeath = '" + $("#dateOfDeathQueryBuilderInput").val() +"T03:00:00'^^<http://www.w3.org/2001/XMLSchema#dateTime>) .\n";
        } else {
            generatedQuery += "FILTER regex(?" + paramAgain + ", '" + $("#" + paramAgain + "QueryBuilderInput").val() + "') .\n";
        }
    }
    generatedQuery += '}';

    $("#advancedSparqlQueryField").val(generatedQuery);
}
