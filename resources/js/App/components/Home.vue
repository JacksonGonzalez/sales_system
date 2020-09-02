<template>
  <div id="fondo" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#fondo" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/territorio_ventas.jpg" class="d-block w-100 h-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h4>SALES SYSTEM</h4>
          <h5>Sistema de Gestion para Venta y Compra de productos</h5>
          <p>Una plataforma creada para gestionar las compras y ventas de cualquier producto.</p>
          <button class="btn btn-success"><routerLink to="/login">Iniciar Sesion</routerLink></button>
        </div>
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
      .carousel-caption {
        bottom: 40%;
      }
      h4{
        font-size: 450% ;
      }
      h5{
        font-size: 200% ;
      }
      img{
        opacity: 0.2;
        max-height: 100%;
        
      }
      p{
        font-size: 120%;
      }
      #fondo{
        min-height:100%;
        max-height: 100%;
        background-size:cover;
        background-repeat: no-repeat;
      }
</style>
