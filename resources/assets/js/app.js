
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.

*/
require('./bootstrap');

window.Vue = require('vue');

var VueResource = require('vue-resource');

Vue.use(VueResource);

const app = new Vue({
    el: '#app',
    data: {
        emplacement : "",
        ville : "",
        villes: [],
        disabledBeforeSelect: true,
        disabledWhenSelect: false,
        ads: [],
        trie: ""
    },
    methods: {
      getCity:function() {

        this.getAllCities(this.emplacement)

      },

      getAllCities:function(id) {
        this.disabledBeforeSelect = true;
        this.disabledWhenSelect = true;
        this.$http.get('annonces/ville/'+id).then(function(response){
          //done
          if(response.body.length >0) {
            this.villes = response.body;
            this.disabledBeforeSelect = false;
            this.disabledWhenSelect = false;
          }
        },
          function() {
            //error
            alert("Erreur pendant le traitement ! Merci d'essayer plus tard !");
          }
        )
      }

    }
});
