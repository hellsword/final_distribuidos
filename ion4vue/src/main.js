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
Vue.prototype.$client_id = 6
Vue.prototype.$client_secret = 'NqJYLx6oOGdRFhoDP50zU57jW4u9L0JkElE4QsqE'
Vue.prototype.$grant_type = 'password'
Vue.prototype.$token = 'xxx'


/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})
