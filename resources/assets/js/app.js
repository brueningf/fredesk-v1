import './bootstrap';
import router from './routes';
import PacmanLoader from 'vue-spinner/src/RiseLoader.vue'
import TypeWriter from './libs/typewriter';
import jump from 'jump.js'
Vue.use(jump)

var app = new Vue({
    el: '#app',
    data() {
      return {
        loading: true
      }
    },
    components: {
      PacmanLoader
    },
    methods: {
      jumpToSection() {      
        setTimeout(function() {
          jump('.hero .hero-body.has-text-centered', {
            duration: 2000,
            offset: -60
          })
        }, 1000);
      },
      jumpToTop() {
        jump('.hero-head')
      }
    },
    created() {
        self = this
        setTimeout(function() {
          self.loading = false
        }, 800);
      
    },
    // initialiaze router
    router
});

// Parallax
(function(){

  var parallax = document.querySelectorAll(".parallax"),
      speed = 0.5;

  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){

      var windowYOffset = window.pageYOffset,
          elBackgrounPos = "50% " + (windowYOffset * speed) + "px";

      el.style.backgroundPosition = elBackgrounPos;

    });
  };

})();
