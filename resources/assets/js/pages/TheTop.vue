<template>
<main>
    <section class="hero is-fullheight-with-navbar is-bold is-large">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title title-expand is-1">
                    Kids Weekend
                </h1>
                <h2 class="subtitle">
                    子供に1000の体験を！子供の得意を発見しよう。
                </h2>
                <router-link to="/activity" class="button btn-start-now is-large">
                    <strong class="has-text-white">今すぐ始めよう</strong>
                </router-link>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="section-heading has-text-centered container-expand">
          <h2 class="title title-expand is-2">Kids Weekend</h2>
        </div>
        <p class="has-text-centered">Kids Weekendの説明部分</p>
    </section>
    <section class="section">
        <div class="section-heading has-text-centered container-expand">
          <h2 class="title title-expand is-2">How it works??</h2>
        </div>
        <div class="columns is-desktop">
            <div class="column">
                <div class="tile is-ancestor">
                    <div class="tile is-vertical">
                        <div class="tile">
                            <div class="tile is-parent">
                                <article class="tile is-child notification is-light">
                                    <p class="title">Middle tile</p>
                                    <p class="subtitle">With an image</p>
                                    <figure class="image is-4by3">
                                        <img src="https://i.imgsafe.org/ba/baa924a5e3.png" alt="Placeholder image">
                                    </figure>
                                    <!--<figure class="image is-4by3">-->
                                    <!--    <img src="{{ asset('~/public/images/dreming_boy.jpg') }}">-->
                                    <!--</figure>-->
                                    <p class="description description-expand">説明</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="tile is-ancestor">
                    <div class="tile is-vertical">
                        <div class="tile">
                            <div class="tile is-parent">
                                <article class="tile is-child notification is-light">
                                    <p class="title">Middle tile</p>
                                    <p class="subtitle">With an image</p>
                                    <figure class="image is-4by3">
                                        <img src="https://i.imgsafe.org/ba/baa924a5e3.png" alt="Placeholder image">
                                    </figure>
                                    <!--<figure class="image is-4by3">-->
                                    <!--    <img src="{{ asset('~/public/images/dreming_boy.jpg') }}">-->
                                    <!--</figure>-->
                                    <p class="description description-expand">説明</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="tile is-ancestor">
                    <div class="tile is-vertical">
                        <div class="tile">
                            <div class="tile is-parent">
                                <article class="tile is-child notification is-light">
                                    <p class="title">Middle tile</p>
                                    <p class="subtitle">With an image</p>
                                    <figure class="image is-4by3">
                                        <img src="https://i.imgsafe.org/ba/baa924a5e3.png" alt="Placeholder image">
                                    </figure>
                                    <!--<figure class="image is-4by3">-->
                                    <!--    <img src="{{ asset('~/public/images/dreming_boy.jpg') }}">-->
                                    <!--</figure>-->
                                    <p class="description description-expand">説明</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="section-heading has-text-centered container-expand">
            <h2 class="title title-expand is-2">マップ</h2>
            <h3 class="subtitle title-expand">もっとかっこいいマップにしよう</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6483.136778601478!2d139.77721867614565!3d35.66300417079383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018897aedbe5ad5%3A0xc39f1c150c87bb4c!2z44CSMTA0LTAwNTIg5p2x5Lqs6YO95Lit5aSu5Yy65pyI5bO2!5e0!3m2!1sja!2sjp!4v1546095098723" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!--<div id="mapid">-->
            <!--    <l-map :zoom="zoom" :center="center">-->
            <!--      <l-tile-layer :url="url" :attribution="attribution"></l-tile-layer>-->
            <!--      <l-marker :lat-lng="marker"></l-marker>-->
            <!--    </l-map>                -->
            <!--</div>-->
        </div>
    </section>
    <section class="section">
        <div class="section-heading has-text-centered container-expand">
          <h2 class="title title-expand is-2">特徴</h2>
        </div>
        <div class="columns is-desktop">
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://source.unsplash.com/RWnpyGtY1aU" alt="Placeholder image" class="modal-button" data-target="modal-image2">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4">John Smith</p>
                                <p class="subtitle is-6">@johnsmith</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                            <a href="#">#css</a> <a href="#">#responsive</a>
                            <br>
                            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://i.imgsafe.org/ba/baa924a5e3.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4">John Smith</p>
                                <p class="subtitle is-6">@johnsmith</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                            <a href="#">#css</a> <a href="#">#responsive</a>
                            <br>
                            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://source.unsplash.com/6Ticnhs1AG0" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                            <div class="media-left">
                                <figure class="image is-48x48">
                                    <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
                                </figure>
                            </div>
                            <div class="media-content">
                                <p class="title is-4">John Smith</p>
                                <p class="subtitle is-6">@johnsmith</p>
                            </div>
                        </div>

                        <div class="content">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                            <a href="#">#css</a> <a href="#">#responsive</a>
                            <br>
                            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section">
        <div class="section-heading has-text-centered container-expand">
          <h2 class="title title-expand is-2">プラン</h2>
        </div>
        <div class="columns is-desktop">
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title has-text-centered">
                            Basic プラン
                        </p>
                    </header>
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                        </figure>
                        <!--<figure class="image is-4by3">-->
                        <!--    <img src="./images/money.jpg" alt="Placeholder image">-->
                        <!--</figure>-->
                    </div>
                    <!--<div class="card-btn btn-expand has-text-centered">-->
                    <!--    <a class="button is-info">今すぐ始めよう</a>-->
                    <!--</div>-->
                    <div class="card-content">
                        <div class="content">
                            <p>{{ basicItem1 }}</p>
                            <p>{{ basicItem2 }}</p>
                            <a>
                                <span>詳細を見る</span>
                                <i class="fas fa-angle-right"></i>
                            </a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title has-text-centered">
                            Family プラン
                        </p>
                    </header>
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                        </figure>
                        <!--<figure class="image is-4by3">-->
                        <!--    <img src="./images/money.jpg" alt="Placeholder image">-->
                        <!--</figure>-->
                    </div>
                    <!--<div class="card-btn btn-expand has-text-centered">-->
                    <!--    <a class="button is-info">今すぐ始めよう</a>-->
                    <!--</div>-->
                    <div class="card-content">
                        <div class="content">
                            <p>{{ basicItem1 }}</p>
                            <p>{{ basicItem2 }}</p>
                            <a>
                                <span>詳細を見る</span>
                                <i class="fas fa-angle-right"></i>
                            </a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title has-text-centered">
                            Power プラン
                        </p>
                    </header>
                    <div class="card-image">
                        <figure class="image is-4by3">
                            <img src="https://bulma.io/images/placeholders/1280x960.png" alt="Placeholder image">
                        </figure>
                        <!--<figure class="image is-4by3">-->
                        <!--    <img src="./images/money.jpg" alt="Placeholder image">-->
                        <!--</figure>-->
                    </div>
                    <!--<div class="card-btn btn-expand has-text-centered">-->
                    <!--    <a class="button is-info">今すぐ始めよう</a>-->
                    <!--</div>-->
                    <div class="card-content">
                        <div class="content">
                            <p>{{ basicItem1 }}</p>
                            <p>{{ basicItem2 }}</p>
                            <a>
                                <span>詳細を見る</span>
                                <i class="fas fa-angle-right"></i>
                            </a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</template>


<script>
export default {
  data () {
    return {
      basicItem1: '□ Rie Column 読み放題',
      basicItem2: '□ 1アクティビティ無料券',
    }
  }
}

// import { mapActions, mapState } from 'vuex';

// export default {
//     data() {
//         return {
//           zoom:15,
//           center: L.latLng(35.66399, 139.78353),
//           url:'http://{s}.tile.osm.org/{z}/{x}/{y}.png',
//           attribution:'&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
//           marker: L.latLng(35.66399, 139.78353)
//         };
//     },
//     methods: mapActions('auth', [
//         'logout'
//     ])
// };
</script>

<style scoped>
.btn-start-now {
    background-color: #ffd046;
    border: 2px solid #ffd046;
}
.title-expand {
    padding-bottom: 12px;
}
.description-expand {
    padding-top:12px;
}
.btn-expand {
    padding-top: 12px;
}
/*#mapid {*/
/*    height: 600px;*/
/*}
*/
</style>