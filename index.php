<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
include './contact_form2.php';
?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<style>
.w3-lobster {
    font-family: "Lobster", serif;
}
body, html {
    height: 100%;
	color: #777;
	line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('kutyusok.jpeg');
    min-height: 690px;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("kutyusok.jpeg");
    min-height: 200px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("kutyusok.jpeg");
    min-height: 690px;
}

.new-padding {padding: 26px;}
.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones. Increase the pixels if needed*/
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>

</head>

<body>

<!-- Navbar (sit on top) -->
<div class=" w3-container w3-top w3-hover-opacity">
  <div class="w3-bar w3-text-brown" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-green w3-hide-medium w3-hide-large w3-right"
	href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> CONTACT</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-green">
      <i class="fa fa-search"></i>
    </a>
  </div>

   <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-text-brown">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">PORTFOLIO</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
    <a href="#" class="w3-bar-item w3-button">SEARCH</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="w3-container">
<div class="bgimg-1 w3-display-container" id="home">
    <div class="w3-padding w3-display-middle" style="white-space:nowrap;">
	<span class="w3-center w3-padding-large w3-brown w3-jumbo w3-animate-opacity w3-lobster w3-text-white
	w3-opacity-min">Our <span class="w3-hide-small">Web</span>site</span>
	</div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container new-padding" id="about">
  <h3 class="w3-center">ABOUT US</h3>
  <p class="w3-center"><em>We love milk</em></p>
  <p>This is a fictional "puppies" website/blog, and these fictional characters are little puppies.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>Puppies</b></p><br>
      <img src="kutyusok.jpeg" class="w3-round w3-image w3-opacity w3-hover-opacity-off"
	  alt="Photo of Me" width="500" height="333">
    </div>

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Welcome to our website! Welcome to our website! Welcome to our website!
      Welcome to our website! Welcome to our website! Welcome to our website!
      Welcome to our website! Welcome to our website! Welcome to our website!
      Welcome to our website! Welcome to our website! Welcome to our website!
      Welcome to our website! Welcome to our website! Welcome to our website!
      Welcome to our website! Welcome to our website! Welcome to our website!
      Welcome to our website! Welcome to our website! Welcome to our website!
      Welcome to our website! Welcome to our website! Welcome to our website!
      Welcome to our website! Welcome to our website! Welcome to our website!
      Welcome to our website! Welcome to our website! Welcome to our website!
      Welcome to our website! Welcome to our website! </p>
    </div>
  </div>
</div>

 <!-- Second Parallax Image with Portfolio Text -->
<div id="portfolio">
<div class="bgimg-2 w3-display-container w3-opacity-min">
  <div class="w3-display-middle">
    <span class="w3-xxlarge w3-text-white w3-wide">PORTFOLIO</span>
  </div>
</div>

 <!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64">
  <h3 class="w3-center">MY WORK</h3>
  <p class="w3-center"><em>Here are some samples.<br> Click on the boxes to open them. </em></p><br>
</div>

  <!-- Responsive Grid. Three columns on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
  <div class="w3-row-padding w3-center">
    <div class="w3-col m4">
      <a href="https://github.com/Otto09/PHPwithMySQLreturnJSON" style="text-decoration:none;"><div class="w3-green w3-hover-brown w3-hover-opacity w3-xlarge
	  w3-padding-large">PHP + MYSQL + JSON</div></a>
    </div>

    <div class="w3-col m4">
      <a href="https://github.com/Otto09/REACTOutputUserInputApp" style="text-decoration:none;"><div class="w3-green w3-hover-brown w3-hover-opacity w3-xlarge
	  w3-padding-large">REACT</div></a>
    </div>

    <div class="w3-col m4">
      <a href="https://github.com/Otto09/ANGULARWebAPI" style="text-decoration:none;"><div class="w3-green w3-hover-brown w3-hover-opacity w3-xlarge
	  w3-padding-large">ANGULAR</div></a>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m4">
      <a href="https://github.com/Otto09/REACTFilteredSearchAppSample" style="text-decoration:none;"><div class="w3-green w3-hover-brown w3-hover-opacity w3-xlarge
      w3-padding-large">REACT</div></a>
    </div>

    <div class="w3-col m4">
      <a href="https://github.com/Otto09/PHPwithMySQLandAJAX" style="text-decoration:none;"><div class="w3-green w3-hover-brown w3-hover-opacity w3-xlarge
      w3-padding-large">PHP + MySQL + AJAX</div></a>
	  </div>

    <div class="w3-col m4">
      <a href="https://github.com/Otto09/PHPwithMYSQL" style="text-decoration:none;"><div class="w3-green w3-hover-brown w3-hover-opacity w3-xlarge
	  w3-padding-large">PHP + MySQL</div></a>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m4">
      <a href="https://github.com/Otto09/PHPwithMySQLandAJAXreturnJSON" style="text-decoration:none;"><div class="w3-green w3-hover-brown w3-hover-opacity w3-xlarge
      w3-padding-large">PHP + MySQL + AJAX + JSON</div></a>
	  </div>

    <div class="w3-col m4">
      <a href="https://github.com/Otto09/MyWebsite1.2" style="text-decoration:none;"><div class="w3-green w3-hover-brown w3-hover-opacity w3-xlarge
      w3-padding-large">PHP + PHPMAILER + SMTP + JAVASCRIPT</div></a>
	  </div>

    <div class="w3-col m4">
      <a href="https://github.com/Otto09/ASPNETCoreSQLServerWebApplicationSample" style="text-decoration:none;"><div class="w3-green w3-hover-brown w3-hover-opacity w3-xlarge
      w3-padding-large">.NET CORE+SQL SERVER</div></a>
    </div>
  </div>

  <div class="w3-row-padding w3-center w3-section">
    <div class="w3-col m4">
      <a href="https://github.com/Otto09/ASPNETCoreMySQLConsoleApp" style="text-decoration:none;"><div class="w3-green w3-hover-brown w3-hover-opacity w3-xlarge
      w3-padding-large">.NET CORE + MYSQL</div></a>
    </div>

    <div class="w3-col m4">
      <a href="https://github.com/Otto09/RESTfulAPI" style="text-decoration:none;"><div class="w3-green w3-hover-brown w3-hover-opacity w3-xlarge
      w3-padding-large">.NET CORE API</div></a>
    </div>

    <div class="w3-col m4">
      <a href="https://github.com/Otto09/ASPNETCoreWebApplication" style="text-decoration:none;"><div class="w3-green w3-hover-brown w3-hover-opacity w3-xlarge
      w3-padding-large">.NET CORE Web App</div></a>
    </div>
  </div>

<div style="min-height:33px;"></div>

<!-- Third Parallax Image with Contact Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min" id="contact">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
  <h3 class="w3-center">WHERE I WORK</h3>
  <p class="w3-center"><em>I'd love your feedback!</em><p/>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="workplace.jpg" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Cluj-Napoca, Romania<br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +40 740 002 657<br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: ttgoga@yahoo.com<br>
      </div>
      <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>

      <?php if (!empty($msg)) {
        echo "<h2>$msg</h2>";
      }
      ?>

      <form method="post">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="email" placeholder="Email" required name="Email">
          </div>
        </div>
        <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
        <button class="w3-button w3-black w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/accounts/login/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://www.snapchat.com/" target="_blank"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href="https://www.pinterest.com/login/" target="_blank"><i class="fa fa-pinterest w3-hover-opacity"></i></a>
    <a href="https://twitter.com/login" target="_blank"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
  </div>
  <p>Powered by <a href="https://ottosportfoliosite.wordpress.com/" title="Otto's Portfolio" target="_blank" class="w3-hover-text-green">Otto's Portfolio</a> </p>
</footer>

<script>
//Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white" + " w3-text-brown";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white w3-text-brown", " w3-text-brown");
    }

}
// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
