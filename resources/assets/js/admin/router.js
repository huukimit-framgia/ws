/**
 * Created by kimnh on 02/04/2017.
 */
import Vue from 'vue'
import Router from 'vue-router'
import Template from './Template.vue'
import Dashboard from './views/Dashboard.vue'
import PageNotFound from './views/pages/Page404.vue'
import Login from './views/auth/Login.vue'
import ForgotPassword from './views/auth/Login.vue'

Vue.use(Router)

let routes = [
    {
        path: '/admin',
        name: 'root',
        redirect: '/admin/dashboard',
        component: Template,
        children: [
            {
                path: 'dashboard',
                name: 'dashboard',
                component: Dashboard
            }
        ]
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/admin/forgot-password',
        name: 'auth.form.forgot-password',
        component: ForgotPassword
    },
    {
        path: '*',
        name: 'page.404',
        component: PageNotFound,
    }
]

const router = new Router({
    mode: 'history',
    root: '/admin',
    routes
})

// Accept path "/admin/" as "/admin":
router.beforeEach((to, from, next) => {
    if (to.path !== '/' && /\/$/g.test(to.path)) {
        router.replace(to.path.replace(/\/$/g, ''))
    } else {
        next()
    }
})

export default router
