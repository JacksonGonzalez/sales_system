import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/Home';
import Dashboard from './components/Dashboard';
// import Login from './Login';

Vue.use(VueRouter);

export const routes = [
    {
        path : '/',
        component: Home,

    },
    // {
    //     path : '/login',
    //     component: Login,

    // },
    {
        path : '/dashboard',
        component: Dashboard,

    },

];