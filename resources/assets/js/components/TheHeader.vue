<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <router-link to="/" role="button" aria-label="menu" aria-expanded="false" class="navbar-item brand">
          <p class="title is-4">Kids Weekend</p>
        </router-link>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" @click.prevent="showUserMenuPanel">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>

        <slideout-panel></slideout-panel>
      </div>
    
      <div class="navbar-menu">
        <div class="navbar-end">
          <div class="navbar-item">
            <div v-if="!isLoggedIn" class="buttons">
              <router-link to="/register" class="button btn-expand btn-register">
                <strong class="has-text-white">登録する</strong>
              </router-link>
              <!--<a class="button btn-expand btn-register" @click.prevent="registerModalToggle">-->
              <!--  <strong class="has-text-white">登録する</strong>-->
              <!--</a>-->
              <!--<a class="button btn-expand btn-login" @click.prevent="loginModalToggle">-->
              <!--  <strong class="has-text-white">ログイン</strong>-->
              <!--</a>-->
              <router-link to="/login" class="button btn-expand btn-login">
                <strong class="has-text-white">ログイン</strong>
              </router-link>
            </div>
            <div v-else class="buttons is-hidden-mobile">
              <div class="dropdown is-right" :class="{ 'is-active': dropdownActive }">
                  <div class="dropdown-trigger">
                      <button class="button btn-dropdown is-light" aria-haspopup="true" aria-controls="dropdown-menu" @click.prevent="dropdownToggle">
                          <span>{{ user.name }}</span>
                          <span class="icon is-small">
                              <i class="fas fa-angle-down" aria-hidden="true"></i>
                          </span>
                      </button>
                  </div>
                  <div class="dropdown-menu" role="menu">
                      <div class="dropdown-content">
                          <a class="dropdown-item">
                              <p><strong>Sign in as</strong></p>
                              @kidsweekend
                          </a>
                          <hr class="dropdown-divider">
                          <router-link to="/users" class="dropdown-item">
                              プロフィールを編集する
                          </router-link> 
                          <a class="dropdown-item">
                              予約中のアクティビティ
                          </a>                          
                          <a class="dropdown-item">
                              アカウントの設定
                          </a>
                          <hr class="dropdown-divider">
                          <a class="dropdown-item">
                              ヘルプ
                          </a>
                          <a class="dropdown-item" @click.prevent="logoutModalToggle">
                            ログアウト
                          </a>
                      </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <template>
          <!--<register-modal-->
          <!--    v-if="showRegisterModal"-->
          <!--    :action="handleRegister"-->
          <!--    :showRegisterModal="showRegisterModal"-->
          <!--    @close="registerModalToggle">-->
          <!--</register-modal>-->
            
          <!--<login-modal-->
          <!--    v-if="showLoginModal"-->
          <!--    :showLoginModal="showLoginModal"-->
          <!--    :action="handleLogin"-->
          <!--    @close="loginModalToggle">-->
          <!--</login-modal>-->
            
          <logout-modal
              v-if="showLogoutModal"
              :action="handleLogout"
              :showLogoutModal="showLogoutModal"
              @close="logoutModalToggle">
          </logout-modal>
          
          <drop-down
            v-if="showDropDown"
            :action="handle"
          ></drop-down>
        </template>
      </div>
    </nav>
</template>

<script>
import RegisterModal from './RegisterModal';
import LoginModal from './LoginModal';
import LogoutModal from './LogoutModal';
import DropDown from './DropDown';
// import UserMenu from './SlideUserMenuPanel';
import { mapActions, mapGetters } from 'vuex';

export default {
  components: {
      RegisterModal,
      LoginModal,
      LogoutModal,
      DropDown
  },
  data() {
    return {
      userMenu: {
        openOn: "right",
        maxWidth: 275
      },
      userMenuActive: false,
      dropdownActive: false,
      showRegisterModal: false,
      showLoginModal: false,
      showLogoutModal: false,
      showDropDown: false
    };
  },
  computed: {
    ...mapGetters({
        user: 'user/user',
        isLoggedIn: 'user/isLoggedIn'
    })
  },
  methods: {
    ...mapActions({
      register: 'user/register',
      login: 'user/login',
      logout: 'user/logout',
    }),
    async handleRegister(email, password) {
      await this.registerModalToggle();
      this.register({email: email, password: password});
    },
    async handleLogin(email, password) {
      await this.loginModalToggle();
      await this.login({email: email, password: password});
      this.$router.push('/activity');
    },
    async handleLogout() {
      await this.logoutModalToggle();
      this.logout();
      this.$router.push('/');
    },
    showUserMenuPanel() {
      const panel = this.$showPanel({
        component: "UserMenu",
        cssClass: "UserMenu",
        openOn: this.userMenu.openOn,
        width: this.userMenu.maxWidth,
        props: {
        }
      });
      
      panel.promise.then(result => {
        this.$router.push('/login');
        console.log(result)
      });
    },
    userMenuActiveToggle(){
      this.mobileMenuActive = !this.userMenuActive;
    },
    dropdownToggle(){
      this.dropdownActive = !this.dropdownActive;
    },
    registerModalToggle(){
      this.showRegisterModal = !this.showRegisterModal;
    },
    loginModalToggle(){
      this.showLoginModal = !this.showLoginModal;
    },
    logoutModalToggle(){
      this.showLogoutModal = !this.showLogoutModal;
    },
    dropDownToggle(){
      this.showDropDown = !this.showDropDown;
    }
  }
}
</script>

<style scoped>
.brand {
    display: flex;
    font-size: 18px;
    font-weight: bold;
    padding-right: 8px;
}
.button.btn-register {
  background-color: #03cea4;
}
.button.btn-login {
  background-color: #57b8ff;
}
.button.btn-logout {
  background-color: #ef767a;
}
.btn-expand {
  border: none;
}
.btn-dropdown {
  border: none;
}
</style>