import Vue from "vue";
import Vuex from "vuex";
import productStore from "../store/modules/product";

Vue.use(Vuex);

export default new Vuex.Store({
  modules: {
    productStore,
  },
});
