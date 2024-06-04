<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset("t12/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("t12/css/t122.css")}}">
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
             <a class="nav-link" href="{{ route('contact') }}"><i class="fa-solid fa-phone" style="color: #b90404;"></i>Contact</a>
            </li>

            <li class="nav-item" style="border: 5px solid rgb(212, 204, 204);background-color: rgb(212, 204, 204);">
              <a class="nav-link" href="{{ route('booking') }}"><i class="fa-solid fa-calendar-days" style="color: #8a0000;"></i> Booking</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </header>


<h1 >Explore All Tours</h1>
<br>
<br>

<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSshMo_gxVHSLhBzvObS3nRgKnRtJ8tlqkHXA&usqp=CAU">
    <div class="card-body">
      <h5 class="card-title">Anchorage & Talkeetna Northern Lights Getaway</h5>
      <p class="card-text">Available<br>
      2023 Nov/Dec <br>
      2024 Jan/Feb/Mar/Dec<br>
      Price:$1,480 pp
</p>
    </div>
    <a href="{{ route('booking') }}"class="btn btn-primary">Reserve now!!!</a> 
    <div class="card-footer">
      <small class="text-muted">Last updated 1 hour ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="data:image/jpeg;base64,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" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Classic Coast to Coast by Rail</h5>
      <p class="card-text">Available<br>
    2023 Nov/Dec<br>
    2024 Jan/Feb/Mar/Apr/May<br>

     Price: $707 pp</p>
    </div>
    <a href="{{ route('booking') }}" class="btn btn-primary">Reserve now!!!</a> 
    <div class="card-footer">
      <small class="text-muted">Last updated 1 day ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvn8g3fe4PjgEUWbrPyxMXYEpEZTMzxfLu_w&usqp=CAU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Best of London & Paris by Rail</h5>
      <p class="card-text">Available<br>
    2024 Jun/Aug/Sep<br>
   8 days trip<br>
Price: $2,395pp</p>
    </div>
    <a href="{{ route('booking') }}" class="btn btn-primary">Reserve now!!!</a> 
    <div class="card-footer">
      <small class="text-muted">Last updated 3 days ago</small>
    </div>
  </div>
</div>
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxlXc3-6L3Pnt2ApSDQx7OvM6gMLjiWyROrbPbgp-aJb5eYHTBduTL5sZe_2ooty9w_6Q&usqp=CAU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <a href="{{ route('booking') }}" class="btn btn-primary">Reserve now!!!</a> 
    <div class="card-footer">
      <small class="text-muted">Last updated 10 days ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtr9Hvr5noxRdMgz0ojaCbQmL6HJRnKIp5kg&usqp=CAU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <a href="{{ route('booking') }}" class="btn btn-primary">Reserve now!!!</a> 
    <div class="card-footer">
      <small class="text-muted">Last updated 13 days ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYmzFJ0_3mOVVzkiRwORhJoGZtyYAr-rQQpg&usqp=CAU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <a href="{{ route('booking') }}" class="btn btn-primary">Reserve now!!!</a> 
    <div class="card-footer">
      <small class="text-muted">Last updated 2 weeks ago</small>
    </div>
  </div>
</div>
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6KGbZhMTnfjIm7OMjcPY-9kaYaWf341Ul8A&usqp=CAU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title"> Northern Lights & Alaska Highlights</h5>
      <p class="card-text">Available<br>
      2023 Dec<br>
      2024 Jan/Feb/Mar/Dec<br>
      $2,019 pp</p>
    </div>
    <a href="{{ route('booking') }}" class="btn btn-primary">Reserve now!!!</a> 
    <div class="card-footer">
      <small class="text-muted">Last updated 16 days ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYYH2VB3JcAUqoab_PHUl8Gg9lHhPii6yTRQ&usqp=CAU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Grand Tour of the UK</h5>
      <p class="card-text">Available<br>

        2024 Apr/Jun/Sep<br>
       13 days trip<br>
       Price:From $3,920 pp TO $3,720 pp !!!</p>
    </div>
    <a href="{{ route('booking') }}" class="btn btn-primary">Reserve now!!!</a> 
    <div class="card-footer">
      <small class="text-muted">Last updated 3 weeks ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2B1b1yBzlX0In94T6pRrRp4ax5SUwDIDgxw&usqp=CAU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Aurora Viewing at Chena Hot Springs</h5>
      <p class="card-text"> Available<br>
        2023 Dec<br>
        2024 Jan/Feb/Mar<br>
        Price: $1,906 pp</p>
    </div>
    <a href="{{ route('booking') }}" class="btn btn-primary">Reserve now!!!</a> 
    <div class="card-footer">
      <small class="text-muted">Last updated 3 weeks ago</small>
    </div>
  </div>
</div>
<div class="card-group">
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPIZpsc5RhQ92IcucgqzOmI39S1qY0WYHFZw&usqp=CAU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <a href="{{ route('booking') }}" class="btn btn-primary">Reserve now!!!</a> 
    <div class="card-footer">
      <small class="text-muted">Last updated 2 months ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV1nK2SVru6ikVqWXjGl7ZyTG2EIaxGE_vMmMpNfFkCVFErq8xRwFfkKLI6bx0MEfmfAo&usqp=CAU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <a href="{{ route('booking') }}" class="btn btn-primary">Reserve now!!!</a> 
    <div class="card-footer">
      <small class="text-muted">Last updated 2 months ago</small>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrudvyQ-OryWUl3Sb9PP3ykmGPS_6ycwrFmHVP_Q9iHjm3MCch__ChUhE0lVbxqykuTbk&usqp=CAU" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <a href="{{ route('booking') }}" class="btn btn-primary">Reserve now!!!</a> 
    <div class="card-footer">
      <small class="text-muted">Last updated 3 months ago</small>
    </div>
  </div>
</div>
<footer class="bg-dark text-center text-white">
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

<script src="{{asset("t12/js12/bootstrap.bundle.min.js")}}"></script>
</body>
</html>