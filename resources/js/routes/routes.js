import Vue from 'vue';
import VueRouter from 'vue-router';

import homePage from '../components/pages/HomePage.vue';
import menuPage from '../components/pages/MenuPage.vue';
import planosPage from '../components/pages/PlanosPage.vue';

Vue.use(VueRouter)

const routes = [
    {
        path: '/home',
        component: homePage
    },
    {
        path: '/menu',
        component: menuPage
    },
    {
        path: '/planos',
        component: planosPage
    }
];

export default new VueRouter({
    mode: 'history',
    routes
});