<template>
    <div>
        <v-container>
            <v-alert type="info">hi How are you?</v-alert>
            <router-link to="/foo">foo</router-link>
            <router-link to="/error">error</router-link>
            <v-btn link to="/error"> error</v-btn>
        </v-container>
        <v-content>
            <router-view></router-view>
        </v-content>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
