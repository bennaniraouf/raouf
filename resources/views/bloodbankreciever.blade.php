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
    <li><a class="dropdown-item" href="#">logout</a></li>
  
</div>
</header>

<section class="mt-3">
<table class="table">
  <thead class="table-dark">
  <tr>
      
      <th scope="col">blood</th>
      <th scope="col">O+</th>
      <th scope="col">O-</th>
      <th scope="col">A+</th>
      <th scope="col">A-</th>
      <th scope="col">B+</th>
      <th scope="col">B-</th>
      <th scope="col">AB+</th>
      <th scope="col">AB-</th>
    </tr>
  </thead>
  <tbody>
    
  <tr>
      
      <td>quantity</td>
      <td><div class="col-md-6 mb-4"><input type="number" step="1" max="50" min="0" value="0" name="message" class="quantity-field border-0 text-center w-50"></div></td>
      <td><div class="col-md-6 mb-4"><input type="number" step="1" max="50" min="0" value="0" name="message" class="quantity-field border-0 text-center w-50"></div></td>
      <td><div class="col-md-6 mb-4"><input type="number" step="1" max="50" min="0" value="0" name="message" class="quantity-field border-0 text-center w-50"></div></td>
      <td><div class="col-md-6 mb-4"><input type="number" step="1" max="50" min="0" value="0" name="message" class="quantity-field border-0 text-center w-50"></div></td>
      <td><div class="col-md-6 mb-4"><input type="number" step="1" max="50" min="0" value="0" name="message" class="quantity-field border-0 text-center w-50"></div></td>
      <td><div class="col-md-6 mb-4"><input type="number" step="1" max="50" min="0" value="0" name="message" class="quantity-field border-0 text-center w-50"></div></td>
      <td><div class="col-md-6 mb-4"><input type="number" step="1" max="50" min="0" value="0" name="message" class="quantity-field border-0 text-center w-50"></div></td>
      <td><div class="col-md-6 mb-4"><input type="number" step="1" max="50" min="0" value="0" name="message" class="quantity-field border-0 text-center w-50"></div></td>

      
    </tr>
    
  </tbody>
</table>
<br>
<a href="#" class="btn btn-success" >add</a>

<a href="#" class="btn btn-danger">Remove</a>
</section>