const Vue = require("vue");
const axios = require("../../services/api");
const baseUrl = require("../../constant/api/url");
var app = new Vue({
    el: "#productCreate",
    data: {
        products: [],
    },
    created() {
        this.getProduct();
    },
    methods: {
        async getProduct() {
            // try {
            //     const url = baseUrl.PRODUCT_GET_ALL;
            //     // const data = await axios.getRequest(url);
            //     this.products = data.data;
            // } catch (e) {
            //     console.log(`getProduct failed`);
            // }
        },
    },
});
