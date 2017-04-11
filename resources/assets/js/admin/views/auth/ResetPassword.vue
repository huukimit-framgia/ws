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
                                <h1 class="form-title">Reset password</h1>
                            </div>
                        </div>

                        <TextField
                            type="password"
                            name="password"
                            v-model="stub.password"
                            required="required"
                            label="Password"
                            :error="errors.password"
                            placeholder="Enter new password"
                        />

                        <TextField
                            type="password"
                            label="Password confirmation"
                            name="password"
                            v-model="stub.passwordConfirmation"
                            :error="errors.passwordConfirmation"
                            required="required"
                            placeholder="Repeat password"
                        />

                        <div class="row">
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-primary">Change password</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex'
    import stub from '../../stubs/auth/ResetPassword'
    import TextField from '../../../common/components/form/basic/TextField.vue'

    export default {
        name: 'ResetPassword',

        computed: {
        },

        methods: {
            ...mapActions({
                changePassword: 'changePassword'
            }),
            submit() {
                this.changePassword(this.stub)
            }
        },

        components: {TextField}
    }
</script>
