<template>
    <div class="section">
        <h1 class="title" @click.prevent="closePanel">Kids Weekend</h1>
        <ul class="">
            <li class="backToHome">
                <router-link to="/" @click.prevent="closePanel">
                    ホームへ
                </router-link>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "navMenu",
    data() {
        return {};
    },
    props: {
        name: String
    },
    methods: {
        closePanel() {
            this.$emit("closePanel", {});
        }
    }
}
</script>

<style scoped>
.section {
    padding: 20px;
}
.backToHome {
    padding-bottom: 16px;
    border-bottom: 1px solid #EBEBEB;
}
</style>