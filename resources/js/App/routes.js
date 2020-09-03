import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/Home';
import Dashboard from './components/Dashboard';
import Login from './components/Login';
import MenuMain from './components/MenuMain';

Vue.use(VueRouter);

export const routes = [
    {
        path : '/',
        component: Home,

    },
    {
        path : '/login',
        component: Login,

    },
    {
        path : '/dashboard',
        component: Dashboard,

    },
    {
        path : '/menu-main',
        component: MenuMain,

    },

];