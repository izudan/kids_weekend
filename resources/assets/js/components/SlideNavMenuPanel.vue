<template>
<div>
    <h1 class="title has-text-centered">NavMenu</h1>
    <div class="has-text-centered">
        <a class="button is-primary" @click.prevent="closePanel">
            Close Panel
        </a>
    </div>
    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-end">
            <div class="navbar-item">
                <div class="buttons">
                    <a class="button is-primary">
                        <strong>登録する</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    name: "navMenu",
    data() {
        return {};
    },
    methods: {
        closePanel() {
            this.$emit("closePanel", {});
        }
    }
}
</script>