<template>

 
   
    <div class="containe">

      

      <div class="row">
        
        <div class="mx-auto col-lg-3 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-header-success ">
             
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
            <div class=" card-header-danger">
              
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
            <div class=" card-header-info">
              
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
        <div class="card-body d-flex">
           <form class="form-inline">
                <div class="form-group no-border">
                  <input type="text" class="form-control" placeholder="Search for a course">
                </div>
                <button type="submit" class="btn btn-just-icon btn-round">
                  <i class="material-icons">search</i>
                </button>
            </form>

            <div class="ml-auto">
              <addcourseform-component></addcourseform-component>
              
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
