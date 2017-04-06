<template>
    <div>
        <app-header></app-header>

        <a class="mobile">MENU</a>

        <div class="app-container">
            <app-sidebar></app-sidebar>

            <div class="app-content">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    import {AppHeader, AppSidebar} from './layout'

    export default {
        components: {
            AppHeader,
            AppSidebar
        },
        mounted() {
            $(document).ready(() => {
                $("a.mobile").click(() => {
                    $(".sidebar").slideToggle('fast');
                });

                window.onresize = () =>  {
                    if ($(window).width() > 480) {
                        $(".sidebar").show();
                    }
                };
            });
        }
    }
</script>
