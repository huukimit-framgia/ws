<template>
    <div class="app-login">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <form action="#" method="post" class="form-horizontal login-form">
                        <div class="row">
                            <div class="form-group">
                                <h1 class="login-title">Welcome. Please login.</h1>
                            </div>
                        </div>

                        <TextField
                            name="email"
                            v-model="email"
                            required="required"
                            label="Email"
                            placeholder="Your username or email"
                        />

                        <TextField
                            type="password"
                            label="Password"
                            name="password"
                            v-model="password"
                            required="required"
                            placeholder="Your password"
                        />

                        <div class="row">
                            <div class="form-group">
                                <label for="remember">
                                    <input
                                        type="checkbox"
                                        id="remember"
                                        value="remember"
                                        v-model="remember"
                                    />
                                    Remember me
                                </label>

                                <router-link
                                    :to="{name: 'auth.form.forgot-password'}"
                                    class="link-forgot-password"
                                >
                                    Forgot password
                                </router-link>
                            </div>
                        </div>

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

<script>
    import TextField from '../../components/form/basic/TextField.vue'

    export default {
        name: 'login',
        components: {
            TextField
        },
        data: () => {
            return {
                email: '',
                password: '',
                remember: false
            }
        }
    }
</script>

<style lang="sass">
    @import '../../../../sass/admin/pages/_login.scss';
</style>
