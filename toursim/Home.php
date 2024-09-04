<?php 
   session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Seven</title>
    <link rel="icon" href="./img/favicon.jpg" type="image/x-icon">

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->


    <!-- Font Awesome Cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

        
    <!-- Font Awesome Cdn -->


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <!-- Google Fonts -->
    
</head>
<body>
    





    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container">
          <a class="navbar-brand" href="index.html" id="logo"><span>T</span>he <span>S</span>even</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span><i class="fa-solid fa-bars"></i></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="Home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#book">Book</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#packages">Packages</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#gallary">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about">About</a>
              </li>
             
            </ul>
            <form class="d-flex" action="index.php" style="margin-right:10px;">
    <button id="loginButton" class="btn btn-primary" type="submit">Log in</button>
</form>
<form class="d-flex" action="register.php">
    <button id="signupButton" class="btn btn-primary" type="submit">Sign up</button>
</form>

          </div>
        </div>
      </nav>
    <!-- Navbar End -->

<!-- Include your previous HTML code here -->

<!-- Login and Signup Overlay -->





    <!-- Home Section Start -->
    <div class="home" style="background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.2)), url('background.png');">

        <div class="content">
            <h5>Welcome To World</h5>
            <h1>Visit <span class="changecontent"></span></h1>

            <p>Visit the worlds best seven places according to your intrest Effortlesly under our agency</p>
            <a href="#book">Book Place</a>
        </div>
    </div>
    <!-- Home Section End -->





    <!-- Section Book Start -->
    <section class="book" id="book">
  <div class="container">
    <div class="main-text">
      <h1><span>B</span>ook</h1>
    </div>
    <div class="row">
      <div class="col-md-6 py-3 py-md-0">
        <div class="card">
          <img src="./img/book-img.png" alt="">
        </div>
      </div>
      <div class="col-md-6 py-3 py-md-0">
      <form action="process_booking.php" method="POST">
    <select id="serviceChoice" class="form-control" name="serviceChoice" required>
        <option value="Seven Wonders">Seven Wonders</option>
        <option value="Seven Natural Wonders">Seven Natural Wonders</option>
        <option value="Seven Cities">Seven Cities</option>
        <!-- Add more options as needed -->
    </select>
    <br>
    <input type="text" class="form-control" name="numberOfMembers" placeholder="Number Of Members" required><br>
    <label for="startDate">Starting Date</label>
    <input type="date" id="startDate" name="startDate" class="form-control" required><br>
    <label for="endDate">Ending Date</label>
    <input type="date" id="endDate" name="endDate" class="form-control" required><br>
    <input type="text" class="form-control" name="name" placeholder="Name" required><br>
    <input type="text" class="form-control" name="age" placeholder="Age" required><br>
    <input type="text" class="form-control" name="contactNumber" placeholder="Contact Number" required><br>
    <input type="submit" value="Book Now" class="submit" required>
</form>

      </div>
    </div>
  </div>
</section>

    <!-- Section Book End -->








    <!-- Section Packages Start -->
<!-- Section Packages Start -->
<section class="packages" id="packages">
    <div class="container">
      <div class="main-txt">
        <h1><span>P</span>ackages</h1>
      </div>
      <div class="row" style="margin-top: 30px">
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <img src="./img/7natural.jpeg" alt="" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h3>Seven Natural Wonders</h3>
                    <p>The world's Extraordinary Natural Landscapes and Phenomena</p>
                    <h6>Price: <strong>2,00,000</strong>/person</h6><br>
                    <a href="#book" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <img src="./img/7wonders.jpg" alt="" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h3>Seven Wonders</h3>
                    <p>The Seven Wonders of the Ancient World built by Humans</p>
                    <h6>Price: <strong>1,50,000</strong>/person</h6><br>
                    <a href="#book" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <img src="./img/7cities.jpg" alt="" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h3>The Seven Cities</h3>
                    <p>The top seven Beautiful cities of the world according to google</p>
                    <h6>Price: <strong>1,00,000</strong>/person</h6><br>
                    <a href="#book" class="btn btn-primary">Book Now</a>
                </div>
            </div>
        </div>        
        
       
        
      </div>
    </div>
  </section>
  <!-- Section Packages End -->
    <!-- Section Packages End -->







    <!-- Section Services Start -->
    <section class="services" id="services">
        <div class="container">
      
          <div class="main-txt">
            <h1><span>S</span>ervices</h1>
          </div>
      
          <div class="row" style="margin-top: 30px;">
      
            <div class="col-md-4 py-3 py-md-0">
              <div class="card h-100">
                <i class="fas fa-hotel"></i>
                <div class="card-body">
                  <h3>Top class Accommodations</h3>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card h-100">
                <i class="fas fa-bullhorn"></i>
                <div class="card-body">
                  <h3>Best Guides</h3>
                </div>
              </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
              <div class="card h-100">
                <i class="fas fa-plane"></i>
                <div class="card-body">
                  <h3>Fastest Travel</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
    <!-- Section Services End -->




    <!-- Section Gallary Start -->
    <section class="gallary" id="gallary">
      <div class="container">

        <div class="main-txt">
          <h1><span>G</span>allery</h1>
        </div>

        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/g1.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/g2.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/g3.png" alt="" height="230px">
            </div>
          </div>
        </div>


        <div class="row" style="margin-top: 30px;">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/g4.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/g5.png" alt="" height="230px">
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card">
              <img src="./img/g6.png" alt="" height="230px">
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Section Gallary End -->







    <!-- About Start -->
    <section class="about" id="about">
        <div class="container">
      
          <div class="main-txt">
            <h1>About <span>Us</span></h1>
          </div>
      
          <div class="row" style="margin-top: 50px;">
      
            <div class="col-md-6 py-3 py-md-0">
              <div class="card">
                <img src="./img/about-img.png" alt="">
              </div>
            </div>
      
            <div class="col-md-6 py-3 py-md-0">
              <h2>Our Story</h2>
              <p>We are The Seven, a passionate team of travel experts dedicated to curating extraordinary adventures for wanderlust souls. Our journey began with a simple idea: to make the world more accessible and exciting for travelers of all kinds.</p>
              <p>With years of experience and a deep love for exploration, we've crafted unique itineraries that take you off the beaten path and into the heart of diverse cultures, breathtaking landscapes, and thrilling experiences.</p>
              <p>Our mission is to transform your travel dreams into reality. Whether you're seeking the tranquility of nature, the charm of historic landmarks, or the excitement of new horizons, we're here to make your travel aspirations come true.</p>          </div>
            </div>
        </div>
      </section>
      
    <!-- About End -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>