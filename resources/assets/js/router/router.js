import Vue from 'vue';
import VueRouter from 'vue-router';
import store from '../store/index';

import Top from '../pages/TheTop';
import TheActivity from '../pages/TheActivity';
import IndivActivity from '../pages/TheIndivActivity';
import Users from '../pages/Users';
import EditUsers from '../pages/EditUsers';
import ConfirmReserve from '../pages/ConfirmReserve';
import SearchCategory from '../pages/ActivitySearchForCategory';
import Login from '../pages/Login';
import Register from '../pages/Register';
 
Vue.use(VueRouter);
 
const routes = [
    {
        path:'/',
        component: Top
    },
    {
        path:'/users',
        component: Users
        // meta: {
        //     requiresAuth: true
        // }
    },
    {
        path:'/users/edit',
        component: EditUsers
        // meta: {
        //     requiresAuth: true
        // }
    },
    {
        path:'/reserve',
        component: ConfirmReserve
        // meta: {
        //     requiresAuth: true
        // }
    },
    {
        path:'/activity',
        component: TheActivity
    },
    {
        path:'/login',
        component: Login,

    },
    {
        path:'/register',
        component: Register,

    },
    {
        path: '/search',
        name: 'Search',
        component: SearchCategory,
        // propsを渡して、カテゴリーを引っ張ってくるようにする
        props: route => ({
            query: route.query.category
        })
    },
    {
        path:'/activity/:id',
        name: 'IndivActivity',
        component: IndivActivity,
        props: route => ({
            id: Number(route.params.id)
        })
    }
];
 
const router = new VueRouter({
    mode: 'history',
    routes,
    // Established tactic
    scrollBehavior (to, from, savedPosition) {
        if (savedPosition) {
          return savedPosition
        } else {
          return { x: 0, y: 0 }
        }
      }
});
 
router.beforeEach((to, from, next) => {
    if (to.matched.some(record => record.meta.requiresAuth)) {
        if (state.isLogin === false) {
            next({
                path: '/login',
                query: { redirect: to.fullPath }
            })
        } else {
            next()
        }
    } else {
        next();
    }
});
 
export default router;