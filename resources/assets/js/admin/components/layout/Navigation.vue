<template>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button
                    type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#app-admin-navbar-collapse"
                    aria-expanded="false"
                >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <router-link class="navbar-brand" :to="{name: 'dashboard'}">WS</router-link>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="app-admin-navbar-collapse">
                <ul class="nav navbar-nav">
                    <!--<li>-->
                        <!--<a href="#">Posts</a>-->
                    <!--</li>-->
                    <!--<li>-->
                        <!--<a href="#">New Post</a>-->
                    <!--</li>-->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown" v-if="authenticated">
                        <a
                            href="#"
                            class="dropdown-toggle"
                            data-toggle="dropdown"
                            role="button"
                            aria-haspopup="true"
                            aria-expanded="false"
                        >
                            {{user.first_name}} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Setting</a></li>
                            <li role="separator" class="divider"></li>
                            <li>
                                <a href="/logout">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</template>

<script>
    import {mapGetters} from 'vuex'

    export default {
        name: 'Navigation',

        computed: {
            ...mapGetters({
                user: 'user',
                authenticated: 'authenticated'
            })
        }
    }
</script>
