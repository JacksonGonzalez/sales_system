<template>
    <div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
      <div class="c-sidebar-brand d-lg-down-none">
          <div class="c-sidebar-brand-full">
            <img src="https://uexternado.booklick.co/LOGO_WHITE.png" alt="SALES SYSTEM LOGO" width="118" height="46">
          </div>
        <div class="c-sidebar-brand-minimized" >
          <img src="https://www.factoriacreativabarcelona.es/wp-content/uploads/2019/10/Logo-cohete-1.png" width="46" height="46" alt="SALES SYSTEM Logo">
        </div>
      </div>
      <ul class="c-sidebar-nav">
          <!-- DASHBOARD -->
        <li class="c-sidebar-nav-item"><router-link to="/dashboard" class="c-sidebar-nav-link">
            <i class="far fa-tachometer-alt c-sidebar-nav-icon"></i> Panel de Control</router-link>
        </li>
        
        <li class="c-sidebar-nav-item c-sidebar-nav-dropdown"><a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#">
            <i class="far fa-tachometer-alt c-sidebar-nav-icon"></i> Almacen</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><router-link to="categorias" class="c-sidebar-nav-link" ><span class="c-sidebar-nav-icon"><i class="far fa-tachometer-alt"></i></span> Categoria</router-link></li>
                <li class="c-sidebar-nav-item"><router-link to="productos" class="c-sidebar-nav-link" ><span class="c-sidebar-nav-icon"><i class="far fa-tachometer-alt"></i></span> Productos</router-link></li>
            </ul>
        </li>
    

        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="far fa-tachometer-alt c-sidebar-nav-icon"></i> Compras</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><router-link to="ingresos" class="c-sidebar-nav-link" ><span class="c-sidebar-nav-icon"><i class="far fa-tachometer-alt"></i></span> Ingresos</router-link></li>
            <li class="c-sidebar-nav-item"><router-link to="proveedor" class="c-sidebar-nav-link" ><span class="c-sidebar-nav-icon"><i class="far fa-tachometer-alt"></i></span> Proveedores</router-link></li>
          </ul>
        </li>

        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="far fa-tachometer-alt c-sidebar-nav-icon"></i> Ventas</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><router-link to="pedidos" class="c-sidebar-nav-link" ><span class="c-sidebar-nav-icon"><i class="far fa-tachometer-alt"></i></span> Pedidos</router-link></li>
            <li class="c-sidebar-nav-item"><router-link to="ventas" class="c-sidebar-nav-link" ><span class="c-sidebar-nav-icon"><i class="far fa-tachometer-alt"></i></span> Ventas</router-link></li>
            <li class="c-sidebar-nav-item"><router-link to="clientes" class="c-sidebar-nav-link" ><span class="c-sidebar-nav-icon"><i class="far fa-tachometer-alt"></i></span> Clientes</router-link></li>
          </ul>
        </li>

        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="far fa-tachometer-alt c-sidebar-nav-icon"></i> Acceso</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><router-link to="usuarios" class="c-sidebar-nav-link" ><span class="c-sidebar-nav-icon"><i class="far fa-tachometer-alt"></i></span> Usuarios</router-link></li>
            <li class="c-sidebar-nav-item"><router-link to="roles" class="c-sidebar-nav-link" ><span class="c-sidebar-nav-icon"><i class="far fa-tachometer-alt"></i></span> Roles</router-link></li>
          </ul>
        </li>

        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="far fa-tachometer-alt c-sidebar-nav-icon"></i> Reportes</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><router-link to="reporte-ingreso" class="c-sidebar-nav-link" ><span class="c-sidebar-nav-icon"><i class="far fa-tachometer-alt"></i></span> Ingresos</router-link></li>
            <li class="c-sidebar-nav-item"><router-link to="reporte-ventas" class="c-sidebar-nav-link" ><span class="c-sidebar-nav-icon"><i class="far fa-tachometer-alt"></i></span> Ventas</router-link></li>
          </ul>
        </li>
        
        
        <li class="c-sidebar-nav-item mt-auto"><router-link to="dashboard" class="c-sidebar-nav-link c-sidebar-nav-link-success" target="_top">
            <i class="far fa-tachometer-alt c-sidebar-nav-icon"></i> Manual Usuario</router-link>
        </li>
        <li class="c-sidebar-nav-item"><router-link to="dashboard" class="c-sidebar-nav-link c-sidebar-nav-link-danger" target="_top">
            <i class="far fa-tachometer-alt c-sidebar-nav-icon"></i> Contactenos</router-link>
        </li>
      </ul>
      <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
    </div>
</template>
<script>

    export default {
        name: 'MenuMain',
        data(){
            return {
                
            }
        },
        components:{
            
        },
        mounted() {
            
        }
    }
</script>