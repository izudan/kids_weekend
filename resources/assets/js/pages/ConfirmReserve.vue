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
            <div class="reserve-contents">
                <div class="reserve-content-imgage">
                  <figure class="image">
                      <progressive-img class="" src="/images/dreaming_boy.jpg" placeholder="https://unsplash.it/1920/1080?random" />
                  </figure>
                </div>
                <div class="reserve-content-main">
                  <div class="reserve-content">1月20日（土）15:00-17:00</div>
                  <div class="reserve-content">English School Miura</div>
                  <div class="reserve-content">東京都中央区月島1-1-1</div>
                  <div class="reserve-content">
                    <span class="icon is-small"><i class="fas fa-child has-text-danger"></i></span>
                    <span>りえちゃん</span>
                  </div>
                </div>              
            </div>            
          </div>
        </tab>
        <tab name="体験後">
          <div class="reserve-contents">
              <div class="reserve-content-imgage">
                <figure class="image">
                    <progressive-img class="" src="/images/dreaming_boy.jpg" placeholder="https://unsplash.it/1920/1080?random" />
                </figure>
              </div>
              <div class="reserve-content-main">
                <div class="reserve-content">1月12日（土）12:00-13:00</div>
                <div class="reserve-content">The Recruit Nagase</div>
                <div class="reserve-content">東京都港区元麻布1-1-1</div>
                <div class="reserve-content">
                  <span class="icon is-small"><i class="fas fa-child has-text-danger"></i></span>
                  <span>ながせちゃん</span>
                </div>
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
.reserve-contents {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 16px;
  height: 100px;
  width: 100%;
  border-radius: 4px;
  box-shadow: rgba(0, 0, 0, 0.04) 0px 0px 0px 1px, rgba(0, 0, 0, 0.08) 0px 3px 6px !important;
  margin-bottom: 16px;
}
.reserve-content-imgage {
  margin-right: 16px;
  height: 64px;
  width: 64px;
  border-radius: 4px;
}
.reserve-content-main {
  height: 64px;
  width: 100%;
}
.reserve-content {
  height: 16px;
  width: 100%;
  font-size: 12px;
}
.progressive-image {
  width: 64px;
  height: 64px;
}


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


