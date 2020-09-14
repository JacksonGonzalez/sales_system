<template>
    <div>
        <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
          <!-- <svg class="c-icon c-icon-lg">
            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-menu"></use>
          </svg> -->
          <i class="fas fa-bars"></i>
        </button><a class="c-header-brand d-lg-none" href="#">
          <i class="fas fa-bars"></i>
          </a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
          <!-- logo habmburguesa -->
          <i class="fas fa-bars"></i>
        </button>

        <!-- Options menu -->
        <ul class="c-header-nav d-md-down-none">
          <li class="c-header-nav-item px-3">{{ nombre }}</li>
        </ul>


        <ul class="c-header-nav ml-auto mr-4">
            <li class="c-header-nav-item d-md-down-none mx-2">
                <a class="c-header-nav-link" href="#"><i class="far fa-moon"></i></a>
            </li>
            <li class="c-header-nav-item d-md-down-none mx-2">
                <a class="c-header-nav-link" href="#"><i class="far fa-bell"></i></a>
            </li>
            <li class="c-header-nav-item d-md-down-none mx-2">
                <a class="c-header-nav-link" href="#"><i class="far fa-list-ul"></i></a>
            </li>
          <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <div class="c-avatar"><img class="c-avatar-img" src="https://kooledge.com/assets/default_medium_avatar-57d58da4fc778fbd688dcbc4cbc47e14ac79839a9801187e42a796cbd6569847.png" alt="user@email.com"></div>
            </a>
            <div class="dropdown-menu dropdown-menu-right pt-0">
              <div class="dropdown-header bg-light py-2"><strong>Cuenta</strong></div>
                <a class="dropdown-item" href="#"><i class="far fa-user-circle mr-2"></i> Perfil</a>
                <a class="dropdown-item" href="#"><i class="far fa-cog mr-2"></i> Configuraciones</a>
                <router-link to="ingresos" class="dropdown-item"><i class="far fa-cart-arrow-down mr-2"></i> Compras<span class="badge badge-secondary ml-auto">42</span></router-link>
                <router-link to="ventas" class="dropdown-item" href="#"><i class="far fa-money-bill-wave mr-2"></i> Ventas<span class="badge badge-primary ml-auto">42</span></router-link>
              <div class="dropdown-divider"></div>
                <button class="dropdown-item" @click="logout"><i class="far fa-sign-out-alt mr-2"></i> Salir</button>
            </div>
          </li>
        </ul>
        
      </header>
    </div>
</template>
<script>
import axios from 'axios';

    export default {
        name: 'HeaderMain',
        props: {
            nombre: String
        },
        data(){
            return {
                
            }
        },
        components:{
            
        },
        mounted() {
            if (this.$store.state.token !== "") {
              axios.post("/api/checkToken", "",{ headers:{ Authorization: "Bearer "+this.$store.state.token }})
                .then((res) => {
                  if (res) {
                    // this.loading = false;
                    // this.$router.push("/dashboard");
                  }
                })
                .catch((err) => {
                  // this.loading = false;
                  this.$store.commit("clearToken");
                  this.$router.push("/login");
              });
            } else {
            
              // this.loading = false;
              this.$store.commit("clearToken");
              this.$router.push("/login");

            }
        },
        methods :{
            logout(){
                axios.post('/api/logout', "",{ headers:{ Authorization: "Bearer "+this.$store.state.token }})
                .then((res) => {
                if (res) {
                  // this.loading = false;
                  this.$store.commit("clearToken");
                  this.$router.push("/");
                }
              })
              .catch((err) => {
                console.log(err);
              });
            }
        }
    }
</script>
<style lang="stylus" scoped>
 
</style>