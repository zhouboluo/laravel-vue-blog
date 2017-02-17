import Vue from 'vue'
import Main from './Main'
import store from './store/index.js'
import router from './router/index.js'
import Resource from 'vue-resource'

Vue.use(Resource)



const app = new Vue({
  el: '#app',
  store,
  router,
  render: h => h(Main)
})

