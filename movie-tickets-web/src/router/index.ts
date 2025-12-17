import { createRouter, createWebHistory } from 'vue-router'
import Ping from '../views/Ping.vue';

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
      { path: '/', redirect: '/ping' },
      { path: '/ping', component: Ping },
  ],
})

export default router
