import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

import Index from '../pages/Index'
import About from '../pages/About'
import Works from '../pages/Works'
import Message from '../pages/Message'
import Article from '../pages/Article'

export default new Router({
  routes: [
    { path: '', name: 'Index', component: Index },
    { path: '/index', name: 'Index', component: Index },
    { path: '/about', name: 'About', component: About },
    { path: '/works', name: 'Works', component: Works },
    { path: '/message', name: 'Message', component: Message },
    { path: '/article/:id', name: 'Article', component: Article }
  ]
})
