require('./bootstrap');
import Vue from 'vue';
import router from './routes/routes.js';
import ViewUI from 'view-design';
import 'view-design/dist/styles/iview.css';
import common from './common.js';

Vue.use(ViewUI);
Vue.mixin(common);

//axios
import VueAxios from 'vue-axios';
import axios from 'axios';

Vue.use(VueAxios, axios);

window.Vue = require('vue');

Vue.component('main-app', require('./components/MainApp.vue').default);
const app = new Vue({
    el: '#app',
    router,
    // render: h => h(app)
});
