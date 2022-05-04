import Vue from "vue";
import VueRouter from "vue-router";
import HomePage from "../views/HomePage.vue";
import BlogPage from "../views/Blog/BlogPage.vue";
import AboutPage from "../views/AboutPage.vue";
import TrackOrderPage from "../views/TrackOrderPage.vue";
import CartPage from "../views/CartPage.vue";
import WishlistPage from "../views/WishlistPage.vue";
import ComparePage from "../views/ComparePage.vue";
import ContactPage from "../views/ContactPage.vue";
import CheckOutPage from "../views/CheckOutPage.vue";
Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "HomePage",
    component: HomePage,
    meta: { title: "Home page" },
  },
  {
    path: "/tin-tuc.html",
    name: "BlogPage",
    component: BlogPage,
    meta: { title: "Blog page" },
  },
  {
    path: "/ve-chung-toi.html",
    name: "AboutPage",
    component: AboutPage,
    meta: { title: "About page" },
  },
  {
    path: "/kiem-tra-don-hang.html",
    name: "TrackOrderPage",
    component: TrackOrderPage,
    meta: { title: "TrackOrder page" },
  },
  {
    path: "/don-hang.html",
    name: "CartPage",
    component: CartPage,
    meta: { title: "CartPage page" },
  },
  {
    path: "/ua-thich.html",
    name: "WishlistPage",
    component: WishlistPage,
    meta: { title: "Wishlist page" },
  },
  {
    path: "/so-sanh.html",
    name: "ComparePage",
    component: ComparePage,
    meta: { title: "ComparePage page" },
  },
  {
    path: "/lien-he.html",
    name: "ContactPage",
    component: ContactPage,
    meta: { title: "ContactPage page" },
  },
  {
    path: "/thanh-toan.html",
    name: "CheckOutPage",
    component: CheckOutPage,
    meta: { title: "CheckOutPage page" },
  },
];

const router = new VueRouter({
  mode: "history",
  routes,
});

router.beforeEach(async (to, from, next) => {
  // if (to.matched.some((record) => record.meta.requiresAuth)) {
  //   if (!localStorage.getItem("TOKEN")) {
  //     await next("/login");
  //   }
  //   await next();
  // }
  await next();
});

export default router;
