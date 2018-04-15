import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

import App from './views/App';
import Hello from './views/Hello';
import Home from './views/Home';
import TestsIndex from './views/TestsIndex'

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/hello',
            name: 'hello',
            component: Hello,
        },
        {
            path: 'tests',
            name: 'tests.index',
            component: TestsIndex
        }
    ],
});

const app = new Vue({
    el: '#app',
    components: { App },
    router,
});