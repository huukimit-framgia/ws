/**
 * Created by kimnh on 02/04/2017.
 */
import {auth} from '../../api'

export default {
    state: {
        user: {},
        authenticated: false,
        error: {}
    },
    mutations: {
        setAuthenticateError (state, error) {
            state.error = error
        },
        setAuthenticatedUser (state, user) {
            state.user = user
            state.authenticated = user !== null && user !== undefined
        },
        logout (state) {
            state.user = {}
            state.authenticated = false
        }
    },
    getters: {
        user (state) {
            return state.user
        },
        authenticated (state) {
            return state.authenticated
        },
        getAuthErrors (state) {
            return state.error
        }
    },
    actions: {
        login ({commit}, user) {
            return auth.login(user)
        }
    }
}
