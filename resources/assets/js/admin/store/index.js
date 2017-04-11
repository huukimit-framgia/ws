/**
 * Created by kimnh on 02/04/2017.
 */
import Vue from 'vue'
import Vuex from 'vuex'
import auth from './auth/auth'
import resetPassword from './auth/reset-password'

Vue.use(Vuex)

const store = new Vuex.Store({
    modules: {auth, resetPassword}
})

export default store
