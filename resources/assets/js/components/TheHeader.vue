<template>
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a role="button" aria-label="menu" aria-expanded="false" class="navbar-item brand" :class="{ 'is-active': mobileMenuActiveToggle }" @click.prevent="showNavMenuPanel">
          <p class="brand">Kids Weekend</p>
          <i class="fas fa-angle-down"></i>
        </a>
        
        <slideout-panel></slideout-panel>
      </div>
    
      <div class="navbar-menu">
        <div class="navbar-end">
          <div class="navbar-item">
            <div v-if="!isLoggedIn" class="buttons">
              <a class="button btn-expand" @click.prevent="showSearchPanel">
                <i class="fas fa-search"></i>
              </a>
              <a class="button btn-expand btn-register" @click.prevent="registerModalToggle">
                <strong class="has-text-white">登録する</strong>
              </a>
              <a class="button btn-expand btn-login" @click.prevent="loginModalToggle">
                <strong class="has-text-white">ログイン</strong>
              </a>
            </div>
            <div v-else class="buttons">
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
          <register-modal
            v-if="showRegisterModal"
            :showRegisterModal="showRegisterModal"
            @close="registerModalToggle">
          </register-modal>
          
          <login-modal
            v-if="showLoginModal"
            :showLoginModal="showLoginModal"
            :action="handleLogin"
            @close="loginModalToggle">
          </login-modal>
          
          <logout-modal
            v-if="showLogoutModal"
            :action="handleLogout"
            :showLoginModal="showLogoutModal"
            @close="logoutModalToggle">
          </logout-modal>
          
          <slideout-panel></slideout-panel>
        </template>
      </div>
    </nav>
</template>

<script>
import { mapActions, mapGetters } from 'vuex';

export default {
  data() {
    return {
      searchForm: {
        openOn: "right",
        maxWidth: 1280
      },
      navMenu: {
        openOn: "left",
        maxWidth: 275,
        timeout: 1000
      },
      normalMenuActive: false,
      mobileMenuActive: false,
      dropdownActive: false,
      showRegisterModal: false,
      showLoginModal: false,
      showLogoutModal: false
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
      login: 'user/login',
      logout: 'user/logout',
    }),
    handleLogin(email, password) {
      this.$router.push('/activity');
      this.login({email: email, password: password});
    },
    handleLogout() {
      this.logout();
    },
    showSearchPanel() {
      const panel = this.$showPanel({
        component: "search",
        cssClass: "search",
        openOn: this.searchForm.openOn,
        width: this.searchForm.maxWidth
      });
    },
    showNavMenuPanel() {
      const panel = this.$showPanel({
        component: "navMenu",
        cssClass: "navMenu",
        openOn: this.navMenu.openOn,
        width: this.navMenu.maxWidth,
        props: {
          name: this.navMenu.name
        }
      });
      setTimeout(() => {
        panel.hide();
      }, this.navMenu.timeout);
    },
    normalMenuActiveToggle(){
      this.normalMenuActive = !this.normalMenuActive;
    },
    mobileMenuActiveToggle(){
      this.mobileMenuActive = !this.mobileMenuActive;
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