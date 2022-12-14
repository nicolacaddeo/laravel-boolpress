require('./bootstrap');

window.Vue = require('vue');

window.axios = require('axios');

import App from "./views/App";
import router from "./router";

const app = new Vue({
    el: '#root',
    render: h => h(App),
    router
});
