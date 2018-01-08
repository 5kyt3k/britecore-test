//Britecore Test Project: scripts
import Vue from 'vue';
window.Vue = Vue;

var field = new Vue({
  el: '#details',
  data: {
    form : {
      label: '',
      reference: '',
      default:'',
      validation:''
    }
  }
})
