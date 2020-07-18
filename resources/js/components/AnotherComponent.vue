<template>
    <div class="container">
        <div class="row justify-content-center">
            <div v-if="loading" class="col-md-8">
                <div class="card">
                    

                    <div class="card-body">
                        <h6>Loading..b.</h6>
                        
                    </div>
                </div>
            </div>

            <div v-else class="col-md-8">
                <div class="card">
                    <div class="card-header">Another j Component</div>

                    <div class="card-body">

                        <div v-for="(post, index) in posts" :key="index" >
                            <h3>{{ post.name}}</h3>jkj
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

            }
        },
        mounted() {
            this.getPosts();
        },
        methods:{
            getPosts(){

                this.loading = true;

                axios.get("getusers")
                .then(response => {
                    // handle success
                    this.posts = response.data.data;
                    this.loading = false;
                    
                })
                .catch(error => {
                    this.loading = false; 
                })
                
            }
        }
    }
</script>
