import Vue from 'vue';
import VueRouter from 'vue-router';

import homePage from '../components/pages/HomePage.vue';
import menuPage from '../components/pages/MenuPage.vue';
import planosPage from '../components/pages/PlanosPage.vue';
// import nuevoArchivoPage from '../components/pages/NuevoArchivo/NuevoArchivo.vue';

Vue.use(VueRouter)

const routes = [
    {
        path: '/home',
        component: homePage
    },
    {
        name: 'archivos',
        path: '/menu',
        component: menuPage
    },
    {
        path: '/planos',
        component: planosPage
    },
    // {
    //     path: '/nuevoArchivo',
    //     component: nuevoArchivoPage
    // }
];

export default new VueRouter({
    mode: 'history',
    routes
});