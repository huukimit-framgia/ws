<template>
    <div class="app-login">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-8 col-md-offset-4 col-sm-offset-2">
                    <form
                        method="post"
                        action="#"
                        class="form-horizontal login-form"
                        @submit.prevent="submit"
                    >
                        <div class="row">
                            <div class="form-group">
                                <h1 class="login-title">Welcome. Please login.</h1>
                            </div>
                        </div>

                        <TextField
                            type="email"
                            name="email"
                            v-model="user.email"
                            required="required"
                            label="Email"
                            :error="errors.email"
                            placeholder="Your email address"
                        />

                        <TextField
                            type="password"
                            label="Password"
                            name="password"
                            v-model="user.password"
                            :error="errors.password"
                            required="required"
                            placeholder="Your password"
                        />

                        <RememberBox
                            v-model="user.remember"
                            :error="errors.remember"
                        />

                        <div class="row">
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="sass">
    @import '../../../../sass/admin/pages/_login.scss';
</style>

<script>
    import {mapActions, mapGetters, mapMutations} from 'vuex'
    import TextField from '../../../common/components/form/basic/TextField.vue'
    import RememberBox from '../../components/auth/RememberBox.vue'
    import UserStub from '../../stubs/User'

    export default {
        name: 'login',
        components: {
            TextField,
            RememberBox
        },

        data: () => {
            return {
                user: UserStub,
                authenticated: false
            }
        },

        computed: {
            ...mapGetters({
                errors: 'getAuthErrors',
                authenticated: 'authenticated'
            })
        },

        methods: {
            ...mapActions({
                login: 'login'
            }),
            ...mapMutations({
                setAuthenticateError: 'setAuthenticateError',
                setAuthenticatedUser: 'setAuthenticatedUser'
            }),
            submit() {
                this.login(this.user)
                    .then(({data}) => {
                        this.setAuthenticatedUser(data.user)
                        this.$router.push({name: 'dashboard'})
                    }, ({response}) => {
                        this.setAuthenticateError(response.data)
                    });
            }
        }
    }
</script>
