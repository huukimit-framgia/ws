<template>
    <div>
        <h1>Dashboard</h1>
        <p>
            <router-link :to="{name: 'root'}">Click here</router-link> to refresh.
        </p>
    </div>
</template>

<script>
    export default {
        name: 'dashboard'
    }
</script>
