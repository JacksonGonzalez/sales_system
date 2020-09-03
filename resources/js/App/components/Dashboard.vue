<template>
  <div>
    <!-- <div class="row justify-content-center">
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
    </div> -->
    <!-- hola -->
    <menu-main></menu-main>
    <div class="c-wrapper c-fixed-components">
      <header-main :nombre="nombre"></header-main>

      <div class="c-body">

        <main class="c-main">
          <div class="container-fluid">
            <div class="fade-in">
              <div class="row">
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-gradient-primary">
                    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                      <div>
                        <div class="text-value-lg">9.823</div>
                        <div>Members online</div>
                      </div>
                      <div class="btn-group">
                        <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg class="c-icon">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                      </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                      <canvas class="chart" id="card-chart1" height="70"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-gradient-info">
                    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                      <div>
                        <div class="text-value-lg">9.823</div>
                        <div>Members online</div>
                      </div>
                      <div class="btn-group">
                        <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg class="c-icon">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                      </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                      <canvas class="chart" id="card-chart2" height="70"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-gradient-warning">
                    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                      <div>
                        <div class="text-value-lg">9.823</div>
                        <div>Members online</div>
                      </div>
                      <div class="btn-group">
                        <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg class="c-icon">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                      </div>
                    </div>
                    <div class="c-chart-wrapper mt-3" style="height:70px;">
                      <canvas class="chart" id="card-chart3" height="70"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
                <div class="col-sm-6 col-lg-3">
                  <div class="card text-white bg-gradient-danger">
                    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                      <div>
                        <div class="text-value-lg">9.823</div>
                        <div>Members online</div>
                      </div>
                      <div class="btn-group">
                        <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <svg class="c-icon">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                          </svg>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                      </div>
                    </div>
                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                      <canvas class="chart" id="card-chart4" height="70"></canvas>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->

              <div class="row">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">Ventas</div>
                    <div class="card-body">
                      <table class="table table-responsive-sm table-hover table-outline mb-0">
                        <thead class="thead-light">
                          <tr>
                            <th class="text-center">
                              <svg class="c-icon">
                                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-people"></use>
                              </svg>
                            </th>
                            <th>User</th>
                            <th class="text-center">Country</th>
                            <th>Usage</th>
                            <th class="text-center">Payment Method</th>
                            <th>Activity</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="text-center">
                              <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                            </td>
                            <td>
                              <div>Yiorgos Avraamu</div>
                              <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                            </td>
                            <td class="text-center">
                              <svg class="c-icon c-icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/flag.svg#cif-us"></use>
                              </svg>
                            </td>
                            <td>
                              <div class="clearfix">
                                <div class="float-left"><strong>50%</strong></div>
                                <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                              </div>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="text-center">
                              <svg class="c-icon c-icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-mastercard"></use>
                              </svg>
                            </td>
                            <td>
                              <div class="small text-muted">Last login</div><strong>10 sec ago</strong>
                            </td>
                          </tr>
                          <tr>
                            <td class="text-center">
                              <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                            </td>
                            <td>
                              <div>Avram Tarasios</div>
                              <div class="small text-muted"><span>Recurring</span> | Registered: Jan 1, 2015</div>
                            </td>
                            <td class="text-center">
                              <svg class="c-icon c-icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/flag.svg#cif-br"></use>
                              </svg>
                            </td>
                            <td>
                              <div class="clearfix">
                                <div class="float-left"><strong>10%</strong></div>
                                <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                              </div>
                              <div class="progress progress-xs">
                                <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </td>
                            <td class="text-center">
                              <svg class="c-icon c-icon-xl">
                                <use xlink:href="node_modules/@coreui/icons/sprites/brand.svg#cib-cc-visa"></use>
                              </svg>
                            </td>
                            <td>
                              <div class="small text-muted">Last login</div><strong>5 minutes ago</strong>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <!-- /.col-->
              </div>
              <!-- /.row-->
            </div>
          </div>
        </main>

        <footer-main></footer-main>
      </div>
    </div>
  </div>
</template>

<script>
import Axios from "axios";
// import Menu from "./menu";
import MenuMainVue from './MenuMain.vue';
import HeaderMainVue from './HeaderMain.vue';
import FooterMainVue from './FooterMain.vue';
export default {
  name: "Panel de Control",
  data() {
    return {
      loading: true,
      nombre: 'Dashboard'
    };
  },
  components:{
    'menu-main' : MenuMainVue,
    'header-main' : HeaderMainVue,
    'footer-main' : FooterMainVue
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
