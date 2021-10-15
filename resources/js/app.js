require('./bootstrap');
import Vue from 'vue';
import router from './routes/routes.js';
import ViewUI from 'view-design';
import 'view-design/dist/styles/iview.css';

Vue.use(ViewUI);

window.Vue = require('vue');

Vue.component('main-app', require('./components/MainApp.vue').default);
const app = new Vue({
    el: '#app',
    router
});
