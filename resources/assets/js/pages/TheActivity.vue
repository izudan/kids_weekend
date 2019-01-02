<template>
<main>
    <section class="section">
        <div class="container">
            <div class="category-wrapper">
                <h1 class="title big-title is-block is-3">教育</h1>
                <div class="columns is-multiline is-centered">
                    <router-link :to="{ name: 'IndivActivity', params: { id: 100 }}" class="column is-one-quarter">
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
                    <router-link :to="{ name: 'IndivActivity', params: { id: 110 }}" class="column is-one-quarter">
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
                                    月島イングリッシュスクール
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
                    <router-link :to="{ name: 'IndivActivity', params: { id: 120 }}" class="column is-one-quarter">
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
                                    月島イングリッシュスクール
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
                    <router-link :to="{ name: 'IndivActivity', params: { id: 130 }}" class="column is-one-quarter">
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
                                    月島イングリッシュスクール
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
                </div>
                <a class="is-block is-2">
                    <span>すべての体験を表示する</span>
                    <span><i class="fa fa-angle-right"></i></span>
                </a>
            </div>
            <div class="category-wrapper">
                <h1 class="title big-title is-block is-3">体験</h1>
                <div class="columns is-multiline is-centered">
                    <router-link :to="{ name: 'IndivActivity', params: { id: 100 }}" class="column is-one-quarter">
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
                    <router-link :to="{ name: 'IndivActivity', params: { id: 110 }}" class="column is-one-quarter">
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
                                    月島イングリッシュスクール
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
                    <router-link :to="{ name: 'IndivActivity', params: { id: 120 }}" class="column is-one-quarter">
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
                                    月島イングリッシュスクール
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
                    <router-link :to="{ name: 'IndivActivity', params: { id: 130 }}" class="column is-one-quarter">
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
                                    月島イングリッシュスクール
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
                </div>
                <a class="is-block is-2">
                    <span>すべての体験を表示する</span>
                    <span><i class="fa fa-angle-right"></i></span>
                </a>
            </div>
            <div class="category-wrapper">
                <h1 class="title big-title is-block is-3">自然体験</h1>
                <a class="is-block is-2">
                    <span>すべての体験を表示する</span>
                    <span><i class="fa fa-angle-right"></i></span>
                </a>
            </div>
            <div class="category-wrapper">
                <h1 class="title big-title is-block is-3">人気のアクティビティ</h1>
                <a class="is-block is-2">
                    <span>すべての体験を表示する</span>
                    <span><i class="fa fa-angle-right"></i></span>
                </a>
            </div>
            <div class="category-wrapper">
                <h1 class="title big-title is-block is-3">お子さんにおすすめのアクティビティ</h1>
                <a class="is-block is-2">
                    <span>すべての体験を表示する</span>
                    <span><i class="fa fa-angle-right"></i></span>
                </a>
            </div>
        </div>
    </section>
</main>
</template>

<script>
export default {
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
.column.is-one-quarter {
    max-width: 480px;
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
    padding-top: 15px;
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

</style>