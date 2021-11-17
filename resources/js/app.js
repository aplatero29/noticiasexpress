/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require("./bootstrap");
import vue from "vue";
window.Vue = vue;

import App from "./App.vue";

//Importamos Tailwind desde el archivo css
import "../css/app.css";

//importamos Axios
import VueAxios from "vue-axios";
import axios from "axios";

//Importamos y configuramos el Vue-router
import VueRouter from "vue-router";
import { routes } from "./routes";

Vue.use(VueRouter);
Vue.use(VueAxios, axios);

const router = new VueRouter({
    mode: "history",
    routes: routes,
});

//finalmente, definimos nuestra app de Vue
const app = new Vue({
    el: "#app",
    router: router,
    render: (h) => h(App),
});

