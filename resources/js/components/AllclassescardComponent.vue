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
        <div class="row">
          <div class="col-lg-3 col-md-4">
              <div class="card card-blog">
                <div class=" card-header card-header-image bg-dark">
                    <a href="#pablo">
                        <img class="img" src="https://images.unsplash.com/photo-1511439817358-bee8e21790b5?auto=format&fit=crop&w=750&q=80&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" rel="nofollow">
                        <div class="card-title">
                            This Summer Will be Awesome
                        </div>
                    </a>
                </div>
                  <div class="card-body pb-0">
                    <h6 class="card-categor text-info"><span class="text-dark">category:</span> Fashion</h6>
                      <p class="card-description">
                        Rick Owens&#x2019; bed design but the back is...
                      </p>
                      
                  <hr>
                      <button class="btn-primary btn btn-sm btn-block">more</button>
                      

                  </div>
                  
                  
            </div>
          </div>


  

        </div>
      </div>
    </div>
    
</template>

<style>
 
</style>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
