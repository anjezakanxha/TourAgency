<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Page</title>
    <link rel="stylesheet" href="{{asset("booking/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("booking/booking.css")}}">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-light ">
          <div class="container-fluid mb-2 "
            style="background-color: rgb(60, 125, 168);background-image:linear-gradient(rgb(23, 107, 171),white);box-shadow: 10px 10px 10px rgb(23, 107, 171);">
            <a class="navbar-brand " href="/"><i class="fa-solid fa-globe" style="color: #b90404; margin-left: 30px;"></i>
              Tours</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto text-center mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{ route('about') }}"><i class="fa-solid fa-circle-info"
                      style="color: #990505;"></i> About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('contact') }}"><i class="fa-solid fa-phone" style="color: #b90404;"></i> Contact</a>
                </li>
    
                <li class="nav-item" style="border: 5px solid rgb(212, 204, 204);background-color: rgb(212, 204, 204);">
                  <a class="nav-link" href="{{ route('booking') }}"><i class="fa-solid fa-calendar-days" style="color: #8a0000;"></i> Booking</a>
                </li>
              </ul>
    
            </div>
          </div>
        </nav>
      </header>

    <div class="hero">
        <video autoplay loop muted plays-inline class="BackVideo">
            <source src="{{asset("booking/video/cabin_-_98979 (1080p).mp4")}}" type="video/mp4">
        </video>
        <h1><i class="fa-solid fa-plane fa-bounce" style="color: #000000;"></i> Book now!!!</h1>

        <form  id="orderForm">
            <!-- action="file.html"  -->
            <div>
                <i class="fa-solid fa-user fa-fade" style="color: #000000;"></i> <label>Full Name</label>
                <input type="text">
                <span id="fullNameSpn"></span>
            </div>
            <div>
                <i class="fa-regular fa-envelope" style="color: #000000;"></i>  <label>Email Address</label>
                <input type="email">
                <span id="emailSpn"></span>
               
            </div>
            <div>
                <i class="fa-solid fa-location-dot fa-fade" style="color: #000000;"></i> <label>Selet Tour Package*:</label>
                <select name="packets" id="packets">
                    <option value="SWEDEN">Sweden</option>
                    <option value="NORWAY">Norway</option>
                    <option value="SWITZERLAND">Switzerland</option>
                    <option value="FINLAND">Finland</option>
                    <option value="ICELAND">Iceland</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="London">London</option>

                </select>
            </div>
            <div>
                <i class="fa-regular fa-calendar-days fa-fade" style="color: #000000;"></i> <label>Arrival Date</label>
                <input type="date">
            </div>
            <!-- <div>
                <i class="fa-solid fa-check fa-fade" style="color: #000000; margin-right: 5px;"></i>
                <label>Number of persons*:</label>
               
            <input type="number">
            <span id="descriptionSpn"></span>
            </div> -->
<div> <label>Way of Transport</label><br>
            <input type="checkbox">
            <label>Roadways</label><br>
            <input type="checkbox">
            <label>AirWays</label><br>
            <input type="checkbox">
            <label>Waterways</label><br>
        </div>
          <div><i class="fa-solid fa-arrow-right fa-fade" style="color: #000000;"></i>
                <label>Terms and Conditions*</label><br>
                <input name="abc" type="radio">
                <label>I agree</label><br>
                <input name="abc" type="radio">
                <label>i dissagree</label><br>
            </div>
            <div>
            <input id="butoni" type="submit" value="Complete Reservation">
        </div>

        </form>
        </div>
    <!-- Footer -->
 <footer class="bg-dark text-center text-white w-100">
    <!-- Grid container -->
    <div class="container p-4">
    
        <section class="footeri">
        <!--Grid row-->
        <div class="row">
   <!-- Section: Form -->
   <section class="">
    <form action="">
      <!--Grid row-->
      <div class="row d-flex justify-content-center">
        <!--Grid column-->
        <div class="col-auto">
          <p class="pt-2 ">
            <strong>Sign up for our newsletter</strong>
          </p>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-md-5 col-12">
          <!-- Email input -->
          <div class="form-outline form-white mb-4">
            <input type="email" id="form5Example21" class="form-control" />
            <label class="form-label" for="form5Example21">Email address</label>
          </div>
        </div>
        <!--Grid column-->
  
        <!--Grid column-->
        <div class="col-auto">
          <!-- Submit button -->
          <button type="submit" class="btn btn-outline-light mb-4">
            Subscribe
          </button>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </form>
  </section>
  <!-- Section: Form -->
  
  
    
      <!-- Section: Links -->
  <!--Grid column-->
  <div class="col-lg-3 col-md-6 col-sm-4 col-xs-1 mb-4 mb-md-0 ">
    <h5 class="text-uppercase">Links</h5>
  
    <ul class="list-unstyled mb-0">
      <li>
        <a href="file:///C:/Users/User/Desktop/prjktmbrojtje/test.html" class="text-white">Home Tours</a>
      </li>
      <li>
        <a href="file:///C:/Users/User/Desktop/prjktmbrojtje/aboutfolder/about.html" class="text-white">About us</a>
      </li>
      <li>
        <a href="file:///C:/Users/User/Desktop/prjktmbrojtje/contactfolder/contact.html" class="text-white">Contact</a>
      </li>
      <li>
        <a href="#!" class="text-white">Booking</a>
      </li>
    </ul>
  </div>
          <!-- Section: Social media -->
      <section class="mb-4">
        <!-- Facebook -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-facebook-f"></i
        ></a>
  
        <!-- Twitter -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-twitter"></i
        ></a>
  
        <!-- Google -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-google"></i
        ></a>
  
        <!-- Instagram -->
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-instagram"></i></a>
  
        <!-- Linkedin
        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-linkedin-in"></i
        ></a> -->
  
        <!-- Github -->
        <!-- <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
          ><i class="fab fa-github"></i -->
        <!-- ></a> -->
      </section>
      <!-- Section: Social media -->
  
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->
  
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
     All Over the World.© 2023|All Rights Reserved.
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
  

    <script src="{{asset("booking/bootstrap.bundle.min.js")}}"></script>
    <script src="orders.js"></script>
</body>

</html>