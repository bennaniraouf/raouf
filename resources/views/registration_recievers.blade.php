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
              <form action="registration_recievers" method="post">
              @csrf
                  <h3 class="mb-5 text-capitalize">blood donation registration for recievers</h3>
                        <!-- Form Group (username)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputUsername">organization name (in case of being an establisheemnt)</label>
                            <input class="form-control" name="companyname" id="inputUsername" type="text" placeholder="Enter your company name" >
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (first name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputFirstName">name (doctor or laboratory)</label>
                                <input class="form-control" name="firstname" id="inputFirstName" type="text" placeholder="Enter your first name" >
                            </div>
                            <!-- Form Group (last name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLastName">health certification number</label>
                                <input class="form-control" name="lastname" id="inputLastName" type="text" placeholder="Enter your certification number" >
                            </div>
                        </div>
                        <!-- Form Row        -->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (organization name)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputOrgName">password</label>
                                <input class="form-control" name="password" id="inputpassword" type="password"  >
                            </div>
                            <!-- Form Group (location)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputLocation">confirm password</label>
                                <input class="form-control" name="passwordconfirm" id="inputpasswordconf" type="password" >
                            </div>
                        </div>
                        <!-- Form Group (email address)-->
                        <div class="mb-3">
                            <label class="small mb-1" for="inputEmailAddress">Email address</label>
                            <input class="form-control" name="email" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                        </div>
                        <!-- Form Row-->
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (phone number)-->
                            <div class="col-md-6">
                                <label class="small mb-1" for="inputPhone">Phone number</label>
                                <input class="form-control" name="phonenumber" id="inputPhone" type="tel" placeholder="Enter your phone number" value="06-603-456-77">
                            </div>
                            
                        </div>
                        <!-- Save changes button-->
                        <div class="d-flex justify-content-end pt-3">
                  <button type="button" class="btn btn-light btn-lg">Reset all</button>
                  <button type="submit" class="btn btn-warning btn-lg ms-2">Submit form</button>
                </div>
                    </form>
                    <a href="reciever_login" class="small text-muted">already registred click here to login</a>
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