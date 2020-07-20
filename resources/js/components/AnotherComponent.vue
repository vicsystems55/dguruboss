<template>
    <div class="container">
        <div class="row justify-content-center">
            <div v-if="loading" class="col-md-8">
                <div class="card">
                    

                    <div class="card-body">
                        <img class="mx-auto" width="90" height="90" v-bind="material" :src="material">
                        
                    </div>
                </div>
            </div>

            <div v-else class="col-md-8">
                <div class="card">
                    <div class="card-header">Another Component</div>
                    

                    <div class="card-body">

                        <div v-for="(post, index) in posts" :key="index" >
                            <h3>{{ post.name}}</h3>
                            <h5>{{ post.email}}</h5>
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
                'posts' : [],
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

                axios.get("getusers")
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
