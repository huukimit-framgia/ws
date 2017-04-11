/**
 * Created by kimnh on 02/04/2017.
 */
require('../common/bootstrap')

import App from '../common/App.vue'
import router from './router'
import store from './store'

new Vue({
    router,
    store,
    template: '<App/>',
    components: {App}
}).$mount('#app')
