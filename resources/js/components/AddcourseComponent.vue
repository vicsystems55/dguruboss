<template>
    <div class="container">
        <div class="row justify-content-center">
            

            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Course.</div>
        
                    <div class="card-body">

                       <form action="">

                           <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-group"></i>
                                </span>
                                </div>
                                <input type="text" class="form-control" placeholder="Course Title">
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-group"></i>
                                        </span>
                                    </div>
                                    <textarea placeholder="Description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                            </div>

                              <div class="form-group">
                                <label for="exampleFormControlSelect1">Example selecttt</label>
                                <select class="form-control selectpicker" data-style="btn btn-link">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                </select>
                            </div>
                            




                       </form>

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
          
        },
        methods:{
            getPosts(){

                this.loading = false;
                this.material = "http://localhost/laravelvuew/public/material/img/loading.gif";

                axios.get("getusers")
                .then(response => {
                    // handle success
                    this.posts = response.data.data;
                    this.loading = false;
                    this.material = "http://localhost/laravelvuew/public/material/img/loading.gif";
                    
                })
                .catch(error => {
                    this.loading = false; 
                    this.material = "http://localhost/laravelvuew/public/material/img/loading.gif";
                })
                
            }
        }
    }
</script>
