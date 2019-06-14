import Vue from 'vue/dist/vue.js'
import App from './App.vue'
import VueRouter from 'vue-router/dist/vue-router.common.js'

import axios from "axios";

Vue.use(VueRouter)

import Example from './components/Example.vue'
import MyPeopleList from './components/MyPeopleList.vue'
import OnePeople from './components/OnePeople.vue'


const router = new VueRouter({
  mode: 'history',
  base: __dirname,
  routes: [
    { path: '/pl/:id', component: OnePeople, props: true },
    { path: '/pl/', component: MyPeopleList },
    { path: '/', component: Example },	
  ]
})

new Vue({
  router,
  render: h => h(App),
}).$mount('#app');
