const vueApp = new Vue({
    el: "#vueApp",
    data: {
        activeTab: "about",
    },
    methods: {
        changeActiveTab(newActiveTab) {
            this.activeTab = newActiveTab;
        }
    }
});
