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
            <a href="home-v1.html">Home</a>
            <span class="delimiter">
              <i class="tm tm-breadcrumbs-arrow-right"></i>
            </span>
            Wishlist
          </nav>
          <!-- .woocommerce-breadcrumb -->
          <div id="primary" class="content-area">
            <main id="main" class="site-main">
              <div class="type-page hentry">
                <header class="entry-header">
                  <div class="page-header-caption">
                    <h1 class="entry-title">Thanh toán</h1>
                  </div>
                </header>
                <!-- .entry-header -->
                <div class="entry-content">

                  <!-- .woocommerce -->
                </div>
                <!-- .entry-content -->
              </div>
            </main>
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
