<template>
    <div>
        <the-header></the-header>
        <radius-menu></radius-menu>
        <router-view></router-view>
        <the-footer></the-footer>
    </div>
</template>
<script>
import { mapActions } from 'vuex';
import http from './services/http';

export default {
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
    font-family: Circular, "Helvetica Neue", Helvetica,Arial, 'Hiragino Kaku Gothic ProN','ヒラギノ角ゴ ProN W3', sans-serif;
    color: #484848;
    box-sizing:  border-box;
}
</style>