import Vue from "vue";
import App from "./App.vue";
import vuetify from "./plugins/vuetify";
import router from "./router";
import store from "./store";
import axios from "axios";
import VueAxios from "vue-axios";
import i18n from "./plugins/i18n";
import Vuelidate from "vuelidate";
Vue.config.productionTip = false;
Vue.use(VueAxios, axios);
Vue.use(Vuelidate);

new Vue({
  vuetify,
  router,
  store,
  i18n,
  Vuelidate,
  render: (h) => h(App),
}).$mount("#app");
