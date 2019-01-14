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
</div>

<div style="min-height:33px;"></div>

<!-- Third Parallax Image with Contact Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min" id="contact">
  <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide">CONTACT</span>
  </div>
</div>

<script>
// Page scroll
/*var last_known_scroll_position = 0;
var ticking = false;
var windowHeight = 0;
function doSomething() {
	ticking = false;
	windowHeight = last_known_scroll_position + 690;
	window.scrollTo(0, windowHeight);
}
function whenScroll() {
	last_known_scroll_position = window.scrollY;
    functionTick();
}
function functionTick() {
	if (!ticking) {
		    requestAnimationFrame(doSomething);
	}
	ticking = true;
}
window.addEventListener('scroll', whenScroll, false);*/
/*var x = $( window ).height();
$( window ).scroll(function() {
	$( window ).scrollTop( x );
});*/
//Page scroll
/*window.requestAnimationFrame = window.requestAnimationFrame;
//|| function(f){return setTimeout(f, 1000/60)};
var starttime;
var windowHeight = window.innerHeight;
function moveit(timestamp, duration){
	var timestamp = timestamp || new Date().getTime();
	var runtime = timestamp - starttime;
	var progress = runtime / duration;
	progress = Math.min(progress, 1);
    window.scrollTop = (windowHeight * progress).toFixed();
    if (runtime < duration){
            requestAnimationFrame(function(timestamp){
			moveit(timestamp, duration);
		})
	}
}
requestAnimationFrame(function(timestamp){
    starttime = timestamp || new Date().getTime();
    moveit(timestamp, 1000);*/
// Change style of navbar on scroll
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
