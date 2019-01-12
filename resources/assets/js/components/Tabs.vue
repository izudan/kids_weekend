<template>
  <div>
    <div class="tabs is-boxed is-centered">
      <ul>
        <li v-for="tab in tabs" v-bind:class="{'is-active': tab.isActive}">
          <a @click="selectTab(tab)" class="tab-name">
            {{ tab.name }}
          </a>
         </li>
      </ul>
    </div>
    <div class="tab-details">
      <slot></slot>
    </div>
  </div>
</template>

<script>
export default {
    data() {
        return {
            tabs: [],
        }
    },
    created() {
        this.tabs = this.$children;
    },
    methods: {
        selectTab(selectedTab) {
            this.tabs.forEach(tab => {
                tab.isActive = (selectedTab.name == tab.name)
            }) 
        }
    }
}
</script>

<style scoped>
.tabs {
    margin-bottom: 12px;
}
.tab-name {
    padding: 8px 36px;
}
</style>