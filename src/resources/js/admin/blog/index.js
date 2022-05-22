const Vue = require("vue");
const axios = require("../../services/api");
const baseUrl = require("../../constant/api/url");
var app = new Vue({
    el: "#blogIndex",
    data: {
        blogs: [],
    },
    created() {
        this.getBlog();
    },
    methods: {
        async getBlog() {
            try {
                const url = baseUrl.blog_GET_ALL;
                // const data = await axios.getRequest(url);
                this.blogs = data.data;
            } catch (e) {
                console.log(`getBlog failed`);
            }
        },
    },
});
