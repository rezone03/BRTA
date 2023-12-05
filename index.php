<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>BRTA Home Page</title>

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Century Gothic', Verdana, sans-serif; /* Change the font to Century Gothic */
    }

    .mySlides {
      display: none;
    }

    img {
      vertical-align: middle;
    }

    .slideshow-container {
      max-width: 1500px;
      position: relative;
      margin: auto;
    }

    .dot {
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #bbb;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active {
      background-color: #717171;
    }

    .fade {
      animation-name: fade;
      animation-duration: 2s;
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px
      }
    }

    /* Adjust the footer height by modifying padding */
    footer {
      background-color: green; /* Change the background color to green */
      padding: 10px; /* Adjust the padding to increase or decrease the height */
      color: white; /* Optional: Set text color for the footer */
    }

    .footer-columns {
      display: flex;
      justify-content: space-between;
    }

    .contact,
    .links,
    .subscribe {
      flex: 1;
      margin-right: 20px; /* Optional: Adjust the margin between columns */
    }

    /* Optional: Style for the links in the footer */
    .links a {
      color: white;
      text-decoration: none;
    }

    /* Optional: Style for the form in the subscribe column */
    .subscribe form {
      display: flex;
      flex-direction: column;
    }

    .subscribe label,
    .subscribe input {
      margin-bottom: 10px;
    }

    /* Change the header background color to green */
    .navbar {
      background-color: green;
      padding: 10px; /* Adjust the padding to increase or decrease the height */
    }

    /* Change the color of navbar links */
    .navbar a {
      color: white;
      text-decoration: none;
    }
  </style>

</head>

<body>
  <nav class="navbar">
    <ul>
      <li><a href="index.php">Dashboard</a></li>
      <li><a href="license_application.php">License Procedure</a></li>
      <li><a href="login.php">Log In/ Registration</a></li>
      <li><a href="map.html">Location</a></li>
    </ul>
  </nav>
  <br><br>
  <br><br>

  <center>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="banner2.jpg" style="width:30%">
      </div>
      <div class="mySlides fade">
        <img src="all-brta-fees-can-now-be-paid-through-bkash.jpeg" style="width:30%">
      </div>
      <div class="mySlides fade">
        <img src="banner3.jpg" style="width:30%;">
      </div>
    </div>
  </center>
  <br>

  <div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>

  <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 3000);
    }
  </script>

  <div class="container">
    <div class="slider">
    </div>

    <?php 
      if(isset($_GET["success_msg"])){
        echo "<div class='alert alert-success' role='alert'> ".$_GET["success_msg"]." </div>";
      }
    ?>

    <div class="instructions">
      <h2>Instructions</h2>
      <p>Follow the instructions below to obtain your license...</p>
      <ol>
        <li>Bring Required Documents</li>
        <li>Pay Required Fee</li>
        <li>Bring Medical certificate</li>
        <li>Submit Necessary Documents at BRTA office</li>
      </ol>
    </div>

    <div class="fees">
      <h2>Vehicle License Fees</h2>
      <img src="brta_new_rate_1.avif" style="width:30%;">
      
      
    </div>
  </div>

  <footer>
    <div class="footer-columns">
      <div class="contact">
        <h3>Contact Us</h1>
          <p>Email: info@brta.gov.bd</p>
          <p>Phone: +880 1624042472</p>
          <p>সাইটটি শেষ হাল-নাগাদ করা হয়েছে: ২০২৩-১২-০৫ ০৯:৪৬:৪৮</p>
      </div>

      <div class="links">
        <h3>Important Links</h3>
        <ul>
          <li><a href="license_application.php">Apply for License</a></li>
          <li><a href="license_renew.php">Renew License</a></li>
          <li><a href="traffic_signs.php">Traffic Rules</a></li>
        </ul>
      </div>

      <div class="subscribe">
        <h3>Subscribe</h3>
        <form action="subscribe.php" method="post">
          <label for="email">Enter your email:</label>
          <input type="email" name="email" required>
          <input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </footer>
</body>

</html>
