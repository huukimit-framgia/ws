/**
 * Created by kimnh on 02/04/2017.
 */
import Vue from 'vue'
import Vuex from 'vuex'
import auth from './modules/auth'

Vue.use(Vuex)

const store = new Vuex.Store({
    modules: {auth}
})

export default store
