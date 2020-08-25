@extends('layouts.tutor', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
  <div class="content">
    <div class="container-flui">

        <h1>Update Profile</h1>

        <div class="containe">
        
            <form action="">
            
                <div class="card col-md-10">
                    <div class="card-body">

                      <div class="mx-auto"  style="background-image: url({{asset('/material/img/faces/avatar.jpg')}});
                        background-size: cover;
                      "  id="image-preview">
                        <label  for="image-upload" id="image-label">Choose File</label>
                        <input type="file" name="image" id="image-upload" />
                      </div>

                   
                      <div class="form-group mt-5">
                        <label for="bio">Bio</label>
                        <textarea placeholder="Tell us about yourself..." name="bio" class="form-control" id="bio" rows="3"></textarea>
                      </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Home Address">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Phone">
                        </div>

                        

                        <div class="form-group">
                            <select class="form-control" name="" id="">
                                <option value="">--select state of residence--</option>
                                <option value="">FCT Abuja</option>
                                <option value="Adamawa State">Adamawa State</option>
                                <option value="Akwa Ibom State">Akwa Ibom State</option>
                                <option value="Anambra State">Anambra State</option>
                                <option value="Bauchi State">Bauchi State</option>
                                <option value="Bayelsa State">Bayelsa State</option>
                                <option value="Benue State">Benue State</option>
                                <option value="Borno State">Borno State</option>
                                <option value="Cross River State">Cross River State</option>
                                <option value="Delta State">Delta State</option>
                                <option value="Ebonyi State">Ebonyi State</option>
                                <option value="Edo State">Edo State</option>
                                <option value="Ekiti State">Ekiti State</option>
                                <option value="Enugu State">Enugu State</option>
                                <option value="Gombe State">Gombe State</option>
                                <option value="Imo State">Imo State</option>
                                <option value="Jigawa State">Jigawa State</option>
                                <option value="Kaduna State">Kaduna State</option>
                                <option value="Kano State">Kano State</option>
                                <option value="Katsina State">Katsina State</option>
                                <option value="Kebbi State">Kebbi State</option>
                                <option value="Kogi State">Kogi State</option>
                                <option value="Kwara State">Kwara State</option>
                                <option value="Lagos State">Lagos State</option>
                                <option value="Nasarawa State">Nasarawa State</option>
                                <option value="Niger State">Niger State</option>
                                <option value="Ogun State">Ogun State</option>
                                <option value="Ondo State">Ondo State</option>
                                <option value="Osun State">Osun State</option>
                                <option value="Oyo State">Oyo State</option>
                                <option value="Plateau State">Plateau State</option>
                                <option value="Rivers State">Rivers State</option>
                                <option value="Sokoto State">Sokoto State</option>
                                <option value="Taraba State">Taraba State</option>
                                <option value="Yobe State">Yobe State</option>
                                <option value="Zamfara State">Zamfara State</option>

                            </select>
                        </div>

                        <select name="states" id="example" class="browser-default custom-select"  multiple="multiple" style="display: block;">
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option selected value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option selected value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
    </select>

                        <div class="container text-center">
                        
                        <div class="form-group">

                            <button class="btn btn-primary ">Submit</button>

                            </div>
                        </div>


                 
              </div>

            </form>
        </div>


      
      
    </div>
  </div>
@endsection

@push('js')
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();
    });
  </script>
@endpush