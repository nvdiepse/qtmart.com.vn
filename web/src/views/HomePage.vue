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
          <div id="primary" class="content-area">
            <Slider />
            <HotBestSeller />
            <Banner />
            <HotNewArrival />
          </div>
        </div>
      </div>
    </div>
    <!-- end content -->
    <Footer></Footer>
  </div>
</template>
<script>
import Banner from "../components/Layout/Banner.vue";
import HotBestSeller from "../components/Layout/HotBestSeller.vue";
import Footer from "../components/Layout/Footer.vue";
import Header from "../components/Layout/Header.vue";
import TopBar from "../components/Layout/TopBar.vue";
import Slider from "../components/Layout/Slider.vue";
import HotNewArrival from "../components/Layout/HotNewArrival.vue";
export default {
  components: {
    TopBar,
    Header,
    Footer,
    Slider,
    HotBestSeller,
    Banner,
    HotNewArrival,
  },
  data: () => ({
    username: "",
  }),
  computed: {},
  async created() {},
  methods: {},
};
</script>
<style lang="scss">
.cls-1,
.cls-2 {
  fill: #333e48;
}

.cls-1 {
  fill-rule: evenodd;
}

.cls-3 {
  fill: #3265b0;
}
</style>
