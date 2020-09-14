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
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/dashboard"><span class="c-sidebar-nav-icon"><i class="far fa-tachometer-alt"></i></span> Panel de Control</a></li>

        <!-- ALMACEN -->
        <li class="c-sidebar-nav-dropdown">
          <a class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle" href="#"> <i class="far fa-warehouse c-sidebar-nav-icon"></i> Almacen</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/categorias"><span class="c-sidebar-nav-icon"><i class="far fa-tags"></i></span> Categorias</a></li>
                <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/productos"><span class="c-sidebar-nav-icon"><i class="far fa-box"></i></span> Productos</a></li>
            </ul>
        </li>
    
        <!-- COMPRAS -->
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="far fa-shopping-cart c-sidebar-nav-icon"></i> Compras</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/ingresos"><span class="c-sidebar-nav-icon"><i class="far fa-ticket"></i></span> Ingresos</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="proveedor"><span class="c-sidebar-nav-icon"><i class="far fa-user-tie"></i></span> Proveedores</a></li>
          </ul>
        </li>

        <!-- VENTAS -->
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="far fa-cart-arrow-down c-sidebar-nav-icon"></i> Ventas</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="pedidos"><span class="c-sidebar-nav-icon"><i class="far fa-check"></i></span> Pedidos</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="ventas"><span class="c-sidebar-nav-icon"><i class="far fa-chart-pie-alt"></i></span> Ventas</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="clientes"><span class="c-sidebar-nav-icon"><i class="far fa-users"></i></span> Clientes</a></li>
          </ul>
        </li>

        <!-- ACCESO -->
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="far fa-file-contract c-sidebar-nav-icon"></i> Acceso</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="usuarios"><span class="c-sidebar-nav-icon"><i class="far fa-user"></i></span> Usuarios</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="roles"><span class="c-sidebar-nav-icon"><i class="far fa-lock-open"></i></span> Roles</a></li>
          </ul>
        </li>
        
        <!-- REPORTES -->
        <li class="c-sidebar-nav-dropdown"><a class="c-sidebar-nav-dropdown-toggle" href="#">
            <i class="far fa-file-chart-pie c-sidebar-nav-icon"></i> Reportes</a>
          <ul class="c-sidebar-nav-dropdown-items">
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="reporte-ingreso"><span class="c-sidebar-nav-icon"><i class="far fa-file-chart-line"></i></span> Ingresos</a></li>
            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="reporte-ventas"><span class="c-sidebar-nav-icon"><i class="far fa-file-chart-pie"></i></span> Ventas</a></li>
          </ul>
        </li>
        
        
        <li class="c-sidebar-nav-item mt-auto"><router-link to="dashboard" class="c-sidebar-nav-link c-sidebar-nav-link-success" target="_top">
            <i class="far fa-book c-sidebar-nav-icon"></i> Manual Usuario</router-link>
        </li>
        <li class="c-sidebar-nav-item"><router-link to="dashboard" class="c-sidebar-nav-link c-sidebar-nav-link-danger" target="_top">
            <i class="far fa-address-card c-sidebar-nav-icon"></i> Contactenos</router-link>
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