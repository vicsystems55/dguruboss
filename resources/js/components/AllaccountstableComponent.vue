<template>
    <div class="containe">
        <div v-if="loading" class="col-md-8">
                <div class="card">
                    

                    <div class="card-body">
                        <img class="mx-auto" width="90" height="90" v-bind="material" :src="material">
                        
                    </div>
                </div>
        </div>

        <div v-else class="row justify-content-center">
            <div  class="col-md-10">
                <div class="card">
                    <div class="card-header">All Accounts Component</div>

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
                 
                  <tr>
                        <td>4</td>
                        <td>Philip Chaney</td>
                        <td>$38,735</td>
                        <td>Korea, South</td>
                        <td>
                            <div class="togglebutton">
                            <label>
                                <input type="checkbox" checked="">
                                <span class="toggle"></span>
                                Toggle is on
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

                axios.get("getuser")
                .then(response => {
                    // handle success
                    this.posts = response.data.data;
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
