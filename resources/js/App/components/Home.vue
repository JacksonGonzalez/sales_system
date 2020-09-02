<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="navbar">
                <div>
                    <routerLink to="/">Home</routerLink>
                </div>
                <div>
                    <routerLink to="/login">Login</routerLink>
                </div>
                <div>
                    <routerLink to="/dashboard">Dashboard</routerLink>
                </div>
            </div>
            <div v-if="!loading">
                Hola
            </div>
            <div v-else>
                <dashboard></dashboard>
            </div>
        </div>
    </div>
</template>

<script>
    import Dashboard from './Dashboard';

    export default {
        name: 'Home',
        data(){
            return {
                loading: false
            }
        },
        components:{
            'dashboard' : Dashboard
        },
        mounted() {
            
        }
    }
</script>

<style scoped>
    .navbar{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .navbar div {
        padding: 10px 20px;
        margin: 5px;
    }
</style>
