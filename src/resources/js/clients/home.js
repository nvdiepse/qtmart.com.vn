const Vue = require('vue');
const axios = require('../services/api');
var app = new Vue({
    el: "#primary",
    data: {
        productDealsOfWeek: [],
    },

    async created() {
        await this.getProductDealsOfWeek();
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