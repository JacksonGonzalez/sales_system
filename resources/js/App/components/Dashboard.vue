<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="d-flex justify-content-center">
          <div class="spinner-border text-success" role="status">
            <span class="sr-only">Verificando...</span>
          </div>
        </div>

        <div class="card">
            <div class="card-header">
               <h2>Dashboard</h2>
              <button class="btn btn-info" @click="logout" >Cerrar Sesión</button>
            </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Axios from "axios";
export default {
  name: "Dashboard",
  data() {
    return {
      loading: true,
    };
  },
  mounted() {
    // if (this.$store.state.token !== "") {
    //   axios
    //     .post("/api/checkToken", { token: this.$store.state.token })
    //     .then((res) => {
    //       if (res) {
    //         this.loading = false;
    //         // this.$router.push("/dashboard");
    //       }
    //     })
    //     .catch((err) => {
    //       this.loading = false;
    //       this.$store.commit("clearToken");
    //       this.$router.push("/login");
    //     });
    // } else {
    
    //   this.loading = false;
    //   this.$store.commit("clearToken");
    //   this.$router.push("/login");

    // }
  },
  methods : {
//       logout(){
//           axios.post('/api/logout', {token: this.$store.state.token})
//           .then((res) => {
//           if (res) {
//             // this.loading = false;
//             this.$store.commit("clearToken");
//             this.$router.push("/");
//           }
//         })
//         .catch((err) => {
//           console.log(err);
//         });
//       }
  }
};
</script>
