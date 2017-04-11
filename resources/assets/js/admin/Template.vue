<template>
    <div class="wrapper">
        <Navigation></Navigation>
    </div>
</template>

<script>
    import {Navigation, Sidebar} from './components/layout'

    export default {
        name: 'Template',

        components: {
            Navigation,
            Sidebar
        }
    }
</script>
