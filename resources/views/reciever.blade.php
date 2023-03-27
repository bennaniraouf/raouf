<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>bloodDonation</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  <!-- Favicons 
  <link href="{{URL::to('/')}}'import/assets/img/favicon.png" rel="icon">
  <link href="{{URL::to('/')}}import/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@300;500;600;700;800;900&display=swap');" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{URL::to('/')}}/import/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/import/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/import/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/import/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/import/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL::to('/')}}/import/assets/css/main.css" rel="stylesheet">
  <link href="{{URL::to('/')}}/import/assets/css/virtual-select.min.css" rel="stylesheet">

<!-- Template Main js File -->
<link href="{{URL::to('/')}}/import/assets/js/main.js">
<link href="{{URL::to('/')}}/import/assets/js/virtual-select.min.js">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="{{URL::to('/')}}/import/assets/img/logo.png" alt=""> -->
        <h1>BloodDonation<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/home">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/events">Events </a></li>
          <li class="dropdown"><a href="#"><span>more</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="/contact">Contact</a></li>
        </ul>

      </nav><!-- .navbar -->
      <div class="dropdown">
  <img  
  class="rounded-circle mt-3 dropdown-toggle" 
  role="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" 
  aria-expanded="false" 
  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
  style="border: 1px solid rgb(254,46,1);height :3rem; cursor : pointer;"/>
    

  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item active" href="#">profile</a></li>
    <li><a class="dropdown-item" href="#">settings</a></li>
    <li><a class="dropdown-item" href="#">history</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="#">logout</a></li>
    
</div>

</div>
</header>  
       
  <!-- End Header -->
 
  <section style="background-color: #eee;">
  <div class="container py-5">
    
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-4">
          <div class="card-body text-center">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
              class="rounded-circle img-fluid" style="width: 150px;">
            <h5 class="my-3">ain arnet Hospital</h5>
            <p class="text-muted mb-1">blood bank</p>
            <p class="text-muted mb-4">W14, AIN ARNAT, SETIF</p>
            <div class="d-flex justify-content-center mb-2">
              <a role="button" class="btn btn-primary" href="appeal">post an appeal</a>
              <a role="button" class="btn btn-outline-primary ms-1" href="#">blood request </a>
            </div>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body p-0">
            <ul class="list-group list-group-flush rounded-3">
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="bi bi-envelope-at-fill"></i>
                <p class="mb-0">https://mdbootstrap.com</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="bi bi-browser-chrome"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                <i class="bi bi-instagram"></i>
                <p class="mb-0">@mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="bi bi-facebook"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="bi bi-twitter"></i>
                <p class="mb-0">mdbootstrap</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">AIN ARNAT HOSPITAL</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">example@example.com</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Phone</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(097) 234-5678</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Mobile</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">(098) 765-4321</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0">W 14,AIN ARNAT,SETIF</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1"><u><a class="text-primary" data-bs-toggle="modal" href="#exampleModalToggle" >details</a></u></span> local blood bank
                </p>
                <p class="mb-1" style="font-size: .77rem;">O+</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">A-</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">AB+</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">B+</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">A+</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mb-4 mb-md-0">
              <div class="card-body">
                <p class="mb-4"><span class="text-primary font-italic me-1"><u><a class="text-primary" data-bs-toggle="modal" href="#1exampleModalToggle">  details</a></u></span> blood need
                </p>
                <p class="mb-1" style="font-size: .77rem;">B-</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">O-</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 72%" aria-valuenow="72"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">AB-</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 89%" aria-valuenow="89"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">B+</p>
                <div class="progress rounded" style="height: 5px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 55%" aria-valuenow="55"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mt-4 mb-1" style="font-size: .77rem;">B-</p>
                <div class="progress rounded mb-2" style="height: 5px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 66%" aria-valuenow="66"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <!--starting the model-->

<!-- Feedback Modal-->
<div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close btn-close-black" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="reciever" method="post">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>


                            <!-- blood input-->
                           
<div>
  <label>choose blood</label>
<select id="multipleSelect" multiple name="native-select" placeholder="O+" data-search="false" data-silent-initial-value-set="true">
  <option value="1" Selected>O+</option>
  <option value="2">O-</option>
  <option value="2">A+</option>
  <option value="2">A-</option>
  <option value="2">B+</option>
  <option value="2">B-</option>
  <option value="2">AB+</option>
  <option value="2">AB-</option>
  
</select>
</div><br>
<script type="text/javascript" src="{{URL::to('/')}}/import/assets/js/virtual-select.min.js"></script>
<script type="text/javascript">
VirtualSelect.init({ 
  ele: '#multipleSelect' 
});</script>

                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg" id="submitButton" type="submit">Send</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>





<!-- Feedback Modal-->
<div class="modal fade" id="feedbackModal2" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                        <button class="btn-close btn-close-black" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body border-0 p-4">
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- * * SB Forms Contact Form * *-->
                        <!-- * * * * * * * * * * * * * * *-->
                        <!-- This form is pre-integrated with SB Forms.-->
                        <!-- To make this form functional, sign up at-->
                        <!-- https://startbootstrap.com/solution/contact-forms-->
                        <!-- to get an API token!-->
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="reciever" method="post">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>


                            <!-- blood input-->
                           
<div>
  <label>choose blood</label>
<select id="multipleSelect" multiple name="native-select" placeholder="O+" data-search="false" data-silent-initial-value-set="true">
  <option value="1" Selected>O+</option>
  <option value="2">O-</option>
  <option value="2">A+</option>
  <option value="2">A-</option>
  <option value="2">B+</option>
  <option value="2">B-</option>
  <option value="2">AB+</option>
  <option value="2">AB-</option>
  
</select>
</div><br>
<script type="text/javascript" src="{{URL::to('/')}}/import/assets/js/virtual-select.min.js"></script>
<script type="text/javascript">
VirtualSelect.init({ 
  ele: '#multipleSelect' 
});</script>

                            <!-- Message input-->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                                <label for="message">specify the quantity</label>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                            <!-- Submit success message-->
                            <!---->
                            <!-- This is what your users will see when the form-->
                            <!-- has successfully submitted-->
                            <div class="d-none" id="submitSuccessMessage">
                                <div class="text-center mb-3">
                                    <div class="fw-bolder">Form submission successful!</div>
                                    To activate this form, sign up at
                                    <br />
                                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                </div>
                            </div>
                            <!-- Submit error message-->
                            <!---->
                            <!-- This is what your users will see when there is-->
                            <!-- an error submitting the form-->
                            <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                            <!-- Submit Button-->
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg" id="submitButton" type="submit">hi</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>







<!--only a try-->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">local blood bank details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         quantity remained of this blood group : 
        <p class="mb-1" style="font-size: .77rem;">O+</p>
                <div class="progress rounded" style="height: 20px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100">80%</div>
                </div><br>
                <h4><u>this month </u></h4>
                <table style="width:100%" >
                  <tr><th>blood bags received</th><th>blood bags used</th></tr>
                  <tr><td>105</td><td>25</td></tr>
                </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">other group</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">local blood bank details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      quantity remained of this blood group :
        <p class="mb-1" style="font-size: .77rem;">O-</p>
                <div class="progress rounded" style="height: 20px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 20%" aria-valuenow="20"
                    aria-valuemin="0" aria-valuemax="100">20%</div>
                </div><br>
                <h4><u>this month </u></h4>
                <table style="width:100%" >
                  <tr><th>blood bags received</th><th>blood bags used</th></tr>
                  <tr><td>5</td><td>30</td></tr>
                </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">other group</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">local blood bank details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      quantity remained of this blood group :
        <p class="mb-1" style="font-size: .77rem;">A+</p>
                <div class="progress rounded" style="height: 20px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 50%" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100">50%</div>
                </div><br>
                <h4><u>this month </u></h4>
                <table style="width:100%" >
                  <tr><th>blood bags received</th><th>blood bags used</th></tr>
                  <tr><td>15</td><td>3</td></tr>
                </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal">other group</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">local blood bank details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      quantity remained of this blood group :
        <p class="mb-1" style="font-size: .77rem;">A-</p>
                <div class="progress rounded" style="height: 20px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 10%" aria-valuenow="10"
                    aria-valuemin="0" aria-valuemax="100">10%</div>
                </div><br>
                <h4><u>this month </u></h4>
                <table style="width:100%" >
                  <tr><th>blood bags received</th><th>blood bags used</th></tr>
                  <tr><td>5</td><td>8</td></tr>
                </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#" data-bs-toggle="modal" data-bs-dismiss="modal">other group</button>
      </div>
    </div>
  </div>
</div>






<!--only a try2-->
<div class="modal fade" id="1exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">local blood bank details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         quantity remained of this blood group : 
        <p class="mb-1" style="font-size: .77rem;">O+</p>
                <div class="progress rounded" style="height: 20px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 80%" aria-valuenow="80"
                    aria-valuemin="0" aria-valuemax="100">80%</div>
                </div><br>
                <h4><u>this month </u></h4>
                <table style="width:100%" >
                  <tr><th>blood bags received</th><th>blood bags used</th></tr>
                  <tr><td>105</td><td>25</td></tr>
                </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">other group</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">local blood bank details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      quantity remained of this blood group :
        <p class="mb-1" style="font-size: .77rem;">O-</p>
                <div class="progress rounded" style="height: 20px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 20%" aria-valuenow="20"
                    aria-valuemin="0" aria-valuemax="100">20%</div>
                </div><br>
                <h4><u>this month </u></h4>
                <table style="width:100%" >
                  <tr><th>blood bags received</th><th>blood bags used</th></tr>
                  <tr><td>5</td><td>30</td></tr>
                </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">other group</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">local blood bank details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      quantity remained of this blood group :
        <p class="mb-1" style="font-size: .77rem;">A+</p>
                <div class="progress rounded" style="height: 20px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 50%" aria-valuenow="50"
                    aria-valuemin="0" aria-valuemax="100">50%</div>
                </div><br>
                <h4><u>this month </u></h4>
                <table style="width:100%" >
                  <tr><th>blood bags received</th><th>blood bags used</th></tr>
                  <tr><td>15</td><td>3</td></tr>
                </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal">other group</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">local blood bank details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      quantity remained of this blood group :
        <p class="mb-1" style="font-size: .77rem;">A-</p>
                <div class="progress rounded" style="height: 20px;">
                  <div class="progress-bar bg-danger " role="progressbar" style="width: 10%" aria-valuenow="10"
                    aria-valuemin="0" aria-valuemax="100">10%</div>
                </div><br>
                <h4><u>this month </u></h4>
                <table style="width:100%" >
                  <tr><th>blood bags received</th><th>blood bags used</th></tr>
                  <tr><td>5</td><td>8</td></tr>
                </table>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#" data-bs-toggle="modal" data-bs-dismiss="modal">other group</button>
      </div>
    </div>
  </div>
</div>







        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{URL::to('/')}}/import/assets/js/main.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


</section>




