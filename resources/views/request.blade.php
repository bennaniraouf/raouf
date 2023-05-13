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

<!--css file increment input -->
<link href="{{URL::to('/')}}/import/assets/css/increment.css" rel="stylesheet">




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
      <div class="dropdown ">
  <img  
  class="rounded-circle mt-3 dropdown-toggle" 
  role="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" 
  aria-expanded="false" 
  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
  style="border: 1px solid rgb(254,46,1);height :3rem; cursor : pointer;"/>
    

  <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item active" href="#">profile</a></li>
    <li><a class="dropdown-item" href="settings">settings</a></li>
    <li><a class="dropdown-item" href="#">history</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" href="/logout">logout</a></li>
  
</div>
</header>
<div class="mt-5 p-5">  
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#requestModal">send request</button>
</div>

 <!--starting the model-->

<!-- Feedback Modal-->
<div class="modal fade" id="requestModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header bg-gradient-primary-to-secondary p-4">
                        <h5 class="modal-title font-alt text-primary"  id="feedbackModalLabel">Send a request</h5>
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
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="request" method="post">
                          @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="name1" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email1" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="phone1" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>


                            <!-- blood input-->
                            <div class="input-group mb-3">
  <span class="input-group-text" >blood/number of bags</span>
  <input type="text" name="input1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" >blood/number of bags</span>
  <input type="text" name="input2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<div class="input-group mb-3">
  <span class="input-group-text" >blood/number of bags</span>
  <input type="text" name="input3" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>
<br>
<!-- end blood input-->
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



        <table class="table">
  <thead class="table-dark">
  <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">email</th>
      <th scope="col">phone</th>
      <th scope="col">blood 1</th>
      <th scope="col">blood 2</th>
      <th scope="col">blood 3</th>
      <th scope="col">status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($demandes as $r)
  <tr>
      <th scope="r">{{$r->id}}</th>
      <td>{{$r->name}}</td>
      <td>{{$r->email}}</td>
      <td>{{$r->phone}}</td>
      <td>{{$r->blood1}}</td>
      <td>{{$r->blood2}}</td>
      <td> {{$r->blood3}}</td>
      <td>status</td>
      
    </tr>
    @endforeach
  </tbody>
</table>