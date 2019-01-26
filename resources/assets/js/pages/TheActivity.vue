<template>
<main>
    <div class="loading-container" v-if="isLoading">
        <fade-loader class="loading"></fade-loader>
    </div>

    <section v-else class="section">
        <div v-for="(categorydata) in category" :key="categorydata.category_id" class="container container-expand">
            <h1 class="title big-title is-block is-3">{{ categorydata.category_name }}</h1>
            <div class="category-wrapper">
                <div class="columns is-multiline is-centered">
                    <carousel
                        :autoplayHoverPause="true"
                        :perPageCustom="[[768, 2], [1024, 3.5]]"
                        style="width: 100%"
                        >
                        <slide v-for="(data, index) in filterCategoryActivityData(categorydata.category_id)" :key="index">
                            <router-link :to="{ name: 'IndivActivity', params: { id: data.activity_id }}" class="column is-quarter">
                                <div class="image-container">
                                    <div class="image-box">
                                        <figure class="image">
                                          <progressive-img v-if="categorydata.category_id === 1" src="/images/education/edu_kids_larning_class.jpeg"/>
                                          <progressive-img v-if="categorydata.category_id === 2" src="/images/music/music_music_school.jpeg" />
                                          <progressive-img v-if="categorydata.category_id === 3" src="/images/sports/sports_ballet_class1.jpeg" />
                                          <progressive-img v-if="categorydata.category_id === 4" src="/images/art/art_ar_class.jpeg" />
                                          <progressive-img v-if="categorydata.category_id === 5" src="/images/science/science_baby_programing_class.jpg" />
                                          <progressive-img v-if="categorydata.category_id === 6" src="/images/language/language_english.jpeg" />
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
                        </slide>
                    </carousel>
                </div>
            </div>
            <router-link :to="{ path: 'search', query: { category: categorydata.category_id }}" class="is-block is-2 display-category">
                <span>すべての{{ categorydata.category_name }}を表示する</span>
                <span class="is-hidden-mobile"><i class="fa fa-angle-right"></i></span>
            </router-link>
        </div>
    </section>
</main>
</template>

<script>
import FadeLoader from 'vue-spinner/src/FadeLoader.vue';
import { mapActions, mapGetters } from 'vuex';

export default {
    components: {
        FadeLoader
    },
    data() {
        return {
            category: [
                {
                    category_id: 1,
                    category_name: "教育"
                },
                {
                    category_id: 2,
                    category_name: '音楽'
                },
                {
                    category_id: 3,
                    category_name: "スポーツ"
                },
                {
                    category_id: 4,
                    category_name: "アート"
                },
                {
                    category_id: 5,
                    category_name: "サイエンス"
                },
                {
                    category_id: 6,
                    category_name: "コミュニケーション"
                }
            ],
            isImgLoading: false
        }
    },
    methods: {
        ...mapActions({
            fetchEventData: 'activity/fetchAllData'
        }),
        loading() {
            this.isImgLoading != this.isImgLoading;
        }
    },
    computed: {
        ...mapGetters({
            activityData: 'activity/activityData',
            isLoading: 'activity/isLoading',
            filterCategoryActivityData: 'activity/filterCategoryActivityData',
      })
    },
    created() {
        this.fetchEventData();
    }
}
</script>

<style scoped>
.loading-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
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
.display-category {
    margin-top: 24px;
    font-size: 18px;
    font-weight: bold;
    color: #57b8ff;
}


.search {
}
.search-today {
    width: 80%;
    height: auto;
    margin-right: 8px;
    border: 1px solid #EBEBEB;
    border-radius: 4px;
}
.search-tomorrow {
    height: auto;
    margin-right: 8px;
    border: 1px solid #EBEBEB;
    border-radius: 4px;
}
.search-date {
    height: auto;
    margin-right: 8px;
    border: 1px solid #EBEBEB;
    border-radius: 4px;
}
.search-card {
    height: auto;
}
.search-card-part {
    display: flex;
    justify-content: flex-start;
    align-items: center;
}
.search-card-left-part {
    width: auto;
    margin-right: 16px;
}
.search-card-right-part {
}
@media screen and (min-width:480px) {
    .text-completion-mobile {
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        color: black;
    }
}
@media screen and (max-width: 768px) {
    .display-category {
        width: 100%;
        text-align: center;
        margin-top: 24px;
        padding: 8px;
        color: #57b8ff;
        border: 2px solid #57b8ff;
        border-radius: 4px;
    }
}
</style>