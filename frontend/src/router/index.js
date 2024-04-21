import { createRouter, createWebHistory } from 'vue-router'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('@/views/HomeView.vue')
    },
    {
      path: '/teacher',
      name: 'teacher',
      component: () => import('@/views/TeacherView.vue'),
    },
    {
      path: '/student',
      name: 'student',
      component: () => import('@/views/StudentView.vue'),
    },
    {
      path: '/faculty',
      name: 'faculty',
      component: () => import('@/views/FacultyView.vue'),
    }
    // {
    //   path: '/product/:id',
    //   name: 'productDetail',
    //   component: () => import('@/views/StudentView.vue'),
    // }
    // {
    //   path: '/product/:id',
    //   name: 'productDetail',
    //   component: () => import('@/views/StudentView.vue'),
    // }
  ]
})

export default router
