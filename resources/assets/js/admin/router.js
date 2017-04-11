/**
 * Created by kimnh on 02/04/2017.
 */
import Vue from 'vue'
import Router from 'vue-router'
import Template from './Template.vue'
import Dashboard from './views/Dashboard.vue'
import PageNotFound from './views/pages/Page404.vue'
import Login from './views/auth/Login.vue'
import ForgotPassword from './views/auth/ForgotPassword.vue'
import ResetPassword from './views/auth/ResetPassword.vue'

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
        path: '/password/reset',
        name: 'password.request',
        component: ForgotPassword
    },
    {
        path: '/password/reset/:token',
        name: 'password.reset',
        component: ResetPassword
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
