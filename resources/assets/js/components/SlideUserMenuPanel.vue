<template>
    <section class="section">
        <h1 class="title" @click.prevent="closePanel">Kids Weekend</h1>
        <div class="">
            <div class="backToHome">
                <div class="home-icon">
                    <i class="fas fa-home"></i>
                </div>
                <router-link to="/">
                    <span class="menu-text" @click.prevent="closePanel">ホームへ</span>
                </router-link>
            </div>
            <div class="login">
                <div class="login-icon">
                    <i class="fas fa-sign-in-alt"></i>
                </div>
                <a>
                    <span class="menu-text">ログイン</span>
                </a>
            </div>
            <div class="register">
                <div class="register-icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a @click.prevent="">
                    <span class="menu-text">登録する</span>
                </a>
            </div>
        </div>
        <!--<login-modal-->
        <!--    v-if="showLoginModal"-->
        <!--    :showLoginModal="showLoginModal"-->
        <!--    :action="handleLogin"-->
        <!--    @close="loginModalToggle">-->
        <!--</login-modal>-->
    </section>
</template>

<script>

export default {
    name: 'UserMenu',
    data() {
        return {
            // showLoginModal: false,
        };
    },
    props: {
    },
    methods: {
        closePanel() {
            this.$emit("closePanel", {});
        },
        // handleLogin(email, password) {
        //   this.$router.push('/activity');
        //   this.login({email: email, password: password});
        // },
        // loginModalToggle(){
        //   this.showLoginModal = !this.showLoginModal;
        // },
    }
}
</script>

<style scoped>
.section {
    padding: 20px;
}
.backToHome, .login, .register {
    display: flex;
    color: #084887;
    padding: 16px 0;
    border-bottom: 1px solid #EBEBEB;
}
.home-icon {
    color: #ef767a;
    margin-right: 16px;
}
.login-icon {
    color: #ffd046;
    margin-right: 16px;
}
.register-icon{
    color: #03cea4;
    margin-right: 16px;
}
.menu-text {
    color: #084887;
}
</style>