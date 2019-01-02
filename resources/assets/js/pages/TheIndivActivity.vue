<template>
<main>
    <div class="section">
        <div class="container">
            <h1>Hello World {{ $route.params.id }}</h1>
            <router-link to="/activity" class="button is-primary is-large">戻る</router-link>       
        </div>
    </div>

    <div class="item"></div>
    
    <!--ここはコンポーネント化する-->
    <!--propsで値を渡す-->
    <div class="sticky-footer">
        <div class="container sticky-footer-container">
            <div class="sticky-footer-wrapper">
                <div>
                    <div class="left-item is-hidden-mobile">
                        <div class="image-box">
                            <figure class="image image-size">
                              <img class="is-rounded" src="https://bulma.io/images/placeholders/128x128.png">
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
                <div>
                    <div class="right-item">
                        <div class="price-part">
                            <div class="price-container">
                                <span class="activity-price has-text-weight-bold">¥2,500</span>
                                <span> / 1人</span>
                            </div>
                        </div>
                        <div class="schdule-part">
                            <div>
                                <a class="button btn-expand">
                                    <span class="has-text-weight-bold">開催日程</span>
                                </a>
                            </div>
                        </div>
                    </div>                     
                </div>
            </div>
        </div>
    </div>
</main>
</template>

<script>
export default {
}
</script>

<style scoped>
.item {
    height: 1000px;
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
    justify-content: space-around;
    align-items: center;
    padding-top: 10px;
    padding-bottom: 10px;
}
.left-item {
    display: flex;
    width: 240px;
    height: 50px;
}
.right-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 300px;
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
}
.btn-expand {
    width: 200px;
    height: 48px;
    background-color: #ffd046;
    border: 1px solid #ffd046;
    color: white;
}
</style>
