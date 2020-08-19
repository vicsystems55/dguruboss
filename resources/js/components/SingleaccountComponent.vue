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
                    

                    <div class="card-body">
                       
              one student


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

                axios.get("/oneuser/2")
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
