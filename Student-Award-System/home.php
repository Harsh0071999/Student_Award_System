<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Student Award System</title>
</head>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Student Award System</title>
  
</head>
<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>G</span>anpat University </h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>



            <li><a href="#hero" data-after="Home"> Welcome 
                <span style="color: red"> <?php echo $username;?> </span> 
            </a></li>


            <li><a href="#services" data-after="Service">Services</a></li>
            
            <li><span class="login-signup"><a href="logout.php">Logout</a></span></li>
            <!-- <li><a href="#projects" data-after="Projects">Projects</a></li>
            <li><a href="#about" data-after="About">About</a></li>
            <li><a href="#contact" data-after="Contact">Contact</a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Student <span></span></h1>
        <h1>Award <span></span></h1>
        <h1>System<span></span></h1>
        <a href="#projects" type="button" class="cta">SAS</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

      <!-- Service Section -->
    <section id="services">
        <div class="services container">
            <div class="service-top">
                <h1 class="section-title">Ganpat<span>University</span></h1>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                    magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
            </div>
            <div class="service-bottom">
                <div class="service-item">
                    <div class="icon">
                        <img src="https://img.icons8.com/external-becris-lineal-color-becris/64/000000/external-leadership-life-skill-becris-lineal-color-becris-1.png"/></div>
                        <h2>Leadership</h2>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                            consequat.</p>
                </div>
                <div class="service-item">
                    <div class="icon">
                        <img src="https://img.icons8.com/fluency/48/000000/service.png"/></div>
                        <h2>Social Service</h2>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                            consequat.</p>
                </div>
                <div class="service-item">
                    <div class="icon">
                        <img src="https://img.icons8.com/emoji/48/000000/person-climbing.png"/></div>
                        <h2>Culture Activity</h2>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                            consequat.</p>
                </div>
                <div class="service-item">
                    <div class="icon">
                        <img src="https://img.icons8.com/external-wanicon-flat-wanicon/64/000000/external-sport-back-to-school-wanicon-flat-wanicon.png"/></div>
                        <h2>Sport</h2>
                        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore 
                            magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo 
                            consequat.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service Section -->


<!-- Footer -->
<div>
  <section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>G</span>anpat University</h1>
      </div>
      <h2>Student Award System</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="https://www.facebook.com/ganpatuni/"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://www.instagram.com/ganpatuniversity/?hl=en"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://twitter.com/Ganpat_Uni?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><img src="https://img.icons8.com/bubbles/100/000000/twitter.png" /></a>
        </div>
        <div class="social-item">
          <a href="https://www.behance.net/harshgandhi8"><img src="https://img.icons8.com/bubbles/100/000000/behance.png" /></a>
        </div>
      </div>
      <p>Copyright © 2021 Harsh M Gandhi. All rights reserved</p>
    </div>
  </section>
</div>
  <!-- End Footer -->
 <script src="./app.js"></script>
</body>

</html> 

<script src="./app.js"></script>
</body>

</html>