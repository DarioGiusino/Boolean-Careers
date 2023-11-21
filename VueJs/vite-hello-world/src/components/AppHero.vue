<script>
export default {
  data() {
    return {
      pic: "banner.webp",
    };
  },
  methods: {
    buildUrlImage(image) {
      const url = new URL(`../assets/img/${image}`, import.meta.url);
      return url.href;
    },
  },
};
</script>

<template>
  <img :src="buildUrlImage(pic)" alt="immagine" />
</template>

<style scoped>
img {
  width: 50%;
}
</style>
