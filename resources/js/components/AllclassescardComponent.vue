<template>

 
   
    <div class="containe">

      

      <div class="row">
        
        <div class="mx-auto col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header-success text-center">
             
              <p class="card-category">Courses In Progress</p>
              <h3 class="card-title">0</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">date_range</i> Last 24 Hours
              </div>
            </div>
          </div>
        </div>
        <div class="mx-auto col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class=" card-header-danger text-center">
              
              <p class="card-category">Completed Courses</p>
              <h3 class="card-title">0</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">local_offer</i> Tracked from Github
              </div>
            </div>
          </div>
        </div>
        <div class="mx-auto col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class=" card-header-info text-center">
              
              <p class="card-category">GB Credits</p>
              <h3 class="card-title">0.00GB</h3>
            </div>
            <div class="card-footer">
              <div class="stats">
                <i class="material-icons">update</i> Just Updated
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-body ">
           <div class="row">
             <form class="form col-9">
                <div class="form-grou ">
                  
                    <div class="input-group row">
                      <input type="text" class="form-control col-8" placeholder="Search for a course...">
                      <span class="input-group-btn col-4">
                          <button type="button" class="btn btn-fab btn-round btn-primary">
                              <i class="material-icons">search</i>
                          </button>
                      </span>
                    </div>
                </div>
              </form>

              <div class="col-3">
                <addcourseform-component></addcourseform-component>
                
              </div>
           </div>
        </div>
      </div>

      <div class="container">

        <div v-for="(course, index) in courses" :key="index" >
                            <h3>{{ course.title}}</h3>
                            <h5>{{ course.description}}</h5>
                        </div>


        <div class="row">
          <div class="col-lg-3 col-md-4">
              <div class="card mb-3">
                <img class="card-img-top" src="https://images.unsplash.com/photo-1517303650219-83c8b1788c4c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd4c162d27ea317ff8c67255e955e3c8&auto=format&fit=crop&w=2691&q=80" rel="nofollow" alt="Card image cap">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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

             console.log('aaa Component mounted.'),
            this.getPosts();
        },
        methods:{
            getPosts(){

                this.loading = true;
                // this.material = "http://localhost/laravelvuew/public/material/img/loading.gif";

                axios.get("all_courses")
                .then(response => {
                    // handle success
                    this.courses = response.data.data;
                    this.loading = false;
                    // this.material = "http://localhost/laravelvuew/public/material/img/loading.gif";
                    
                })
                .catch(error => {
                    this.loading = true; 
                    this.material = "http://localhost/laravelvuew/public/material/img/loading.gif";
                })
                
            }
        }
    }
</script>
