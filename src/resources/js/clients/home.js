const Vue = require('vue');
const axios = require('../services/api');
var app = new Vue({
    el: "#home_app",
    data: {
        productDealsOfWeek: [],
    },

    created() {
        this.getProductDealsOfWeek();
    },
    methods: {
        async getProductDealsOfWeek() {
            try {
                const data = await axios.getRequest();
                this.productDealsOfWeek = data.data;
            } catch (e) {
                console.log(`getProductDealsOfWeek failed`);
            }
        }
    }
});
