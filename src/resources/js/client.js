/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


require('./bootstrap');

window.Vue = require('vue');

import Vuex from 'vuex';

Vue.use(Vuex);
import storeData from "./store/client/index";

const store = new Vuex.Store(
    storeData
);

// import router from './router/client';
Vue.component('client-component', require('./components/ClientComponent.vue').default);

import VueRouter from 'vue-router';
import {routes} from '../js/router/client';
Vue.use(VueRouter);

const router = new VueRouter({
    base: 'app/',
    routes,
    mode: 'history'
});

const app = new Vue({
    el: '#client',
    router,
    store
});
