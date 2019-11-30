import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './Views/Home'
import Dashboard from './Views/Dashboard'

Vue.use(VueRouter)

const router = new VueRouter({
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/dashboard',
            component: Dashboard
        },
    ],
    mode: 'history',
    base: '/admin/',
})


new Vue({
    el: '#admin',
    router
})
