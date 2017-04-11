<template>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-8 col-md-offset-4 col-sm-offset-2">
                    <form
                        method="post"
                        action="#"
                        class="form-horizontal base-form"
                        @submit.prevent="submit"
                    >
                        <div class="row">
                            <div class="form-group">
                                <h1 class="form-title">
                                    Reset password
                                </h1>
                                <p class="text-center">
                                    Please enter your email address to get link reset password.
                                </p>
                                <p class="alert alert-success text-center" v-if="!!successMsg">
                                    {{successMsg}}
                                </p>
                            </div>
                        </div>

                        <TextField
                            v-if="!!!successMsg"
                            type="email"
                            name="email"
                            v-model="email"
                            required="required"
                            :error="errors.email"
                            placeholder="Your email address"
                        />

                        <div class="row">
                            <div class="form-group">
                                <div class="pull-left">
                                    <router-link :to="{name: 'login'}" style="line-height: 2.9;">
                                        <i class="fa fa-arrow-left"></i> Back to login
                                    </router-link>
                                </div>
                                <div class="pull-right" v-if="!!!successMsg">
                                    <button type="submit" class="btn btn-primary">Continue</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapGetters, mapActions, mapMutations} from 'vuex'
    import TextField from '../../../common/components/form/basic/TextField.vue'

    export default {
        name: 'ForgotPassword',

        data: () => {
            return {
                email: '',
                successMsg: ''
            }
        },

        computed: {
            ...mapGetters({
                authenticated: 'authenticated',
                errors: 'getAuthErrors'
            })
        },

        methods: {
            ...mapActions({
                sendLinkResetPassword: 'sendLinkResetPassword'
            }),
            ...mapMutations({
                setAuthenticateError: 'setAuthenticateError',
            }),
            submit() {
                this.sendLinkResetPassword(this.email)
                    .then(({data}) => {
                        this.setAuthenticateError({})
                        this.successMsg = data.message
                    }, ({response}) => {
                        this.setAuthenticateError(response.data)
                    })
            }
        },

        components: {TextField}
    }
</script>
