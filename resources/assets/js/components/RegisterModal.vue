<template>
  <transition name="modal"  :class="{ 'is-active': showRegisterModal }">
    <div class="modal-mask">
      <div class="modal-wrapper">
        <div class="modal-container">
          
          <div class="modal-header">
            <slot name="header">
              <button class="delete" aria-label="close" @click="$emit('close')"></button>
            </slot>
          </div>

          <div class="modal-body">
            <slot name="body">
                <form>
                    <p class="register-title">メールアドレスで登録</p>
                    <div class="field">
                      <div class="control has-icons-left has-icons-right">
                        <input
                          class="input"
                          type="email"
                          placeholder="メールアドレス"
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
                      <div class="control has-icons-left">
                        <input
                          class="input"
                          type="password"
                          placeholder="パスワード"
                          v-model="password"
                          @keyup.enter="register"
                          required>

                        <span class="icon is-small is-left">
                          <i class="fas fa-lock"></i>
                        </span>
                      </div>
                    </div>
                </form>
            </slot>
          </div>

          <div class="modal-footer">
            <slot name="footer">
              <button class="button is-block is-info is-fullwidth"  @click="register">
                登録する
              </button>
            </slot>
          </div>
        </div>
      </div>
    </div>
  </transition>
</template>

<script>
export default {
  data() {
    return {
      email: '',
      password: '',
    }
  },
  props: {
    showRegisterModal: Boolean,
    action: {
      type: Function,
      required: true
    }
  },
  methods: {
    register() {
      this.action(this.email, this.password)
    }
  }
}
</script>

<style scoped>
.btn-line {
  background-color: #00c300;
  border: 1px solid #00c300;
  color: white;
}
.orField {
    padding-top: 10px;
    padding-bottom: 15px;
}
.register-title {
  padding-top: 10px;
  padding-bottom: 15px;
  font-weight: bold;
  font-size: 18px;
}
.modal-mask {
  position: fixed;
  z-index: 9998;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, .5);
  display: table;
  transition: opacity .3s ease;
}
.modal-wrapper {
  display: table-cell;
  vertical-align: middle;
}
.modal-container {
  width: 300px;
  margin: 0px auto;
  padding: 20px 30px;
  background-color: #fff;
  border-radius: 2px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, .33);
  transition: all .3s ease;
  font-family: Helvetica, Arial, sans-serif;
}
.modal-header h3 {
  margin-top: 0;
  color: #42b983;
}
.modal-body {
  margin: 20px 0;
}
.modal-default-button {
  float: right;
}
.modal-enter {
  opacity: 0;
}
.modal-leave-active {
  opacity: 0;
}
.modal-enter .modal-container,
.modal-leave-active .modal-container {
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
</style>