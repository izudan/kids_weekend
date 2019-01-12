<template>
<main>
    <div v-if="isLoading" class="loading-container">
        <fade-loader class="loading"></fade-loader>
    </div>

    <div v-else class="section">
        <div class="container container-expand">
            <div class="columns">
                <div class="column is-one-quarter">
                    <div class="side-menu">
                        <carousel
                            :autoplay="true"
                            :autoplayTimeout="7500"
                            :loop="true"
                            :perPage="1"
                            >
                            <slide v-for="(index) in slideData" :key="index">
                                <figure class="image image-top">
                                    <progressive-img src="/images/art/art_ar_class.jpeg" placeholder="https://unsplash.it/1920/1080?random" />
                                </figure>
                            </slide>
                        </carousel>
                    </div>
                </div>
                <div class="column">
                    <div class="main-info">
                        <div class="main-content">
                            <div class="school-name">
                                <span>{{ individualActivityData.school_name }}</span>
                            </div>
                            <div class="title-expand">
                                <h1 class="title is-1">{{ individualActivityData.activity_name }}</h1>
                            </div>
                            <div class="icon-group">
                                <div class="location">
                                    <div class="location-icon">
                                        <i class="fas fa-map-marker-alt"></i>
                                    </div>
                                    <div>
                                        <p class="">
                                            <span>{{ individualActivityData.school_state }}</span>
                                            <span>{{ individualActivityData.school_city }}</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="time">
                                    <div class="time-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div>
                                        <p class=""><time datetime="2016-1-1">{{ individualActivityData.event_start_time }}</time></p>
                                    </div>
                                </div>
                                <div class="to-bring">
                                    <div class="to-bring-icon">
                                        <i class="fas fa-weight-hanging"></i>
                                    </div>
                                    <div>
                                        <p class="">スナック、ドリンク、用具</p>
                                    </div>
                                </div>
                                <div class="age">
                                    <div class="age-icon">
                                        <i class="fas fa-child"></i>
                                    </div>
                                    <div>
                                        <p class="">
                                            <span>{{ individualActivityData.event_target_min_age }}</span>
                                            <span> 〜 </span>
                                            <span>{{ individualActivityData.event_target_max_age }}才</span>
                                        </p>
                                    </div>
                                </div>                                
                            </div>
                            <div class="comment">
                                <div class="comment-icon">
                                    <i class="fas fa-info"></i>
                                </div>
                                <div>
                                    <p>5つ星470件超え！絶賛の嵐の体験です。</p>
                                </div>
                            </div>
                            <div class="host">
                                <div class="host-part-left">
                                    <div class="about-shcool">
                                        <p class="shcool-heading is-3">スクールについて</p>
                                        <p>
                                            {{ individualActivityData.school_detail }}
                                        </p>
                                    </div>
                                </div>
                                <div class="host-part-right">
                                    <div class="image-box image-box-expand">
                                        <figure class="image image-size school-image">
                                            <progressive-img class="is-rounded" src="/images/dreaming_boy.jpg" placeholder="https://unsplash.it/1920/1080?random" />
                                        </figure>
                                    </div>
                                    <div class="host-info">
                                        <p class="host-name">{{ individualActivityData.school_name }}</p>
                                        <a class="contact-host" @click.prevent="contactModalToggle">
                                            スクールに連絡する
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="experience">
                                <div class="experience-part-left">
                                    <div class="about-experience">
                                        <p class="experience-heading is-3">体験できること</p>
                                        <p>
                                            {{ individualActivityData.activity_detail }}
                                        </p>
                                    </div>
                                </div>
                                <div class="experience-part-right">
                                </div>
                            </div>
                            <div class="to-need">
                                <div class="to-need-part-left">
                                    <div class="about-to-need">
                                        <p class="to-need-heading is-3">持ち物</p>
                                        <p>
                                            着物の下に着るためのTシャツなどの薄着をご用意ください。
                                        </p>
                                    </div>
                                </div>
                                <div class="to-need-part-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column is-one-quarter">
                    <p class="title is-4">体験実施場所の紹介</p>
                </div>
                <div class="column">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6483.136778601478!2d139.77721867614565!3d35.66300417079383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018897aedbe5ad5%3A0xc39f1c150c87bb4c!2z44CSMTA0LTAwNTIg5p2x5Lqs6YO95Lit5aSu5Yy65pyI5bO2!5e0!3m2!1sja!2sjp!4v1546488873633" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="columns">
                <div class="column is-one-quarter">
                    <p class="title is-4">今後の開催予定</p>
                </div>
                <div class="column">
                    <div class="main-info">
                        <div class="main-content">
                            <div class="schedule">
                                <div class="schedule-part">
                                    <div class="about-schedule">
                                        <div style="padding: 0px 32px">
                                            <div class="schedule-part-container">
                                                <div class="schedule-card" style="padding: 24px 0px">
                                                    <div class="datetime">
                                                        <span>1月8日 火曜日</span>
                                                        <span class="" aria-hidden="true">|</span>
                                                        <span>10:00 − 12:00</span>
                                                    </div>
                                                    <div class="schedule-card-price">
                                                        <span>¥{{ individualActivityData.event_price }}/人</span>
                                                        <span>.残席あと1名</span>
                                                    </div>
                                                </div>
                                                <div class="reserve-button">
                                                    <a class="button btn-reserve">選択</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="columns">
                <div class="column is-one-quarter">
                    <p class="title is-4 notes-title">留意事項</p>
                </div>
                <div class="column">
                    <div class="main-info">
                        <div class="main-content">
                            <div class="notes">
                                <div class="notes-part">
                                    <div class="about-notes">
                                        <div class="columns columns-notes is-multiline">
                                            <div class="column is-half">
                                                <p class="notes-heading">キャンセルポリシー</p>
                                                <p>
                                                    体験はキャンセル可。清算後24時間以内は全額返金されます。
                                                    <span><a>キャンセルポリシーを読む。</a></span>
                                                </p>
                                            </div>
                                            <div class="column is-half">
                                                <p class="notes-heading">参加人数</p>
                                                <p>
                                                    定員残り7名です。
                                                </p>
                                            </div>
                                            <div class="column is-half">
                                                <p class="notes-heading">参加対象</p>
                                                <p>
                                                    10歳以上の方のみ参加できます。保護者による2歳未満のお子様の同伴も可能です。
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>

    <!--ここはコンポーネント化する-->
    <div class="sticky-footer">
        <div class="container sticky-footer-container">
            <div class="sticky-footer-wrapper">
                <div>
                    <div class="left-item is-hidden-mobile">
                        <div class="image-box">
                            <figure class="image image-size">
                                <progressive-img class="is-rounded" src="/images/dreaming_boy.jpg" placeholder="https://unsplash.it/1920/1080?random" />
                            </figure>
                        </div>
                        <div class="content">
                            <div class="school-name">
                                <span>English!</span>
                            </div>
                            <div>
                                <div class="review">
                                </div>
                                <div class="review-link">
                                    <span class="">
                                        <a>495件のレビュー</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
                <div class="right-item-wrapper">
                    <div class="right-item">
                        <div class="price-part">
                            <div class="price-container">
                                <span class="activity-price has-text-weight-bold">¥{{ individualActivityData.event_price }}</span>
                                <span> / 1人</span>
                            </div>
                        </div>
                        <div class="schdule-part">
                            <div>
                                <a class="button btn-expand" @click.prevent="bookModalToggle">
                                    <span class="has-text-weight-bold">今すぐ予約する</span>
                                </a>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
    </div>
    
    <contact-modal
        v-if="showContactModal"
        :action="handleContact"
        :showContactModal="showContactModal"
        @close="contactModalToggle">
    </contact-modal>
    
    <book-modal
        v-if="showBookModal"
        :action="handleBook"
        :showBookModal="showBookModal"
        :activity_name="individualActivityData.activity_name"
        :event_start_time="individualActivityData.event_start_time"
        :event_price="individualActivityData.event_price"
        @close="bookModalToggle">
    </book-modal>
</main>
</template>

<script>
import BookModal from '../components/BookModal.vue';
import ContactModal from '../components/ContactModal.vue';
import FadeLoader from 'vue-spinner/src/FadeLoader.vue';
import { mapState, mapActions, mapGetters } from 'vuex';

export default {
    components: {
        FadeLoader,
        BookModal,
        ContactModal
    },
    data() {
        return {
            slideData: ["label1","label2","label3"],
            showBookModal: false,
            showContactModal: false
        }
    },
    methods: {
        ...mapActions({
            fetchEventData: 'activity/fetchAllData'
        }),
        bookModalToggle(){
          this.showBookModal = !this.showBookModal;
        },
        contactModalToggle(){
          this.showContactModal = !this.showContactModal;
        },
        handleBook() {
          this.book();
        },
        handleContact() {
          this.contact();
        },
    },
    computed: {
      ...mapGetters({
            activityData: 'activity/activityData',
            isLoading: 'activity/isLoading',
            individualActivityData: 'activity/fetchIndividualActivityData',
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
.columns {
    margin-top: 24px;
}
.image-top {
    /*width: 100%;*/
    /*height: auto;*/
}
.container-expand {
}
.side-menu {
}
.side-nav-item {
    padding-bottom: 8px;
}
.side-nav-item-title {
    color: black;
}
.btn-profile {
    margin-top: 8px;
    width: 100%;
}
.main-edit {
}
.profile-required {
    margin-bottom: 40px;
}
.children-infomation {
    margin-bottom: 40px;
}
a:hover {
    opacity: 0.6;
}
.content p:not(:last-child), .content {
    margin-bottom: 8px;
}
.field-body {
    margin-bottom: 12px;
}
.title-expand {
    padding-bottom: 20px;
}
.school-name {
    color: #484848;
}
.school-image {
    z-index: -2;
}

.location {
    display: flex;
}
.location-icon {
    margin-right: 16px;
    margin-bottom: 8px;
}
.time {
    display: flex;
}
.time-icon {
    margin-right: 16px;
    margin-bottom: 8px;
}
.to-bring {
    display: flex;
}
.to-bring-icon {
    margin-right: 16px;
    margin-bottom: 8px;
}
.age {
    display: flex;
}
.age-icon {
    margin-right: 16px;
    margin-bottom: 8px;
}
.comment {
    display: flex;
    padding: 24px 0px;
    margin-top: 40px;
    border-top: 1px solid #EBEBEB;
    border-bottom: 1px solid #EBEBEB;
    font-weight: bold;
}
.comment-icon {
    margin-right: 16px;
}
.host,
.experience,
.to-need
{
    display: flex;
    justify-content: space-between;
    margin-top: 40px;
    padding-bottom: 40px;
    border-bottom: 1px solid #EBEBEB; 
}
.contact-host {
    font-size: 12px;
}
.host-name {
    font-size: 12px;
    font-weight: bold;
}
.host-part-left,
.experience-part-left,
.to-need-left
{
    width: 100%;
    height: auto;    
    margin-right: 40px;
}
.host-part-right,
.experience-part-right,
.to-need-left
{
    width: 33.333%;
    height: auto;
    text-align: center;
}
.image-box.image-box-expand {
    margin-right: 0px;
}
.host-info {
    display: inline-block;
}
.shcool-heading,
.experience-heading,
.to-need-heading,
.schedule-part-heading
{
    font-weight: bold;
    margin-bottom: 8px;
}
.school-image {
    margin: 0px auto 8px;
}
.schedule
{
    padding-bottom: 40px;
    border-bottom: 1px solid #EBEBEB;
}
.about-schedule
{
    width: 100%;
    height: auto;
    border: 1px solid #EBEBEB;
    border-radius: 4px;
}
.schedule-part-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.schedule-card {
}
.datetime,
.schedule-card-price
{
    padding-bottom: 4px;
}
.btn-reserve {
    color: #084887;
    border: 2px solid #084887;
    border-radius: 4px;
}
.notes-title {
    padding-top: 12px;
}
.columns-notes {
    margin-top: 0px;
}
.notes {
    padding-bottom: 40px;
}
.column.is-half {
    width: 50%;
    height: auto;
    padding-bottom: 24px;
    border-bottom: 1px solid #EBEBEB;
}
.notes-heading {
    font-weight: bold;
    padding-bottom: 4px;
}

.sticky-footer {
    height: 70px;
    position: fixed;
    bottom: 0;
    width: 100%;
    border-top: 1px solid #EBEBEB;
    box-shadow: 0 3px 9px 3px rgba(0, 0, 0, 0.05);
    background-color: white;
}
.sticky-footer-container {
}
.sticky-footer-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 10px;
    padding-bottom: 10px;
}
.left-item {
    display: flex;
    /*width: 240px;*/
    height: 50px;
}
.right-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /*width: 300px;*/
    height: 50px;
}
.image-box {
    margin-right: 24px;
}
.image-size {
    height: 48px;
    width: 48px;
}
.content {
    width: 100%;
}
.price-part {
}
.price-container {
    width: 100%;
    padding-right: 8px;
}
.btn-expand {
    width: 200px;
    height: 48px;
    background-color: #ffd046;
    border: 1px solid #ffd046;
    color: white;
}


@media screen and (max-width: 768px) {
    .columns {
        margin-top: 0px;
    }
    .host,
    .experience
    {
        display: block;
        padding-bottom: 8px;
        border-bottom: 1px solid #EBEBEB;
    }
    .host-part-left,
    .experience-part-left,
    .to-need-left
    {
        margin-bottom: 24px;
    }
    .host-part-right {
        display: flex;
        align-items: center;
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        border: 1px solid #EBEBEB;
        border-radius: 4px;
    }
    .host-info {
        display: block;
        text-align: left;
        margin-left: 8px;
    }
    .school-image {
        margin: 0px auto 16px;
    }
    .schedule-part-container {
        display: block;
    }
    .reserve-button {
        margin-bottom: 16px;
    }
    .btn-reserve {
        width: 100%;
    }
    .column.is-half {
        width: 100%;
        height: auto;
        /*padding-right: 16px;*/
    }
    .right-item-wrapper {
        margin: 0px auto;
    }
}

</style>
