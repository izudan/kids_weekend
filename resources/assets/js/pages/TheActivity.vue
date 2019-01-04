<template>
<main>
    <section class="section">
        <div v-for="(categoryTitle, index) in category" :key="index" class="container container-expand">
            <h1 class="title big-title is-block is-3">{{ categoryTitle }}</h1>
            <div class="category-wrapper">
                <div class="columns is-multiline is-centered">
                    <carousel
                        :autoplayHoverPause="true"
                        :perPageCustom="[[768, 2], [1024, 3.5]]"
                        style="width: 100%"
                        >
                        <slide v-for="(index) in slideData" :key="index">
                            <router-link :to="{ name: 'IndivActivity', params: { id: 100 }}" class="column is-quarter">
                                <div class="image-container">
                                    <div class="image-box">
                                        <figure class="image">
                                          <img src="https://bulma.io/images/placeholders/128x128.png">
                                        </figure>
                                    </div>
                                </div>
                                <div class="content-container">
                                    <div class="content">
                                        <div class="school-title text-completion-mobile has-text-weight-semibold has-text-primary">
                                            <span class="school-title-detail">月島イングリッシュスクール</span>
                                        </div>
                                        <div class="activity-title text-completion-mobile has-text-weight-bold">
                                            楽しく学ぶ英会話
                                        </div>
                                        <div class="activity-time text-completion">
                                            <span class="icon is-small"><i class="far fa-clock has-text-primary"></i></span>
                                            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                                        </div>                            
                                        <div class="short-description text-completion is-7">
                                            <span class="icon is-small"><i class="fas fa-child has-text-danger"></i></span>
                                            <span>3才</span>
                                            <span> | </span>
                                            <span class="icon is-small"><i class="fas fa-money-bill-alt has-text-warning"></i></span>
                                            <span>3クレジット</span>
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
            <router-link to="/search" class="is-block is-2 display-category">
                <span>すべての{{ categoryTitle }}を表示する</span>
                <span class="is-hidden-mobile"><i class="fa fa-angle-right"></i></span>
            </router-link>
        </div>
    </section>
    <!--<section class="section">-->
    <!--    <div class="container">-->
    <!--        <div class="columns search">-->
    <!--            <div class="column search-today">-->
    <!--                <div class="search-card">-->
    <!--                    <div class="search-card-part">-->
    <!--                        <div class="search-card-left-part">-->
    <!--                            <figure class="image">-->
    <!--                                <img src="https://bulma.io/images/placeholders/128x128.png">-->
    <!--                            </figure>-->
    <!--                        </div>-->
    <!--                        <div class="search-card-right-part">-->
    <!--                            <p>明日</p>-->
    <!--                        </div>                           -->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="column search-tomorrow">-->
    <!--                <div class="search-card">-->
    <!--                    <div class="search-card-part">-->
    <!--                        <div class="search-card-left-part">-->
    <!--                            <figure class="image">-->
    <!--                                <img src="https://bulma.io/images/placeholders/128x128.png">-->
    <!--                            </figure>-->
    <!--                        </div>-->
    <!--                        <div class="search-card-right-part">-->
    <!--                            <p>明日</p>-->
    <!--                        </div>                           -->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="column search-date">-->
    <!--                <div class="search-card">-->
    <!--                    <div class="search-card-part">-->
    <!--                        <div class="search-card-left-part">-->
    <!--                            <figure class="image">-->
    <!--                                <img src="https://bulma.io/images/placeholders/128x128.png">-->
    <!--                            </figure>-->
    <!--                        </div>-->
    <!--                        <div class="search-card-right-part">-->
    <!--                            <p>明日</p>-->
    <!--                        </div>                           -->
    <!--                    </div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
</main>
</template>

<script>
import http from '../services/http';
import PulseLoader from 'vue-spinner/src/PulseLoader.vue';

export default {
    components: {
        PulseLoader
    },
    data() {
        return {
            category: ["教育","体験"],
            slideData: ["今日","明日","1/5","1/6","1/7","1/8","1/9"],
            // activityData: [],
            isLoading: true
        }
    },
    methods: {
        // fetchAllActivityData() {
        //     http.get('fetchAllActivityData').then(res => {
        //         this.activityData = res.data;
        //     });
        // },
        loaded () {
            this.isLoading = !this.isLoading;
        }
    },
    created() {
        // this.fetchAllActivityData();
    }
}
</script>

<style scoped>
body {
    font-family: Circular, "Helvetica Neue", Helvetica,Arial, 'Hiragino Kaku Gothic ProN','ヒラギノ角ゴ ProN W3', sans-serif;
}
@media screen and (min-width:480px) {
    .text-completion-mobile {
        text-overflow: ellipsis;
        overflow: hidden;
        white-space: nowrap;
        color: black;
    }
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