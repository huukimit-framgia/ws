<template>
    <div class="row">
        <div :class="`form-group ${hasError}`">
            <label v-if="label" class="control-label">{{label}}</label>
            <input
                :type="type"
                :name="name"
                ref="input"
                class="form-control"
                :required="required"
                :value="value"
                @change="$emit('input', $event.target.value)"
                :placeholder="placeholder"
            />
            <span class="help-block animated fadeIn" v-if="error">{{error}}</span>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            error: {
                type: String,
                default: null
            },
            label: {
                type: String,
                default: null
            },
            name: {
                type: String,
                default: null
            },
            type: {
                type: String,
                default: 'text'
            },
            required: {
                type: String,
                default: null
            },
            value: {
                type: String,
                default: ''
            },
            placeholder: {
                type: String,
                default: null
            }
        },
        computed: {
            hasError() {
                return this.error ? 'has-error' : ''
            }
        }
    }
</script>
