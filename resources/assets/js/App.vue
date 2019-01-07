<template>
    <div>
        <the-header></the-header>
        <radius-menu></radius-menu>
        <router-view></router-view>
        <the-footer></the-footer>
    </div>
</template>
<script>
import TheHeader from './components/TheHeader.vue';
import TheFooter from './components/TheFooter.vue';
import RadiusMenu from './components/RadiusMenu.vue';
import { mapActions } from 'vuex';
import http from './services/http';

export default {
    components: {
        TheHeader,
        TheFooter,
        RadiusMenu
    },
    methods: {
        ...mapActions({
            init: 'user/setCurrentUser'
        })
    },
    created() {
        http.init();
        this.init();
    }
}
</script>

<style scoped>
body {
    font-family: Raleway, "Hiragino Kaku Gothic ProN", Meiryo, sans-serif;
    color: #484848;
    box-sizing:  border-box;
    overflow: auto;
    height: 100%;
}
body.open {
    overflow: hidden;
}
</style>