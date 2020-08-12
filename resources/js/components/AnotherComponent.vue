<template>
    <div class="containe">
        
        <div v-if="loading" class="c">

                <div class="card">
                    

                    <div class="card-body">
                        <img class="mx-auto" width="90" height="90" v-bind="material" :src="material">
                        
                    </div>
                </div>

        </div>

        <div v-else class="container">

                <div class="row">

                    <div class="col-md-4" v-for="(course, index) in courses" :key="index" >
                    
                             <div class="">
                                <div class="card mb-3">
                                <img class="card-img-top" src="https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80" rel="nofollow" alt="Card image cap">
                                <div class="card-body">
                                <h4 class="card-title">{{course.title}}</h4>
                                <p class="card-text">{{course.description}}</p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                                </div>
                                </div>
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
                'courses' : [],
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

                axios.get("loadcourses")
                .then(response => {
                    // handle success
                    this.courses = response.data.data;
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
