<template>
    <div class="row">
        <div class="form-group">
            <label for="remember">
                <input
                    type="checkbox"
                    id="remember"
                    value="remember"
                    @change="$emit('input', $event.target.checked)"
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
</template>

<script>
    export default {
        name: 'RememberBox',
        props: {
            value: {
                type: Boolean,
                default: false
            }
        }
    }
</script>
