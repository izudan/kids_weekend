<template>
    <section class="section">
        <div class="form-container">
            <form>
                <p class="register-title">新規登録</p>
                <div class="field">
                    <label class="label">メールアドレス</label>
                    <div class="control has-icons-left has-icons-right">
                        <input
                            class="input"
                            type="email"
                            placeholder="半角英数"
                            v-model="email"
                            @keyup.enter="register"
                            required
                            autofocus>
                      
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                </div>
                <div class="field">
                    <label class="label">パスワード</label>
                    <div class="control has-icons-left">
                        <input
                            class="input"
                            type="password"
                            placeholder="6~16文字 半角英数"
                            v-model="password"
                            @keyup.enter="register"
                            required>
    
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                </div>
                <div class="btn-container">
                    <button class="button is-block is-fullwidth" @click="handleRegister">
                        登録する
                    </button>
                </div>
            </form>
        </div>        
    </section>
</template>

<script>
import { mapActions } from 'vuex';

export default {
  data() {
    return {
      email: '',
      password: '',
    }
  },
  methods: {
    ...mapActions({
        register: 'user/register'
    }),
    async handleRegister() {
        await this.register({email: this.email, password: this.password});
        this.$router.push('/activity');
    },
  }
}
</script>

<style type="scss" scoped>
.btn-line {
  background-color: #00c300;
  border: 1px solid #00c300;
  color: white;
}
.register-title {
  padding-top: 10px;
  padding-bottom: 15px;
  font-weight: bold;
  font-size: 18px;
}
.label {
    font-size: 12px;
    font-weight: normal;
}
.btn-container {
    margin-top: 24px;
}
.btn-container .button {
    background-color:  #03cea4;
    border: 1px solid  #03cea4;
    color: white;
}
.reset-password {
    margin-top: 15px;
    text-align: center;
}
@media screen and (min-width: 1024px) {
    .form-container {
        padding: 0 400px;
    }
}
</style>