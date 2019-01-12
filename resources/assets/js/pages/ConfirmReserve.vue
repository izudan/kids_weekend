<template>
<main>
  <section class="section">
    <div class="container container-expand">
      <div class="has-text-centered container-expand">
        <h2 class="heading">予約一覧</h2>
      </div>
      <tabs>
        <tab name="予約中" :selected="true">
          <div>
            <div class="reserve-heading-helper">
              <h2 class="heading sub">
                <span>2019年1月29日</span>
                <span>15:00</span> ~ <span>17:00</span>
                <span>@</span><span>月島</span>
              </h2>
            </div>
            <div class="columns is-multiline is-mobile">
              <router-link :to="{ name: 'IndivActivity', params: { id: 1 }}" class="column is-half-desktop">
                    <div class="image-container">
                        <div class="image-box">
                            <figure class="image">
                              <progressive-img src="/images/education/edu_kids_larning_class.jpeg"/>
                            </figure>
                        </div>
                    </div>
                    <div class="content-container">
                        <div class="content">
                            <div class="school-title text-completion-mobile has-text-weight-semibold has-text-primary">
                                <span class="school-title-detail">みうら</span>
                            </div>
                            <div class="activity-title text-completion-mobile has-text-weight-bold">
                                大乱闘ミウラブラザーズ
                            </div>
                            <div class="short-description text-completion is-7">
                                <span class="icon is-small"><i class="fas fa-child has-text-danger"></i></span>
                                <span>りえちゃん</span>
                            </div>
                        </div>
                    </div>
                </router-link>
            </div>
          </div>
          <div>
            <div class="reserve-heading-helper">
              <h2 class="heading sub">
                <span>2019年2月17日</span>
                <span>15:00</span> ~ <span>17:00</span>
                <span>@</span><span>表参道</span>
              </h2>
            </div>
            <div class="columns is-multiline is-mobile">
              <router-link :to="{ name: 'IndivActivity', params: { id: 1 }}" class="column is-half-desktop">
                    <div class="image-container">
                        <div class="image-box">
                            <figure class="image">
                              <progressive-img src="/images/education/edu_kids_larning_class.jpeg"/>
                            </figure>
                        </div>
                    </div>
                    <div class="content-container">
                        <div class="content">
                            <div class="school-title text-completion-mobile has-text-weight-semibold has-text-primary">
                                <span class="school-title-detail">みうら</span>
                            </div>
                            <div class="activity-title text-completion-mobile has-text-weight-bold">
                                大乱闘ミウラブラザーズ
                            </div>
                            <div class="short-description text-completion is-7">
                                <span class="icon is-small"><i class="fas fa-child has-text-danger"></i></span>
                                <span>ながせちゃん</span>
                            </div>
                        </div>
                    </div>
                </router-link>
            </div>
          </div>
        </tab>
        <tab name="体験後">
          <div>
            <div class="reserve-heading-helper">
              <h2 class="heading sub">
                <span>2019年1月12日</span>
                <span>10:00</span> ~ <span>13:00</span>
                <span>@</span><span>ジーズアカデミー</span>
              </h2>
            </div>
            <div class="columns is-multiline is-mobile">
              <router-link :to="{ name: 'IndivActivity', params: { id: 1 }}" class="column is-half-desktop">
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
                                <span class="school-title-detail">ジーズアカデミー</span>
                            </div>
                            <div class="activity-title text-completion-mobile has-text-weight-bold">
                                大乱闘コードでブラザーズ
                            </div>
                            <div class="short-description text-completion is-7">
                                <span class="icon is-small"><i class="fas fa-child has-text-danger"></i></span>
                                <span>ながせちゃん</span>
                            </div>
                        </div>
                    </div>
                </router-link>
            </div>
          </div>
        </tab>
      </tabs>
    </div>
  </section>
</main>
</template>

<script>
import Tabs from '../components/Tabs';
import Tab from '../components/Tab';

export default {
  components: {
    Tabs,
    Tab
  },
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

.heading {
  position: relative;
  display: inline-block;
  margin: 0px 0 16px;
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
.is-half-mobile {
  padding: 8px;
}
.sub {
  font-size: 18px;
  margin: 0px 0 0px;
}
.reserve-heading-helper {
  margin: 32px 0 24px;
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
    .heading {
      font-size: 24px;
    }
}
</style>


