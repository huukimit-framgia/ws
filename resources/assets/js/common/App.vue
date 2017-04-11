<template>
    <router-view></router-view>
</template>

<script>
    import {mapMutations} from 'vuex'
    import {auth} from '../admin/api'
    import router from 'vue-router'

    export default {
        name: 'App',

        mounted() {
            auth.check()
                .then(({data}) => {
                        this.setAuthenticatedUser(data.user);
                    }, () => console.log('Cannot get authenticated user')
                );
        },

        methods: {
            ...mapMutations({
                setAuthenticatedUser: 'setAuthenticatedUser'
            })
        }
    }
</script>
