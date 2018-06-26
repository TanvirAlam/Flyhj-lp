require("./bootstrap");
import "bulma/css/bulma.css";

window.Vue = require("vue");

Vue.component("welcome-view", require("./page/Welcome.vue"));

const app = new Vue({
  el: "#app"
});
