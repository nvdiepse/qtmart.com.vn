import ProductService from "../../services/ProductService";
import common from "../../constants/common";
const product = {
  state: () => ({
    hotBestSellers: [],
    productCompareList: common.SET_HOT_BEST_SELLER,
  }),
  mutations: {
    SET_HOT_BEST_SELLER(state, data) {
      state.hotBestSellers = data;
    },
    SET_PRODUCT_COMPARE(state, data) {
      state.productCompareList = data;
    },
  },
  actions: {
    async getHotBestSellers({ commit }) {
      const data = await ProductService.getHotBestSellers();
      commit("SET_HOT_BEST_SELLER", data);
    },
    setProductCompare({ commit }, data) {
      commit("SET_PRODUCT_COMPARE", data);
    },
  },
  getters: {
    getHotBestSellers: (state) => {
      return state.hotBestSellers;
    },
    getProductCompares: (state) => {
      return state.productCompareList;
    },
  },
};

export default product;
