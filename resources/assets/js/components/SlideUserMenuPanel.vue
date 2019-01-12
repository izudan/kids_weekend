<template>
    <section class="section">
        <div class="">
            <div class="backToHome">
                <div class="home-icon">
                    <i class="fas fa-home"></i>
                </div>
                <router-link to="/">
                    <span class="menu-text" @click.prevent="closePanel">ホーム</span>
                </router-link>
            </div>
            <div class="activity">
                <div class="activity-icon">
                    <i class="fas fa-list"></i>
                </div>
                <a @click.prevent="handleActivity">
                    <span class="menu-text">アクティビティ</span>
                </a>
            </div>
            <div v-if="!isLoggedIn">
                <div class="login">
                    <div class="login-icon">
                        <i class="fas fa-sign-in-alt"></i>
                    </div>
                    <a @click.prevent="handleLogin">
                        <span class="menu-text">ログイン</span>
                    </a>
                </div>
                <div class="register">
                    <div class="register-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <a @click.prevent="handleRegister">
                        <span class="menu-text">登録する</span>
                    </a>
                </div>
            </div>
            <div v-else>
                <div class="mypage">
                    <div class="mypage-icon">
                        <i class="fas fa-user-tag"></i>
                    </div>
                    <a @click.prevent="handleConfirmReserve">
                        <span class="menu-text">マイページ</span>
                    </a>
                </div>
                <div class="myprofile">
                    <div class="myprofile-icon">
                        <i class="fas fa-user-edit"></i>
                    </div>
                    <a @click.prevent="handleEditMyprofile">
                        <span class="menu-text">プロフィール</span>
                    </a>
                </div>
                <div class="logout">
                    <div class="logout-icon">
                        <i class="fas fa-sign-in-alt"></i>
                    </div>
                    <a @click.prevent="handleLogout">
                        <span class="menu-text">ログアウト</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { mapGetters, mapActions } from 'vuex';

export default {
    name: 'UserMenu',
    data() {
        return {
            // showLoginModal: false,
        };
    },
    props: {
    },
    computed: {
        ...mapGetters({
            user: 'user/user',
            isLoggedIn: 'user/isLoggedIn'
        })
    },
    methods: {
        ...mapActions({
            logout: 'user/logout',
        }),
        closePanel() {
            this.$emit("closePanel", {});
            this.$router.push("/");
        },
        async handleLogin() {
            await this.closePanel();
            this.$router.push("/login");
        },
        async handleRegister() {
            await this.closePanel();
            this.$router.push("/register");
        },
        async handleLogout() {
          await this.logout();
          await this.closePanel();
          this.$router.push('/');
        },
        async handleActivity() {
            await this.closePanel();
            this.$router.push("/activity");
        },
        async handleConfirmReserve() {
            await this.closePanel();
            this.$router.push("/reserve");
        },
        async handleEditMyprofile() {
            await this.closePanel();
            this.$router.push("/users/edit");
        },
    }
}
</script>

<style scoped>
.section {
    padding: 20px;
}
.backToHome,
.login,
.register,
.logout,
.mypage,
.activity,
.myprofile
{
    display: flex;
    color: #084887;
    padding: 16px 0;
    border-bottom: 1px solid #EBEBEB;
}
.home-icon,
.login-icon,
.logout-icon,
.register-icon,
.mypage-icon,
.activity-icon,
.myprofile-icon
{
    color: #084887;
    margin-right: 16px;
}
.menu-text {
    color: #084887;
}
</style>