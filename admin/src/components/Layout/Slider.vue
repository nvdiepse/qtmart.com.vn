<template>
  <div>
    <div
      class="home-v1-slider home-slider slick-initialized slick-slider slick-dotted"
      role="toolbar"
    >
      <div aria-live="polite" class="slick-list draggable">
        <div
          class="slick-track"
          role="listbox"
          style="opacity: 1; width: 3360px;"
        >
          <div
            class="slider-1 slick-slide"
            style='background-image: url("assets/images/slider/home-v1-background.jpg"); width: 1680px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 300ms linear 0s;'
            data-slick-index="0"
            aria-hidden="true"
            tabindex="-1"
            role="option"
            aria-describedby="slick-slide310"
          >
            <img src="assets/images/slider/home-v1-img-1.png" alt="" />
            <div class="caption">
              <div class="title hidden">
                Turn. Click. Expand. Smart modular design simplifies adding
                storage for growing media.
              </div>
              <div class="sub-title hidden">
                Powerful Six Core processor, vibrant 4KUHD display output and
                fast SSD elegantly cased in a soft alloy design.
              </div>
              <div class="button hidden">
                Get Yours now
                <i class="tm tm-long-arrow-right"></i>
              </div>
              <div class="bottom-caption hidden">
                Free shipping on US Terority
              </div>
            </div>
          </div>
          <div
            class="slider-1 slider-2 slick-slide slick-current slick-active"
            style='background-image: url("assets/images/slider/home-v1-background.jpg"); width: 1680px; position: relative; left: -1680px; top: 0px; z-index: 999; opacity: 1;'
            data-slick-index="1"
            aria-hidden="false"
            tabindex="-1"
            role="option"
            aria-describedby="slick-slide311"
          >
            <img src="assets/images/slider/home-v1-img-2.png" alt="" />
            <div class="caption">
              <div class="title animated slideInRight">
                The new-tech gift you <br />
                are wishing for is <br />
                right here
              </div>
              <div class="sub-title animated slideInRight">
                Big screens in incredibly slim designs <br />that in your hand.
              </div>
              <div class="button animated slideInDown">
                Browse now
                <i class="tm tm-long-arrow-right"></i>
              </div>
              <div class="bottom-caption animated slideInDown">
                Free shipping on US Terority
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- .slider-1 -->

      <!-- .slider-2 -->
      <ul class="slick-dots" style="" role="tablist">
        <li
          class=""
          aria-hidden="true"
          role="presentation"
          aria-selected="true"
          aria-controls="navigation310"
          id="slick-slide310"
        >
          <button type="button" data-role="none" role="button" tabindex="0">
            1
          </button>
        </li>
        <li
          aria-hidden="false"
          role="presentation"
          aria-selected="false"
          aria-controls="navigation311"
          id="slick-slide311"
          class="slick-active"
        >
          <button type="button" data-role="none" role="button" tabindex="0">
            2
          </button>
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
export default {
  data: () => ({
    username: "",
  }),
  computed: {},
  async created() {},
  methods: {},
};
</script>
<style></style>
