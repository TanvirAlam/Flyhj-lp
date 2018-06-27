require("./bootstrap");
import "bulma/css/bulma.css";

window.Vue = require("vue");

Vue.component("main-table", require("./components/MainTable.vue"));

const app = new Vue({
  el: "#app"
});
