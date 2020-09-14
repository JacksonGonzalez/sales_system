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
                  <input class="form-control" type="email" placeholder="Correo" v-model="credentials.email">
                </div>
                <div class="input-group mb-4">
                  <div class="input-group-prepend"><span class="input-group-text">
                     <i class="fas fa-key"></i>
                     </span></div>
                  <input class="form-control" type="password" placeholder="Contraseña" v-model="credentials.password">
                </div>
                <div class="alert alert-danger" role="alert" v-if="errorLogin">
                  Usuario o Contraseña incorrectos!
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-primary px-4" @click.prevent="login" type="button">Ingresar</button>
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
import axios from 'axios';

// window.dataLayer = window.dataLayer || [];

//       function gtag() {
//         dataLayer.push(arguments);
//       }
//       gtag('js', new Date());
//       // Shared ID
//       gtag('config', 'UA-118965717-3');
//       // Bootstrap ID
//       gtag('config', 'UA-118965717-5');


export default {
  name: "Login",
  data() {
    return {
      credentials: {
        email: "",
        password: "",
      },
      // loading: true,
      errorLogin: false,
    };
  },
  
  mounted() {
    if (this.$store.state.token != "") {
      axios.post("/api/checkToken", "",{ headers:{ Authorization: "Bearer "+this.$store.state.token }})
        .then((res) => {
          if (res) {
            // this.loading = false;
            this.$router.push("/dashboard");
          }
        })
        .catch((err) => {
          // this.loading = false;
          console.log(err);
          this.$store.commit("clearToken");
        });
    } else {
      // this.loading = false;
    }
  },
  methods: {
    login() {
      axios
        .post("/api/login", this.credentials)
        .then((res) => {
          if (res.data.success) {
            // actualizar la data
            // console.log(res.data);
            this.$store.commit("setToken", res.data.success.token);
            // console.log(res.data.success.token);
            this.$router.push('/dashboard');
          }
        })
        .catch((err) => {
          this.errorLogin = true;
          console.log("Error :", err);
        });
        this.errorLogin = true;
    },
  },
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