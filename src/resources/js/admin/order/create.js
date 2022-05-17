const Vue = require("vue");
const axios = require("../../services/api");
const baseUrl = require("../../constant/api/url");
var app = new Vue({
    el: "#orderCreate",
    data: {
        order: {
            customer: {
                cell_phone: null,
                full_name: null,
                address: null,
            },
            note: "",
            is_receiver: true,
            receiver: {
                cell_phone: null,
                full_name: null,
                address: null,
            },
            products: [],

        }
    },
    created() {
    },
    methods: {
        searchProducts() {

        }
    },
});
