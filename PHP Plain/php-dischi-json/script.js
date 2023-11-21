const { createApp } = Vue;
const apiUri = "http://localhost:8888/php-dischi-json/api.php";

const app = createApp({
  name: "DischiApp",

  data() {
    return {
      albums: [],
      isClosed: true,
    };
  },

  mounted() {
    axios.get(apiUri).then((res) => (this.albums = res.data));
  },
});

app.mount("#app");
