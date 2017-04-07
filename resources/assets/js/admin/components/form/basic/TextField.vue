<template>
    <div class="row">
        <div class="form-group">
            <label v-if="label" class="control-label">{{label}}</label>
            <input
                :type="type"
                :name="name"
                ref="input"
                class="form-control"
                :required="required"
                :value="value"
                @input="updateValue"
                :placeholder="placeholder"
            />
        </div>
    </div>
</template>

<script>
    export default {
        props: {
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

        methods: {
            updateValue() {
                this.$emit('input', this.$refs.input.value);
            }
        }
    }
</script>
