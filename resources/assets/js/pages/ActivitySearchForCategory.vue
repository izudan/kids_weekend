<template>
    <section class="section">
        <div class="container container-expand">
            <h1 class="title big-title is-block is-3">category</h1>
            <div class="category-wrapper">
                <div class="columns is-mobile is-multiline is-centered">
                    <router-link v-for="(data, index) in filterCategoryActivityData($route.query.category)" :key="data.activity_id" :to="{ name: 'IndivActivity', params: { id: data.activity_id }}" class="column is-quarter is-half-mobile">
                        <div class="image-container">
                            <div class="image-box">
                                <figure class="image">
                                    <progressive-img src="/images/art/art_ar_class.jpeg" />
                                </figure>
                            </div>
                        </div>
                        <div class="content-container">
                            <div class="content">
                                <div class="school-title text-completion-mobile has-text-weight-semibold has-text-primary">
                                    <span class="school-title-detail">{{ data.school_name }}</span>
                                </div>
                                <div class="activity-title text-completion-mobile has-text-weight-bold">
                                    {{ data.activity_name }}
                                </div>
                                <div class="activity-time text-completion">
                                    <span class="icon is-small"><i class="far fa-clock has-text-primary"></i></span>
                                    <time datetime="2016-1-1">{{ data.event_start_time }}</time>
                                </div>                            
                                <div class="short-description text-completion is-7">
                                    <span class="icon is-small"><i class="fas fa-child has-text-danger"></i></span>
                                    <span>{{ data.event_target_min_age }}</span>
                                    <span> 〜 </span>
                                    <span>{{ data.event_target_max_age }}才</span>
                                    <span class="icon is-small"><i class="fas fa-money-bill-alt has-text-warning"></i></span>
                                    <span>{{ data.event_price }}円</span>
                                </div>
                                <div class="category text-completion">
                                    <span class="tag is-light">English</span>
                                </div>
                                <div class="review text-completion">
                                    <span class="review-ave has-text-primary">4.99</span>
                                    <span class="icon is-small"><i class="fas fa-star has-text-warning"></i></span>
                                    <span class="icon is-small"><i class="fas fa-star has-text-warning"></i></span>
                                    <span class="icon is-small"><i class="fas fa-star has-text-warning"></i></span>
                                    <span class="icon is-small"><i class="fas fa-star has-text-warning"></i></span>
                                    <span class="icon is-small"><i class="fas fa-star has-text-warning"></i></span>
                                    <span class="review-amount has-text-gray">61</span>
                                </div>
                            </div>
                        </div>
                    </router-link>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import { mapActions, mapGetters } from 'vuex';

export default {
    data() {
        return {
        }
    },
    methods: {
        ...mapActions({
            fetchEventData: 'activity/fetchAllData'
        })
    },
    computed: {
        ...mapGetters({
            activityData: 'activity/activityData',
            isLoading: 'activity/isLoading',
            filterCategoryActivityData: 'activity/filterCategoryActivityData',
      })
    },
}
</script>

<style scoped>
.section {
    padding: 20px 20px 40px;
}
.container-expand {
    padding-bottom: 56px;
}
.column.is-one-quarter {
    max-width: 540px;
}
figure.image {
    height: 100%;
    width: 100%;
}
.content-container {
    background: white;
    height: auto;
}
.text-completion {
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    color: black;
}
.category-wrapper {
    margin-bottom: 20px;
}
.big-title {
    padding-bottom: 8px;
    border-bottom: 2px solid #f2f2f2;
}
.school-title {
    font-size: 12px;
    padding-top: 4px;
    padding-bottom: 4px;
}
.activity-title {
    padding-bottom: 4px;
}
.activity-time {
    padding-bottom: 4px;
}
.short-description {
    padding-bottom: 4px;
}
.category {
    padding-bottom: 4px;
}
.review {
    padding-bottom: 4px;
}
.review-ave {
    font-size: 10px;
}
.review-amount {
    font-size: 10px;
}
a:hover {
    opacity: 0.6;
}

@media screen and (min-width:480px) {
    .text-completion-mobile {
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        color: black;
    }
}
</style>