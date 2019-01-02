<template>
  <div class="is-hidden-mobile">
    <radial-menu
      class="radius-menu"
      :itemSize="75"
      :radius="125"
      :angle-restriction="90">
        <radial-menu-item 
          v-for="(item, index) in items" 
          :key="index" 
          class="radius-menu-item"
          @click="() => handleClick(item)">
          <a class="button btn-expand">
            <span class="item">{{ item }}</span>
          </a>
        </radial-menu-item>
      </radial-menu>
  </div>
</template>

<script>
import { RadialMenu,  RadialMenuItem } from 'vue-radial-menu';

export default {
  components: {
    RadialMenu,
    RadialMenuItem
  },
  data () {
    return {
      items: ['明日', '明後日', 'トップへ']
    }
  },
  methods: {
    handleClick (item) {
      console.log('clicked');
    }
  }
}
</script>

<style scoped>
.radius-menu{
    margin: auto;
    margin-top: 300px;
    background-color: white;
    position:fixed;
    right: 48px;
    bottom: 80px;
    z-index: 1000;   
}
.radius-menu-item {
    background-color: white;
}
.btn-expand {
    border: none;
}
.item {
  font-size: 8px;
}
</style>