<template>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>Bienvenido</h1>
                <p class="text-muted">Sus Datos por favor</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <i class="fas fa-user"></i>
                      </span></div>
                  <input class="form-control" type="email" placeholder="Correo">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend"><span class="input-group-text">
                     <i class="fas fa-key"></i>
                     </span></div>
                  <input class="form-control" type="password" placeholder="Contraseña">
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" type="button">Ingresar</button>
                  </div>
                  <div class="col-6 text-right">
                    <routerLink to="/"><button class="btn btn-info px-5" type="button">Inicio</button></routerLink>
                  </div>
                </div>
              </div>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                  <h2>SALES SYSTEM</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <!-- <button class="btn btn-lg btn-outline-light mt-3" type="button">Register Now!</button> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</template>


<script>
window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
export default {
    
}
</script>
<style scoped>
    div.row.justify-content-center{
        margin-top: 10%;
    }
    router-link{
          text-decoration: none;
      }
      router-link a{
          text-decoration: none;
      }
      router-link a{
          text-decoration: none !important;
      }
</style>