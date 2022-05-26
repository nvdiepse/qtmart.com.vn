const Vue = require('vue');
// const axios = require('../services/api');
var app = new Vue({
    el: "#homePage",
    data: {
        // productDealsOfWeek: [],
    },
    async created() {
        // await this.getProductDealsOfWeek();
    },
    methods: {
        // async getProductDealsOfWeek() {
        //     console.log('getProductDealsOfWeek');
        //     // try {
        //     //     const data = await axios.getRequest();
        //     //     this.productDealsOfWeek = data.data;
        //     // } catch (e) {
        //     //     console.log(`getProductDealsOfWeek failed`);
        //     // }
        // }
    }
});
