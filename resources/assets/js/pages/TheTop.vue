<template>
<main>
    <section class="top">
        <progressive-img class="top-image" :src="imageDreamingBoy" />
        <div class="top-content">
            <h1 class="title title-expand is-3">子供にぴったりのアクティビティを探そう</h1>
            <router-link to="/activity" class="button btn-start-now">
                <strong class="has-text-white">今すぐ始めよう</strong>
            </router-link>
        </div>
    </section>
    <section class="section">
        <div class="has-text-centered container-expand">
          <h2 class="heading">Kids Weekendとは？</h2>
        </div>
        <div class="about">
            <p class="about-text">
                お子様にぴったりのアクティビティを、
                <span>日付</span>、
                <span>年齢</span>、
                <span>場所</span>
                から簡単に検索・予約できるサービスです。
            </p>
            <p class="about-text">
                これ一つで、様々なジャンルのアクティビティにアクセス可能！
            </p>
            <p class="about-text">
                お子様に、今しかできない、かけがえのない体験をプレゼントしよう！
            </p>
        </div>
    </section>
    <section class="section">
        <div class="has-text-centered container-expand">
          <h2 class="heading">使い方</h2>
        </div>
        <div class="howtouse">
            <p>coming soon ...</p>
        </div>
    </section>
    <section class="section">
        <div class="has-text-centered container-expand">
          <h2 class="heading">アクティビティの種類</h2>
        </div>
        <div class="activity">
            <div class="columns is-multiline">
                <div class="column is-one-third">
                    <div class="category">
                        <progressive-img class="category-image" :src="imageSports" />
                        <p class="category-title">スポーツ</p>
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="category">
                        <progressive-img class="category-image" :src="imageMusic" />
                        <p class="category-title">音楽</p>
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="category">
                        <progressive-img class="category-image" :src="imageLanguage" />
                        <p class="category-title">語学</p>
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="category">
                        <progressive-img class="category-image" :src="imageArt" />
                        <p class="category-title">アート</p>
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="category">
                        <progressive-img class="category-image" :src="imageScience" />
                        <p class="category-title">サイエンス</p>
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="category">
                        <progressive-img class="category-image" :src="imageEducation" />
                        <p class="category-title">知育</p>
                    </div>
                </div>
            </div>
            <router-link to="/activity" class="is-block is-2 display-category">
                <span>アクティビティを見てみる</span>
                <span class="is-hidden-mobile"><i class="fa fa-angle-right"></i></span>
            </router-link>
        </div>
    </section>
    <section class="section plan">
        <div class="has-text-centered container-expand">
          <h2 class="heading">プラン</h2>
        </div>
        <div class="columns is-desktop">
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title has-text-centered">
                            ベーシックプラン
                        </p>
                    </header>
                    <div class="card-image">
                        <figure class="image">
                            <progressive-img :src="imageMoney" />
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <div class="basic-plan">
                                <div class="basic-plan-icon">
                                    <i class="fas fa-play"></i>
                                </div>
                                <p>
                                    <span class="menu-text">３アクティビティ</span>
                                </p>
                            </div>
                            <div class="basic-plan">
                                <div class="basic-plan-icon">
                                    <i class="fas fa-play"></i>
                                </div>
                                <p>
                                    <span class="menu-text">5,000円 / 月</span>
                                </p>
                            </div>
                            <div class="basic-plan no-border-plan">
                                <a type="button">
                                    <span class="menu-text">詳細を見る</span>
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title has-text-centered">
                            ファミリープラン
                        </p>
                    </header>
                    <div class="card-image">
                        <figure class="image">
                            <progressive-img :src="imageMoney" />
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <div class="basic-plan">
                                <div class="basic-plan-icon">
                                    <i class="fas fa-play"></i>
                                </div>
                                <p>
                                    <span class="menu-text">6アクティビティ</span>
                                </p>
                            </div>
                            <div class="basic-plan">
                                <div class="basic-plan-icon">
                                    <i class="fas fa-play"></i>
                                </div>
                                <p>
                                    <span class="menu-text">10,000円 / 月</span>
                                </p>
                            </div>
                            <div class="basic-plan no-border-plan">
                                <a type="button">
                                    <span class="menu-text">詳細を見る</span>
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title has-text-centered">
                            スポットプラン
                        </p>
                    </header>
                    <div class="card-image">
                        <figure class="image">
                            <progressive-img :src="imageMoney" />
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="content">
                            <div class="basic-plan">
                                <div class="basic-plan-icon">
                                    <i class="fas fa-play"></i>
                                </div>
                                <p>
                                    <span class="menu-text">個別アクティビティごとの</span>
                                </p>
                            </div>
                            <div class="basic-plan">
                                <div class="basic-plan-icon">
                                    <i class="fas fa-play"></i>
                                </div>
                                <p>
                                    <span class="menu-text">お支払い</span>
                                </p>
                            </div>
                            <div class="basic-plan no-border-plan">
                                <a type="button">
                                    <span class="menu-text">詳細を見る</span>
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--<section class="section">-->
    <!--    <div class="has-text-centered container-expand">-->
    <!--      <h2 class="heading">アクティビティを探そう</h2>-->
    <!--    </div>-->
    <!--    <div class="register-and-login">-->
    <!--    </div>-->
    <!--</section>-->
    <!--<section class="section">-->
    <!--    <div class="section-heading has-text-centered container-expand">-->
    <!--        <h2 class="title title-expand is-2">マップ</h2>-->
    <!--        <h3 class="subtitle title-expand">もっとかっこいいマップにしよう</h3>-->
    <!--        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6483.136778601478!2d139.77721867614565!3d35.66300417079383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018897aedbe5ad5%3A0xc39f1c150c87bb4c!2z44CSMTA0LTAwNTIg5p2x5Lqs6YO95Lit5aSu5Yy65pyI5bO2!5e0!3m2!1sja!2sjp!4v1546095098723" height="450" width="100%" frameborder="0" style="border:0" allowfullscreen></iframe>-->
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
    data () {
        return {
            imageDreamingBoy: '/images/dreaming_boy.jpg',
            imageMoney: '/images/money.jpg',
            imageSports: '/images/sports/sports_soccer_class.jpeg',
            imageMusic: '/images/music/music_music_school.jpeg',
            imageLanguage: '/images/language/language_english4.jpeg',
            imageArt: '/images/art/art_ar_class.jpeg',
            imageScience: '/images/science/science_labo_class1.jpeg',
            imageEducation: '/images/education/edu_kids_larning_class3.jpeg',
            isLoading: true,
            default: '2018-10-04',
            DatePickerFormat: 'yyyy-MM-dd'
        };
    },
    methods: {
        loaded () {
            this.isLoading = !this.isLoading;
        }
    }
};
</script>

<style scoped>
.hero {
    width: 100%;
    height: 100%;
    min-width: 100%;
    min-height: 100%;
    position: relative;
}
.hero::before {
    background-image: url(/images/dreaming_boy.jpg);
    background-size: cover;
    content: '';
    display: block;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -2;
    opacity: 0.4;
}
.top {
    position: relative;
    
}
.top-content {
    position: absolute;
    text-align: center;
    top: 40%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    margin:0;
    padding:0;
    font-weight: bold;
    font-family :Quicksand, sans-serif;
    z-index: 1;
}
.top .top-image {
    width: 100%;
    opacity: 0.6;
}
.search-top {
    padding: 20px 0;
    width: 100%;
}
.search-group {
    width: 100%;
}
.title-expand {
    color: white;
}
.btn-start-now {
    width: 350px;
    height: 50px;
    background-color: #ffd046;
    border: 2px solid #ffd046;
}
.description-expand {
    padding-top:12px;
}
.btn-expand {
    padding-top: 12px;
}
.basic-plan {
    display: flex;
    color: #084887;
    padding: 16px 0;
    border-bottom: 1px solid #EBEBEB;
}
.basic-plan-icon{
    color: #03cea4;
    margin-right: 16px;
}
.menu-text {
    color: #084887;
}
.no-border-plan {
    border-bottom: none;
}
.about {
    text-align: center;
}
.about-emphasis {
    font-weight: bold;
    font-size: 20px;
}
.about-text {
    margin-bottom: 16px;
    line-height: 64px;
}
.about-icon {
    width: 150px;
    height: 150px;
    margin-bottom: 30px;
    border: 4px solid;
    border-radius: 50%;
    color: #ef767a;
    font-size: 8rem;
    line-height: 142px;
}
.column.is-one-third {
    text-align: center;
}
.category {
    position: relative;
}
.category-image {
    width: 100%;
    opacity: 0.7;
}
.category-title {
    position: absolute;
    text-align: center;
    top: 50%;
    left: 50%;
    -ms-transform: translate(-50%,-50%);
    -webkit-transform: translate(-50%,-50%);
    transform: translate(-50%,-50%);
    margin:0;
    padding:0;
    /*color: #084887;*/
    font-size: 32px;
    font-weight: bold;
    font-family :Quicksand, sans-serif;
    z-index: 1;
}
.howtouse {
    text-align: center;
}


.heading {
  position: relative;
  display: inline-block;
  margin: 30px 0 45px;
  padding-bottom: 15px;
  letter-spacing: 2px;
  font-size: 36px;
  font-weight: bold;
}
.heading::before,
.heading::after {
  content: '';
  position: absolute;
  right: 0;
  bottom: 0;
  left: 0;
  border-bottom: 1px solid #999;
}
.heading::before {
  bottom: 5px;
}
.display-category {
    margin-top: 24px;
    font-size: 18px;
    font-weight: bold;
    color: #57b8ff;
}


@media screen and (max-width: 768px) {
    .top-content {
        top: 50%;
        width: 100%;
        padding: 0px 18px;
    }
    .title-expand {
        font-size: 15px;
        color: white;
    }
    .heading {
        font-size: 20px;
    }
    .search-top {
        margin: 0px auto;
    }
    .btn-start-now {
        width: 175px;
    }
    .display-category {
        width: 100%;
        text-align: center;
        margin-top: 24px;
        padding: 8px;
        color: #57b8ff;
        border: 2px solid #57b8ff;
        border-radius: 4px;
    }
    .about-text {
        line-height: 32px;
    }
}
</style>