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
    <li><a class="dropdown-item" href="#">logout</a></li>
  
</div>
</header>

          <br>
          <br>
          <br>  
          <br>
          <br>
          <br>           
                       
                       <div class="container-fluid" class="mt-5">
                       
                       
                       
                       <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="/update/{{$appeals[0]->id}}" method="post">
                          @csrf
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="name" type="text" placeholder="Enter your name..."  value="{{$appeals[0]->name}}" data-sb-validations="required" />
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="email" type="email" placeholder="name@example.com" value="{{$appeals[0]->email}}" data-sb-validations="required,email" />
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <!-- Phone number input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" name="phone" type="tel" placeholder="(123) 456-7890" value="{{$appeals[0]->phone}}" data-sb-validations="required" />
                                <label for="phone">Phone number</label>
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>


                            <!-- blood input-->
                           
<div>
  <label>choose blood</label>
<select id="multipleSelect" multiple name="blood" placeholder="O+" data-search="false"  value="{{$appeals[0]->blood}}" data-silent-initial-value-set="true">
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
                                <textarea class="form-control" name="msg" type="text" placeholder="Enter your message here..."  value="{{$appeals[0]->msg}}" style="height: 10rem" data-sb-validations="required"></textarea>
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
                            <div class="d-grid"><button class="btn btn-primary rounded-pill btn-lg" id="submitButton" type="submit">Edit</button></div>
                        </form>
                    

                                    </div>