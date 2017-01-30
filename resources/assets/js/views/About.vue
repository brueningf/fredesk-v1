<template>
<div>
    <section class="hero is-large is-warning is-bold">
      <img class="is-small-yellow-mountain animated slideInUp" 
          src="/img/background-about-fredesk.png" 
          alt="about"
      >
      <div class="hero-body has-text-centered" style="padding-top:0">
        <div class="container">
          <h1 class="title has-padding-bottom-1 animated fadeIn">
            Hi, I'm Frederic!
          </h1>
          <h2 class="subtitle has-padding-bottom-1 animated fadeIn">
            Achieving high-quality websites and exceptional user experience
          </h2>
          <article>
            <p>
              A developer and artist based in Berlin. <br>
              I love exploring vibrant and colorful concepts, and have a deep passion for music and culture. <br>
              My passion for creating things came just naturally.
              I have started my journey as a self-learner, <br> 
              spending countless nights learning programming, design, visualization and music production. <br>
              In 2012 I started to work professionally, in Brussels with Elit Events. <br> 
              In 2014 I have moved to Berlin and became a freelancer. <br>
              Now, working with collegues from the industry I have a pleasure to work on amazing projects.
            </p> 
            <br>
            <em>~~ Frederic Brüning</em>
          </article>
        </div>
      </div>
    </section>
    <section class="hero is-small is-dark is-bold">
      <img class="is-small-mountain" 
          src="/img/background-about-know-fredesk.png" 
          alt="about"
      >
      <div class="hero-body has-text-centered" style="padding-top:0">
          <h2 class="title is-2 has-padding-bottom-2">
            I BUILD OMNICHANNEL SOLUTIONS FOR BUSINESS AND LIFE
          </h2>
        <div class="container">
          <div class="columns is-multiline has-padding-bottom-2">
            <div class="column is-12">
              <h2 class="title is-4">
                ADVANCED WEB & MOBILE SOLUTIONS. ENTERPRISE APPS & PORTALS.
              </h2>
              <h2 class="subtitle is-5 has-padding-bottom-1">
                Full-cycle servicing that covers every aspect of app production and implementation.
              </h2>
            </div>
            <div class="column">
              <div class="box hvr-grow is-knowledge">
                <span class="fa fa-cogs"></span>
                <h2 class="title">
                  ADVANCED WEB
                </h2>
                <article>
                  <p>Productive, engaging and reliable web solutions for business outcomes you deserve.</p>
                </article>
              </div>
            </div>
            <div class="column">
              <div class="box hvr-grow is-knowledge">
                <span class="fa fa-mobile"></span>
                <h2 class="title">
                  MOBILITY 360°
                </h2>
                <article>
                  <p>End-to-end mobile development for consumer-facing and corporate environments.</p>
                </article>
              </div>
            </div>
            <div class="column">
              <div class="box hvr-grow is-knowledge">
                <span class="fa fa-wrench"></span>
                <h2 class="title">
                  FULL-CYCLE DEVELOPMENT
                </h2>
                <article>
                  <p>Full spectrum of development services spiced with flexible engagement models.</p>
                </article>
              </div>
            </div>
          </div>
            <div class="column is-12 has-padding-bottom-2">
              <h3 class="title is-4">Technologies I work with</h3>
            </div>
        </div>
          <div class="tile is-parent">
            <article class="tile is-child">
              <lory class="columns is-mobile js_rewind" :options="{ enableMouseEvents: true, infinite: 2, slidesToScroll: 4, slideSpeed: 3000, ease: 'cubic-bezier(0.455, 0.03, 0.515, 0.955)', rewind: true, rewindSpeed: 2000, snapBackSpeed: 2000 }">
                <item class="column is-one-quarter-mobile is-3">
                  <img class="hvr-grow" width="60%" src="/img/about/laravel.png" alt="Laravel"><br>Laravel</item>
                <item class="column is-one-quarter-mobile is-3">
                  <img class="hvr-grow" width="20%" src="/img/about/vue.png" alt="Vue"><br>VueJs</item>
                <item class="column is-one-quarter-mobile is-3">
                  <img class="hvr-grow" width="50%" src="/img/about/webpack.svg" alt="Webpack"><br>Webpack</item>
                <item class="column is-one-quarter-mobile is-3">
                  <img class="hvr-grow" width="60%" src="/img/about/python.png" alt="Python"><br>Python</item>
                <item class="column is-one-quarter-mobile is-3">
                  <img class="hvr-grow" width="25%" src="/img/about/java.svg" alt="JAVA"><br>Java</item>
                <item class="column is-one-quarter-mobile is-3">
                  <img class="hvr-grow" width="40%" src="/img/about/mysql.svg" alt="MySQL"><br>MySQL</item>
                <item class="column is-one-quarter-mobile is-3">
                  <img class="hvr-grow" width="25%" src="/img/about/html.svg" alt="HTML 5"><br>HTML5</item>
                <item class="column is-one-quarter-mobile is-3">
                  <img class="hvr-grow" width="25%" src="/img/about/sass.svg" alt="SASS"><br>SCSS</item>
                <item class="column is-one-quarter-mobile is-3">
                  <img class="hvr-grow" width="25%" src="/img/about/js.svg" alt="JS"><br>EcmaScript</item>
                <item class="column is-one-quarter-mobile is-3">
                  <img class="hvr-grow" width="30%" src="/img/about/php.svg" alt="PHP"><br>PHP</item>
                <item class="column is-one-quarter-mobile is-3">
                  <img class="hvr-grow" width="25%" src="/img/about/swift.svg" alt="Swift"><br>Swift</item>
                <item class="column is-one-quarter-mobile is-3">
                  <img class="hvr-grow" width="25%" src="/img/about/vs.png" alt="ASP"><br>ASP.NET</item>

                <prev slot="actions" color="#dbdbdb" v-show="false"></prev>
                <next slot="actions" color="#dbdbdb" v-show="false" id="next"></next>
              </lory>
            </article>
          </div>
      </div>
    </section>
    <section class="hero is-small is-info">
      <div class="hero-body has-text-centered">
        <h2 class="title">
          WANT TO START A PROJECT?
        </h2>
        <h2 class="subtitle">
          It’s simple.
        </h2>
        <a href="/#/contact" class="button is-outlined">Contact Me</a>
      </div>
    </section>
</div>
</template>

<script>
    // import KnowledgeChart from '../components/KnowledgeChart.vue'
    import { Lory, Item, Next, Prev } from 'vue-lory'

    export default {
        created() {
            // axios call here.
        },
        mounted() {
          this.slider()
          
        },
        components: {
          Lory,
          Item, 
          Next,
          Prev
        },
        methods: {
          slider() {
              setInterval(function () {
                if (self.$route.path == '/about') {
                  document.querySelector('#next').click()
                }
              }, 6000)        
          }
        }
    }
</script>
