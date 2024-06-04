<?php
// Kontrolloni nëse kërkesa është e POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Merrni të dhënat nga forma e kontaktit
    $name = $_POST["name"];
    $sname = $_POST["sname"];
    $email = $_POST["e"];
    $tekst = $_POST["mesazhi"]; 

    // Lidhuni me bazën e të dhënave (përshtaseni me informacionin e lidhjes së vërtetë)
    $dbServer = "Localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "laravel";

    $conn = new mysqli("$Localhost", "$root", "$" , "$laravel");

    // Kontrolloni lidhjen
    if ($conn->connect_error) {
        die("Lidhja me bazën e të dhënave dështoi: " . $conn->connect_error);
    }

    // Përgatitni deklaratën SQL për të vendosur të dhënat në bazën e të dhënave
    $sql = "INSERT INTO contact_requests (name, sname, email, tekst) VALUES (?, ?, ?, ?)";

    // Përgatitni deklaratën SQL
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Përgatitja e deklaratës dështoi: " . $conn->error);
    }

    // Vendosni parametrat
    $stmt->bind_param("ssss", $name, $sname, $email, $tekst);

    // Ekzekutoni deklaratën SQL
    if ($stmt->execute() === true) {
        // Të dhënat janë ruajtur me sukses në bazën e të dhënave
        echo "Të dhënat janë ruajtur me sukses!";
    } else {
        // Gabimi në ruajtjen e të dhënave
        echo "Gabim gjatë ruajtjes së të dhënave: " . $stmt->error;
    }

    // Mbylleni lidhjen me bazën e të dhënave
    $stmt->close();
    $conn->close();
} else {
    // Nëse kërkesa nuk është POST, ju mund të bëni një ndryshim të përshtatshëm këtu
    echo "Kërkesa nuk është POST";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="{{asset("contact12/bootstrap.min.css")}}">
        <link rel="stylesheet" href="{{asset("contact12/contact.css")}}">
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
  <div id="all">
      <div id="img">

          <img src="https://st2.depositphotos.com/1265075/7365/i/450/depositphotos_73656201-stock-photo-web-contact-us-icons-cubes.jpg"
              alt="fotoKontakti">
          <h1 id="titul1">Get in touch!</h1>
      </div>
      <br>
      <br>


      <div id="part2">
          <div id="form">
            <h3>Client?</h3>
            <i class="fa-solid fa-user" style="color:brown;"></i><a id="log" href="{{ route('login') }}">Login</a><br><br><br>
           <h3>First time here?</h3>
           <i class="fa-solid fa-user" style="color:brown;"></i><a id="reg" href="{{ route('register') }}"> REGISTER for discounts<i class="fa-solid fa-tag" style="color: brown;"></i> </a>
          
              <!-- <form  method="post" action="prov.php">
                  <div>
                      <label for="name"><i class="fa-solid fa-user" style="color:gray;"></i>Enter Name:</label>
                      <input type="text" name="name" id="name" placeholder="Name*" required>
                  </div>
                  <div>
                      <label for="sname"><i class="fa-solid fa-user" style="color: gray"></i>Enter
                          Surname:</label>
                      <input type="text" name="sname" id="sname" placeholder="Surname*" required>
                  </div>
                  <div>
                      <label for="e"><i class="fa-solid fa-envelope" style="color: gray;"></i>Enter Email:</label>
                      <input type="email" name="e" id="e" placeholder="Email*" required>
                  </div>
                  <div>
                      <label for="mesazh"><i class="fa-regular fa-message" style="color: gray;"></i>Leave
                          Message:</label>
                      <input type="text" name="mesazh" id="mesazh" placeholder="Type here...">
                  </div>
                  <div>
                      <button class="buton" type="sumbit" value="Enquire Now" onclick="buttonsub(), event.preventDefault();">Enquire Now</button>
                  </div> -->
              </form>
          </div> 



          <div id="other">
              <p>
                  Other ways:
              </p>
              <ul>
                  <li><i class="fa-solid fa-phone" style="color: #51361f;"></i>02 9050 1112</li>
                  <li><i class="fa-solid fa-phone" style="color: #51361f;"></i>02 9570 3025</li>
                  <li><i class="fa-brands fa-google" style="color: #b6652f;"></i>info@stwinsspares.com</li>
                  <li><i class="fa-brands fa-square-instagram" style="color: #9a18c9;"></i>instagram:stwins.spares
                  </li>
                  <li><i class="fa-brands fa-facebook" style="color: blue;"></i>facebook:stwinsspares12</li>
              </ul>
          </div>
      </div>


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









 
  <script src="{{asset("web/js12/bootstrap.bundle.min.js")}}"></script>

  <script href="{{asset("contact12/contact.js")}}"></script>
</body>

</html>