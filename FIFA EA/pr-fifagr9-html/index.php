<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>fifa-bets</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" type="text/css" href="node_modules/fullpage.js/jquery.fullPage.css">
        <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="main.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
    <div class="maincontent">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header>
        <h1 id="fifa">FIFA-bets</h1>
        
        <ul>
            <li><a    onclick="currentSlide(1)">invoer resultaten</a></li>
            <li><a    onclick="currentSlide(2)">invoer Teams en Spelers</a></li>
            <li><a    onclick="currentSlide(3)">Finales</a></li>
            <li><a    onclick="currentSlide(4)">Resultaten</a></li>

        </ul>
    

ggggg
        </header>

<div class="container">
    










<div class="slideshow-container">

<div class="mySlides ">
  <div class="numbertext">1 / 4</div>
  
  <!-- ==================slide 1 form======================== -->


  <input id="butto" type="text" name="team-naam"><br>
   <button id="button" type="button">submit</button> 
  
</div>

<div class="mySlides ">
  <div class="numbertext">2 / 4</div>
  <!-- ==================slide 2 form======================== -->
<form class="team-invoer">
<div class="addplayer">
<h5>een speler toevoegen</h5>
<input id="addplayer" type="text" name="team-naam">
<button id="addplayerbutton" type="submit" name="send" value="verstuur"><span>toevoegen </span>
</button>
</div>

<div class="text-input">
  <h5>team naam:</h5>
  <input id="inv-tm" type="text" name="team-naam">
   <h4>Teams bekijken</h4>
  </div>


  <div class="dropdown">
 <h5>selecteer spelers</h5> 
  <ul id="form-ul"> 

     <li><select name="speler">
  <option value="volvo">speler 1</option>
  <option value="saab">bart</option>
  <option value="fiat">dhovakin</option>
  <option value="audi">harry potter</option>
  <option value="audis">its-ya-boi</option>
</select></li>

      <li><select name="speler">
  <option value="volvo">speler 2</option>
  <option value="saab">bart</option>
  <option value="fiat">dhovakin</option>
  <option value="audi">its-ya-boi</option>
  <option value="audis">harry potter</option>
</select></</li>

      <li><select name="speler">
  <option value="volvo">speler 3</option>
  <option value="saab">bart</option>
  <option value="fiat">dhovakin</option>
  <option value="audi">its-ya-boi</option>
  <option value="audis">harry potter</option>
</select></</li>

      <li><select name="speler">
  <option value="volvo">speler 4</option>
  <option value="saab">bart</option>
  <option value="fiat">dhovakin</option>
  <option value="audi">its-ya-boi</option>
  <option value="audis">harry potter</option>
</select></</li>

      <li><select name="speler">
  <option value="volvo">speler 5</option>
  <option value="saab">bart</option>
  <option value="fiat">dhovakin</option>
  <option value="audi">its-ya-boi</option>
  <option value="audis">harry potter</option>

</select></</li>

  </ul>
  </div>
 <div class="submit">
     
<button class="button" type="submit" name="send" value="verstuur"><span>verstuur </span>
</button>
 </div>

</form>

  
</div>

<div class="mySlides ">
  <div class="numbertext">3 / 4</div>
  <!-- ==================slide 3 form======================== -->


  <img src="img/spees2.jpg" style="width:100%">
  
</div>

<div class="mySlides ">
  <div class="numbertext">4 / 4</div>

  <!-- ==================slide 4 form======================== -->


  <img src="img/vjuur.gif" style="width:100%">
  
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>
























</div>















        </div>

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>





        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
