
 <?php 


  $pdo = new PDO("mysql:host=Localhost;dbname=laravel", "root", "");
  if (!$pdo) {
      die("Connection failed: " . mysqli_connect_error());
  }
  echo "Connected successfully";

if(isset($_Post["submit"])){
  $str=$_Post["inp"];
  $sth=$pdo->prepare("Select * FROM `inp` WHERE name='$str' ");
  $sth->setFetchMode(PDO::FETCH_OBJ);
  $sth->execute();
  if($row=$sth->fetch()){
    ?>
    <br><br><br>
    <table>
<tr>
  <th>Name</th>
  </tr>
  <tr>
    <td>
    <?php echo $row->name; ?> 
    
    </td>
  </tr>
  </table>
  <?php
  }
 
  else{
    echo "name does not exist";
  }

}
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Agency Tour</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset("web/css/bootstrap.min.css")}}">

  <link rel="stylesheet" href="{{asset("web/css/test.css")}}">
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






  <div id="background1 ">
    <!-- <img id="bigImg"
      src="https://images.unsplash.com/photo-1504972516657-526efa0347c9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTYyfHx3aW50ZXJ8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=600&q=60"> -->


    <div class="container-fluid px-0 position-relative test d-flex justify-content-center align-items-center">
      <div>
        <div id="animacion">
          <img id="anime" src="{{asset("web/images/Blue_Snowflake_PNG_Transparent_Clipart.png")}}">
        </div>
        <div id="titulli">
          <h1><span id="span">Winter</span><br>is comming soon...</h1>
        </div>
        <div id="animacion1">
          <img id="anime1" src="{{asset("web/images/Blue_Snowflake_PNG_Transparent_Clipart.png")}}">
        </div>
        <div id="searchtab">
          <div class="input-group rounded ">
            <form id="form1f" action="{{ route('tours') }}" method="get">
            <input type="text" name="inp" class="form-control" placeholder="  Search your favourite destination..."
              aria-label="Search" aria-describedby="search-addon" />
             <input type="submit" name="submit">
            <span class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search "></i>
            </span>
</form>
          </div>
        </div>
      </div>


    </div>


    
  </div>
  <img id="bora" src="{{asset("web/images/Snow-Falling-PNG.png")}}">
  <div class="container text-center my-5 ">
    <div class="row ">
      <div class="col-12 col-md-4">
        <div class="card h-100  ">
          <img
            src="https://finland.nordicvisitor.com/images/1/finland/winter-at-helsinki-city-hall.jpg"
            class="card-img-top h-50" alt="package tours image">
          <div class="card-body">
            <h5 class="card-title">Highlights of Baltics & Scandinavia<br></h5>
            <p class="card-text">
            2024 May/Jun/Jul/Aug/Sep<br>
              12 days trip<br>
              Price:$2,595 pp 
                  </p>
<a href="{{ route('contact') }}" class="btn btn-primary"><i class="fa-solid fa-phone" style="color: #ffffff;"></i>Contact us!</a> 
             <a href="{{ route('tours') }}"class="btn btn-primary"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>More Packages...</a> 
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card h-100 ">
          <img
            src="https://www.nordicvisitor.com/images/iceland/winter/gullfoss-snow-winter.jpg"
            class="card-img-top h-50 " alt="package tours image">
          <div class="card-body">
            <h5 class="card-title">ICELAND - WINTER</h5>
            <p class="card-text"> 2023 NOV/DEC<br>
              5 days trip<br>
              Price:$995 pp </p>
<a href="{{ route('contact') }}" class="btn btn-primary"><i class="fa-solid fa-phone" style="color: #ffffff;"></i>Contact us!</a> 
             <a href="{{ route('tours') }}"class="btn btn-primary"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>More Packages...</a> 
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card h-100  ">
          <img
            src="https://uk.nordicvisitor.com/images/1/uk/england/york.jpg"
            class="card-img-top h-50" alt="package tours image">
          <div class="card-body">
            <h5 class="card-title">WONDERS OF BRITAIN</h5>
            <p class="card-text">
            2024 May/Jun/Jul/Aug/Sep<br>
            2023 DEC<br>
              4 days trip<br>
              Price:$795 pp </p>
             <a href="{{ route('contact') }}" class="btn btn-primary"><i class="fa-solid fa-phone" style="color: #ffffff;"></i>Contact us!</a> 
             <a href="{{ route('tours') }}"class="btn btn-primary"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>More Packages...</a>
          </div>
        </div>
      </div>
      <div class="row ">
      <div class="col-12 col-md-4">
        <div class="card h-100  ">
          <img
            src="https://denmark.nordicvisitor.com/images/1/norway/norway-cruise-ship-fjord-winter.jpg"
            class="card-img-top h-50" alt="package tours image">
          <div class="card-body">
            <h5 class="card-title">WELCOME TO SCANDINAVIA!<br></h5>
            <p class="card-text">
            2024 May/Jun/Jul/<br>
              14 days trip<br>
              Price:$4,795 pp 
</p>
            <a href="{{ route('contact') }}" class="btn btn-primary"><i class="fa-solid fa-phone" style="color: #ffffff;"></i>Contact us!</a> 
             <a href="{{ route('tours') }}"class="btn btn-primary"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>More Packages...</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card h-100 ">
          <img
            src="https://lapland.nordicvisitor.com/images/1/aurora-sky-station-lapland.jpg"
            class="card-img-top h-50 " alt="package tours image">
          <div class="card-body">
            <h5 class="card-title">LAPLAND ADVENTURE</h5>
            <p class="card-text"></h5>
            <p class="card-text"> 2024 Mar/Apr/May/Sep<br>
              2023 DEC<br>
              12 days trip<br>
              Price:$2,795 pp </p>
            <a href="{{ route('contact') }}" class="btn btn-primary"><i class="fa-solid fa-phone" style="color: #ffffff;"></i>Contact us!</a> 
             <a href="{{ route('tours') }}"class="btn btn-primary"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>More Packages...</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="card h-100  ">
          <img
            src="https://switzerland.nordicvisitor.com/images/switzerland/interlaken.jpg"
            class="card-img-top h-50" alt="package tours image">
          <div class="card-body">
            <h5 class="card-title">SPEND A WEEK ENJOYING SWISS HIGHLIGHTS</h5>
            <p class="card-text">
            2024 Mar/Apr/May/Sep<br>
              2023 Nov/Dec<br>
              6 days trip<br>
              Price:$715 pp</p>
            <a href="{{ route('contact') }}" class="btn btn-primary"><i class="fa-solid fa-phone" style="color: #ffffff;"></i>Contact us!</a> 
             <a href="{{ route('tours') }}"class="btn btn-primary"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>More Packages...</a> 
          </div>
        </div>
      </div>
      </div>


      <div class="col-12 my-5">
        <h1 style="color: white;font-size: 40px;border: 5px solid white;">Testimonial</h1>
        <div id="carouselExampleAutoplaying" class="carousel slide my-5" data-bs-ride="carousel">
          <div class="carousel-inner mx-auto">
            <div class="carousel-item active">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="https://t4.ftcdn.net/jpg/05/61/84/75/360_F_561847558_q59KaY4ILLrwWaqBZDIVgam06qMzncet.jpg" class="d-block w-100" alt="...">  class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Emma Weston</h5>
                      <p class="card-text"> I enjoyed the scenery as we went along roads that the larger tour buses could not go. They also accurately worked in the timing to miss the large tours at the sites. I had several of the best meals. Save your time and effort and hire Nordic Visitor to plan your tour...</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 1 mins ago</small></p>
                    </div>
                  </div>
                </div>
                
              </div>


            </div>
            <div class="carousel-item">
              <!-- <img src="Blue_Snowflake_PNG_Transparent_Clipart.png" -->
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxhFJtXrm3RGpElraGPqYDTam5LYSrvVw0Gw&usqp=CAU" class="d-block w-100" alt="...">  class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Carlos Kemer</h5>
                      <p class="card-text">Everything went so smoothly, from pick-up at the airport to getting the rental car to checking into the accommodation. Planning with Rebecca & the Edinburgh team was easy. We were also extremely grateful. Thank you all!</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <!-- <img src="Blue_Snowflake_PNG_Transparent_Clipart.png" -->
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQulSYn7Cld28UVwuaEVHkgS7Nz9zDChYx3y9Ql09h_-mYerQHKMHjJsqVRBL-D8cw4KfU&usqp=CAU" class="d-block w-100" alt="...">  class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Jim Jimmy</h5>
                      <p class="card-text">Our agent, Agne, did a wonderful job dealing with us. All questions were answered and her trip planning resulted in one of our most enjoyable and worry free travel experiences. Thank you all!</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 10 mins ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <!-- <img src="Blue_Snowflake_PNG_Transparent_Clipart.png" -->
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-091G7iaeWNhfCxVsFB2mXV6OYfjhf-59jg&usqp=CAU" class="d-block w-100" alt="...">  class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Carla Simonee</h5>
                      <p class="card-text">Our entire trip included two weeks in Scotland and two weeks in Europe. It was so well organised and every little detail was covered so we could relax and enjoy our holiday without any concerns. I am really really impressed and would recommend your company without hesitation!</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 1 hour ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR_1bpO0XDD8fbmRvnbnkCoQNFFoH3AqofVTg&usqp=CAU" class="d-block w-100" alt="...">  class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">Lisa Alisson</h5>
                      <p class="card-text">This tour was a positive experience for us, beginning to end. The planning by Nordic Visitor was complete, thoughtful, and worked flawlessly. Scotland was stunning and most interesting - we just wish we had more time. To Nordic Visitor: Great Job! We'll be back!</p>
                      <p class="card-text"><small class="text-body-secondary">Last updated 5 hours ago</small></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

      <h1 style="color: white;font-size: 40px;border: 5px solid white;">Popular countries</h1>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="countries" data-aos="fade-down">
          <img
            src="https://www.vacationstravel.com/wp-content/uploads/2022/06/The-Glacier-Express-%C2%A9-Tobias-Ryser-Switzerland.jpg"
            class="img-fluid">
          <div class="card-body">
            <p class="card-text" style="font-size: 26px;">SWITZERLAND</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-3">
        <div class="countries" data-aos="fade-right">
          <img
            src="data:image/jpeg;base64,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"
            class="img-fluid">
          <div class="card-body">
            <p class="card-text" style="font-size: 30px;">NORWAY</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="countries" data-aos="fade-left">
          <img
            src="data:image/jpeg;base64,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"
            class="img-fluid">
          <div class="card-body">
            <p class="card-text" style="font-size: 30px;">ICELAND</p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="countries" data-aos="fade-up">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQewkoYV0cJVzLEP4I4LQJyaypvsEu7EY4FJw&usqp=CAU"
            class="img-fluid">
          <div class="card-body">
            <p class="card-text" style="font-size: 30px;">SWEDEN</p>
          </div>
        </div>
      </div>

    </div>
   
  </div>

  <!-- Footer -->
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


  <script src="{{asset("web/js12/bootstrap.bundle.min.js")}}"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script href="{{asset("web/js12/mainjs.js")}}"></script>
  <script>
    AOS.init();
  </script>

</body>

</html>

