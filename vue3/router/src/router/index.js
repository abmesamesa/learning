import { createRouter, createWebHistory } from 'vue-router'
import EventList from '../views/EventList.vue'
import EventDetails from '../views/event/Details.vue'
import EventRegister from '../views/event/Register'
import EventEdit from '../views/event/Edit'
import EventLayout from '../views/event/Layout'

import About from '../views/About.vue'

const routes = [
  {
    path: '/',
    name: 'EventList',
    component: EventList,
    props: route => ({ page: parseInt(route.query.page) || 1 })
  },
  {
    path: '/events/:id',
    name: 'EventLayout',
    props: true,
    component: EventLayout,
    children: [
      {
        path: '',
        name: 'EventDetails',
        component: EventDetails
      },
      {
        path: 'register',
        name: 'EventRegister',
        component: EventRegister
      },
      {
        path: 'edit',
        name: 'EventEdit',
        component: EventEdit
      },
    ]
  },
  // REDIRECT 1: the old route /event/:id has been changed and we redirect the old one to the new one
  //   The nested routes are not redirected
  // {
  //   path: '/event/:id',
  //   redirect: () => {
  //     return { name: 'EventDetails' }
  //   }
  // },
  // REDIRECT 2: it redirects nested routes as well
  // {
  //   path: '/event/:id',
  //   redirect: () => {
  //     return { name: 'EventDetails' }
  //   },
  //   children: [
  //     { path: 'register', redirect: () => ({ name: 'EventRegister' }) },
  //     { path: 'edit', redirect: () => ({ name: 'EventEdit' }) }
  //   ]
  // },
  // REDIRECT 3: it redirects nested routes as well in a more concise way
  {
    path: '/event/:afterEvent(.*)',
    redirect: to => {
      return { path: '/events/' + to.params.afterEvent }
    }
  },
  {
    path: '/about',
    name: 'About',
    component: About
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
