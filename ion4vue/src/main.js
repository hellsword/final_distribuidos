// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import axios from 'axios'
import App from './App'
import router from './router'

import _ from 'lodash';   //para filtros

window.axios = require('axios');

Vue.config.productionTip = false

Vue.config.ignoredElements = [/^ion-/]

/*
Vue.config.ignoredElements = [
  'ion-app',
  'ion-page',
  'ion-header',
  'ion-toolbar',
  'ion-title',
  'ion-content',
  'ion-list',
  'ion-item',
  'ion-label'
]
*/

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
