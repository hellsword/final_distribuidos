// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import Vuetify from 'vuetify'
import axios from 'axios'
import 'vuetify/dist/vuetify.min.css' // Ensure you are using css-loader
//import 'material-design-icons-iconfont/dist/material-design-icons.css' // Ensure you are using css-loader

import App from './App'
import router from './router'

import _ from 'lodash';   //para filtros


window.axios = require('axios');
Vue.use(Vuetify)

Vue.config.productionTip = false

//variables globales
Vue.prototype.$client_id = 4
Vue.prototype.$client_secret = '4g6ZVAe8mDoRYmMEBRfWnnAclagwAVIjnHrW5I81'
Vue.prototype.$grant_type = 'password'
Vue.prototype.$token = 'xxx'
Vue.prototype.$username = ''


/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
