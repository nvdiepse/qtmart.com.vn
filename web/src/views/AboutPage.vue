<template>
  <div id="page">
    <TopBar />
    <!-- .top-bar-v1 -->
    <Header />
    <!-- .header-v1 -->
    <!-- content -->
    <div id="content" class="site-content">
      <div class="col-full">
        <div class="row">
          <nav class="woocommerce-breadcrumb">
            <a href="home-v1.html">About</a>
            <span class="delimiter">
              <i class="fa fa-angle-right"></i>
            </span>
            About
          </nav>
          <!-- .woocommerce-breadcrumb -->
          <div id="primary" class="content-area">
            <main id="main" class="site-main"></main>
            <!-- #main -->
          </div>
          <!-- .sidebar-blog -->
        </div>
      </div>
    </div>
    <!-- end content -->
    <Footer />
  </div>
</template>
<script>
import Footer from "../components/Layout/Footer.vue";
import Header from "../components/Layout/Header.vue";
import TopBar from "../components/Layout/TopBar.vue";
export default {
  components: {
    TopBar,
    Header,
    Footer,
  },
  data: () => ({
    username: "",
  }),
  computed: {},
  async created() {},
  methods: {},
};
</script>
<style lang="scss"></style>
