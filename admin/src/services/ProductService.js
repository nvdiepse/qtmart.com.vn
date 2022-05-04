import common from "../constants/common";
const getHotBestSellers = () => {
  return common.SET_HOT_BEST_SELLER;
};

const getProductCompares = () => {
  return localStorage.getItem("product-compare");
};

const getProductAddToCart = () => {
  return localStorage.getItem("product-added");
};

const getProductWishList = () => {
  return localStorage.getItem("product-wish-list");
};

const getProductRecentlyViewed = () => {
  return localStorage.getItem("product-recently-viewed");
};

const getProductDealsOfWeek = () => {
  return [];
};

const getProductHotSellers = () => {
  return [];
};

const getProductHotNewArrivals = () => {
  return [];
};

const getDetailById = () => {
  return [];
};

export default {
  getHotBestSellers,
  getProductCompares,
  getProductAddToCart,
  getProductWishList,
  getProductDealsOfWeek,
  getProductHotSellers,
  getProductHotNewArrivals,
  getProductRecentlyViewed,
  getDetailById,
};
