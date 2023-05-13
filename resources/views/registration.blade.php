<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<section class="h-100 ">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col">
        <div class="card card-registration my-4">
          <div class="row g-0">
            <div class="col-xl-6 d-none d-xl-block">
              <img src="{{URL::to('/')}}/import/assets/img/login.jpg"
                alt="Sample photo" class="img-fluid"
                style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
            </div>
            <div class="col-xl-6">
              <div class="card-body p-md-5 text-black">
                <form action="registration" method="POST">
                @csrf
                  <h3 class="mb-5 text-capitalize">blood donation registration</h3>

                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m" name="familyname" class="form-control form-control-lg" placeholder="family name" />
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1m" name="lastname" class="form-control form-control-lg" placeholder="last name" />
                      </div>
                    </div><div class="form-outline mb-4">
                    <input type="text" id="form3Example8" name="adress" class="form-control form-control-lg" placeholder="Adress" />
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="number" id="form3Example1n" name="age" class="form-control form-control-lg" placeholder="your age"/>
                    </div>
                    
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example1n" name="phonenumber" class="form-control form-control-lg" placeholder="phone number"/>
                    </div>
                    
                  </div>
                </div>

                  

                  <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                    <h6 class="mb-0 me-4">Gender: </h6>

                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="gender" id="femaleGender"
                        value="female" />
                      <label class="form-check-label" for="femaleGender">Female</label>
                    </div>

                    <div class="form-check form-check-inline mb-0 me-4">
                      <input class="form-check-input" type="radio" name="gender" id="maleGender"
                        value="male" />
                      <label class="form-check-label" for="maleGender">Male</label>
                    </div>

                </div>

                
                <div class="form-outline mb-4">
                  <input type="text" id="form3Example97" name="email" class="form-control form-control-lg" placeholder="Email"/>
                </div>
                <div class="form-outline mb-4">
                  <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password"/>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="password" class="form-control form-control-lg" placeholder="Confirmation"/>
                </div>
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <label for="">Blood Type</label>
                    <select name="bloodtype" class="select">
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="O">O</option>
                      <option value="AB">AB</option>
                    </select>

                  </div>
                  <div class="col-md-6 mb-4">
                    <label  for="">Rh</label>
                    <select name="Rh" class="select">
                      <option value="+">+</option>
                      <option value="-">-</option>
                    </select>
                    
                </div>
                <div class="col-md-6 mb-4">
                    <label for="">Chronic Disease</label>
                    <select name="disease" class="select">
                      <option value="yes">yes</option>
                      <option value="no">no</option>
                    </select>
                  </div>

                <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                </div>
                <a href="login" class="small text-muted">already registred</a>
              </div>
            </div>
          </div>
          
                </form>
                
        </div>
      </div>
    </div>
  </div>
</section>
<style>
    .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }
        .card-registration .select-arrow {
            top: 13px;
        }
        .container {
            max-height: 40rem;
        }
        .btn-warning{
          --bs-btn-color: #f8f9fa;
          --bs-btn-bg: #b02a37; 
          --bs-btn-bg-border:none;
          --bs-btn-hover-color: #f8f9fa;
          --bs-btn-hover-bg: #0074c7;
          --bs-btn-focus-shadow-rgb: 217,164,6;
          --bs-btn-active-color: #f8f9fa;
          --bs-btn-active-bg: #ffcd39;
          --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
          --bs-btn-disabled-color: #f8f9fa;
          --bs-btn-disabled-bg: #ffc107;
        }
        .form-check-input:checked {
          background-color: #c10000;
          border-color: #c10000;
        }
        select {
          width: 3rem;
        }
</style>