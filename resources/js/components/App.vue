<template>
    <div id="app">
        <app-navbar></app-navbar>
        <div class="container-fluid page-body-wrapper">
            <app-sidebar></app-sidebar>
            <!--<dashboard></dashboard>-->
            <router-view></router-view>
        </div>
        <app-footer></app-footer>

    </div>
</template>

<script>
    import navbarCustom from "./common/navbarCustom";
    import sidebarCustom from "./common/sidebarCustom";
    import footerCustom from "./common/footerCustom";
    /*import Dashboard from "./pages/dashboard";*/

    export default {
        name: 'app',
        components: {
            /*Dashboard,*/
            "app-navbar": navbarCustom,
            'app-sidebar': sidebarCustom,
            "app-footer": footerCustom,
        }
    }
</script>

<style>
    #app {
        color: #1bcfb4;
    }
</style>
