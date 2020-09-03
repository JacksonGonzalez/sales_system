import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './components/Home';
import Dashboard from './components/Dashboard';
import Login from './components/Login';
import MenuMain from './components/MenuMain';
import Category from './components/Category';
import Client from './components/Client';
import Income from './components/Income';
import IncomeReport from './components/IncomeReport.vue';
import Order from './components/Order.vue';
import Product from './components/Product.vue';
import Rol from './components/Rol.vue';
import Sale from './components/Sale.vue';
import SaleReport from './components/SaleReport.vue';
import Supplier from './components/Supplier.vue';
import User from './components/User.vue';

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
    {
        path : '/categorias',
        component: Category,

    },
    {
        path : '/productos',
        component: Product,

    },
    {
        path : '/ingresos',
        component: Income,

    },
    {
        path : '/proveedor',
        component: Supplier,

    },
    {
        path : '/pedidos',
        component: Order,

    },
    {
        path : '/ventas',
        component: Sale,

    },
    {
        path : '/clientes',
        component: Client,

    },
    {
        path : '/usuarios',
        component: User,

    },
    {
        path : '/roles',
        component: Rol,

    },
    {
        path : '/reporte-ingreso',
        component: IncomeReport,

    },
    {
        path : '/reporte-venta',
        component: SaleReport,

    },

];