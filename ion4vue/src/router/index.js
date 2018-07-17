import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/Form1'
import Login from '@/components/Login'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Login',
      component: Login
    },
    {
      path: '/zzz',
      name: 'HelloWorld',
      component: HelloWorld
    }
  ]
})
