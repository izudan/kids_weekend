<template>
<div>
    <h1 class="title has-text-centered">検索</h1>
    <div class="has-text-centered">
        <a class="button is-primary" @click.prevent="closePanel">
            Close Panel
        </a>
    </div>
    <div class="tabs is-centered">
      <ul>
        <li class="is-active">
          <a>
            <span class="icon is-small"><i class="fas fa-book" aria-hidden="true"></i></span>
            <span>All</span>
          </a>
        </li>
        <li>
          <a>
            <span class="icon is-small"><i class="fas fa-location-arrow has-text-success"></i></span>
            <span>場所</span>
          </a>
        </li>
        <li>
          <a>
            <span class="icon is-small"><i class="fas fa-tags"></i></span>
            <span>ジャンル</span>
          </a>
        </li>
        <li>
          <a>
            <span class="icon is-small"><i class="fas fa-child has-text-danger"></i></span>
            <span>年齢</span>
          </a>
        </li>
        <li>
          <a>
            <span class="icon is-small"><i class="fas fa-star has-text-warning"></i></span>
            <span>お気に入り</span>
          </a>
        </li>
      </ul>
    </div>
</div>
</template>

<script>
export default {
    name: "search",
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