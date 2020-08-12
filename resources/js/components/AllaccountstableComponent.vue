<template>
    <div class="containe">
        <div v-if="loading" class="col-md-8">
                <div class="card">
                    

                    <div class="card-body">
                        <img class="mx-auto" width="90" height="90" v-bind="material" :src="material"> <h3>Loading ...</h3>
                        
                    </div>
                </div>
        </div>

        <div v-else class="row justify-content-center">
            <div  class="col-md-10">
                <div class="card">
                    <div class="card-header">  k</div>

                    <div class="card-body">
                       <table class="table table-hover">
                <thead class="text-warning">
                  <th>SN</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Status</th>
                  <th>More</th>
                </thead>
                <tbody>
                 
                  <tr v-for="(user, index) in users" :key="index">
                        <td>4</td>
                        <td>{{ user.name}}</td>
                        <td>{{ user.email}}</td>
                        <td>Korea, South</td>
                        <td>
                            <div class="togglebutton">
                            <label>
                                <input type="checkbox" checked="">
                                <span class="toggle"></span>
                                Active
                            </label>
                            </div>
                        </td>
                        <td>
                            <a href="/course_details" class="btn btn-success btn-sm">view more</a>
                        </td>
                  </tr>


                </tbody>
              </table>
              


                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {

        data(){
            return{
                'users' : [],
                'loading' : false,
                'material' : '',

                

            }
        },
        mounted() {
            this.getPosts();
        },
        methods:{
            getPosts(){

                this.loading = true;
                this.material = "http://localhost/laravelvuew/public/material/img/loading.gif";

                axios.get("/getusers")
                .then(response => {
                    // handle success
                    this.users = response.data.data;
                    this.loading = false;
                    this.material = "http://localhost/laravelvuew/public/material/img/loading.gif";
                    
                })
                .catch(error => {
                    this.loading = true; 
                    this.material = "http://localhost/laravelvuew/public/material/img/loading.gif";
                })
                
            }
        }
    }
</script>
