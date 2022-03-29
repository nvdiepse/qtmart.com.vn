import Vue from "vue";
import VueRouter from "vue-router";
import HomePage from "../views/HomePage.vue";
import BlogPage from "../views/Blog/BlogPage.vue";
import AboutPage from "../views/About.vue";
Vue.use(VueRouter);

const routes = [
  {
    path: "/",
    name: "HomePage",
    component: HomePage,
    meta: { title: "ダッシュボード" },
  },
  {
    path: "/blog.html",
    name: "BlogPage",
    component: BlogPage,
    meta: { title: "Blog page" },
  },
  {
    path: "/about.html",
    name: "AboutPage",
    component: AboutPage,
    meta: { title: "About page" },
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
