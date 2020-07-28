<template>
    <div class="container">
        <div class="row justify-content-center">
            

            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">Add Course</div>
        
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
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-group"></i>
                                        </span>
                                    </div>
                                    <select placeholder="Select " class="form-control" id="exampleFormControlSelect1">
                                        <option value="">--Select Category--</option>
                                    <option value="Business">Business</option>
                                    <option value="Finance and Accounting">Finance and Accounting</option>
                                    <option value="IT and Software">IT and Software</option>
                                    <option value="Personal Development">Personal Development</option>
                                    <option value="Design and Graphics">Design and Graphics</option>
                                    <option value="Marketting">Marketting</option>
                                    <option value="Health and Fitness">Health and Fitness</option>
                                    <option value="Music">Music</option>
                                    <option value="Teaching and Academics">Teaching and Academics</option>
                                    <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-group"></i>
                                        </span>
                                    </div><button class="btn bnt-primary btn-sm">-</button>
                                    <input placeholder="Enter Course Fee" type="text" class="form-control">
                                    <button class="btn bnt-primary btn-sm">+</button>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-group"></i>
                                        </span>
                                    </div>
                                    <input placeholder="Course Banner Cover" type="file" class="form-control">
                                    
                                </div>
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
