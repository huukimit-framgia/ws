/**
 * Created by kimnh on 12/04/2017.
 */
import data from '../../stubs/auth/ResetPassword'

export default {
    namespace: true,
    state: {
        data,
        errors: {}
    },
    getters: {
        password (state) {
            return state.password
        },
        passwordConfirmation (state) {
            return state.passwordConfirmation
        },
        errors (state) {
            return state.errors
        }
    },
    mutations: {
        setPassword (state, password) {
            state.password = password
        },
        setPasswordConfirmation (state, passwordConfirmation) {
            state.passwordConfirmation = passwordConfirmation
        },
        setErrors (state, errors) {
            state.errors = errors
        }
    }
}
