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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
            <li><a    onclick="currentSlide(4)">Resultaten</a></li>
            <li><a    onclick="currentSlide(3)">Finales</a></li>
            <?php
            if ($_SESSION != 0)
            {
                echo " <li><a    onclick=\"currentSlide(1)\">invoer resultaten</a></li>";
                echo "<li><a    onclick=\"currentSlide(2)\">invoer Teams en Spelers</a></li>";
            }
            else{

                header("location:./app/login.php");
            }

            ?>



        </ul>
    


        </header>

<div class="container">









<div class="slideshow-container">

<div class="mySlides ">

  <!-- ==================slide 2 form======================== -->

<form class="brhiboi" action="">
<ul class="dropdown2">
	<li id="test7"><select name="speler">
  <option value="none">team 1</option>
  <?php
      foreach ($players as $player)
      {
          echo "<option>$player</option>";
      }
      ?>
</select></li>

    <li><select name="speler">
  <option id="test5" value="none">team 2</option>
  <?php
      foreach ($players as $player)
      {
          echo "<option>$player</option>";
      }
      ?>
</select></li>

</ul>	
   <ul class="ulinvres">
<li><ul class="liststyle" >
	<li><input class="form-control mb-2 mr-sm-2 mb-sm-0" type="text"></li>
	<li><input class="form-control mb-2 mr-sm-2 mb-sm-0" type="text"></li>

</ul></li>

<li><ul class="ul2">
	<li><select class="test77" name="speler">
  <option value="none">speler die heeft gescoord</option>
  <?php
      foreach ($players as $player)
      {
          echo "<option>$player</option>";
      }
      ?>
</select></li>
<button class="button" type="submit" name="send"><span>add </span>
</button>
vv 
<li><select class="test77" name="speler">
  <option value="none">speler die heeft gescoord</option>
  <?php
      foreach ($players as $player)
      {
          echo "<option>$player</option>";
      }
      ?>
</select></li>
<button class="button" type="submit" name="send"><span>add</span>
</button>


   </ul></li>
</ul>
</form>
<form action="" method="post">
	 <button class="button" type="submit" name="send"><span>submit</span>
</form>
</div>

<div class="mySlides ">
  <!-- ==================slide 4 form======================== -->
  
  <div class="style">
<form class="team-invoer" action="./app/addplayer.php" method="post">
<div class="addplayer">
<h5 class="speler-1">een speler toevoegen</h5>
<ul class="input-playerinf">
<li><input id="addplayer" type="text" name="voornaam" placeholder="voornaam: "></li>
   <li> <input id="addplayer" type="text" name="achternaam" placeholder="achternaam: "></li>
   <li> <input id="addplayer" type="text" name="studentennummer" placeholder="studentennummer: "></li>
<li class="toevoegen"><button id="addplayerbutton" type="submit" name="send" value="verstuur"><span>toevoegen </span>
</button> </li>
</ul>
</div>
</form>


<form class ="team" method="post" action="./app/fileconversion.php">
<div class="text-input">
  <h5>team naam:</h5>
  <input id="inv-tm" type="text" name="team-naam">
   <h4>Teams bekijken</h4>
  </div>

      <div class="dropdown">
     <h5 class="h5-player">selecteer spelers</h5>
      <ul id="form-ul">
          <li name="speler1"><select name="speler1">
                  <option value="none">Speler 1</option>
                  <?php

                  require ('./app/database.php');

                  $sth = $database->prepare("SELECT first_name FROM tbl_players");
                  $sth->execute();

                  $result = $sth->fetchAll();
                  foreach ($result as $player)
                  {


                      echo "<option value='$player'>{$player['first_name']}</option>";
                  }

                  ?>


    </select></li>

          <li name="speler2"><select name="speler2">
      <option name="player2" value="none">speler 2</option>
      <?php
      $sth = $database->prepare("SELECT first_name FROM tbl_players");
      $sth->execute();

      $result = $sth->fetchAll();
      foreach ($result as $player)
      {


          echo "<option value='$player'>{$player['first_name']}</option>";
      }

      ?>
    </select></</li>

          <li name="speler3"><select name="speler3">
      <option value="none">speler 3</option>
      <?php
      $sth = $database->prepare("SELECT first_name FROM tbl_players");
      $sth->execute();

      $result = $sth->fetchAll();
      foreach ($result as $player)
          foreach ($result as $player)
          {


              echo "<option value='$player'>{$player['first_name']}</option>";
          }

      ?>
    </select></</li>

          <li name="speler4"><select name="speler4">
      <option value="none">speler 4</option>
      <?php
      $sth = $database->prepare("SELECT first_name FROM tbl_players");
      $sth->execute();

      $result = $sth->fetchAll();
      foreach ($result as $player)
          foreach ($result as $player)
          {


              echo "<option value='$player'>{$player['first_name']}</option>";
          }

      ?>
    </select></</li>

          <li name="speler5"><select name="speler5">
      <option value="none">speler 5</option>
      <?php
      $sth = $database->prepare("SELECT first_name FROM tbl_players");
      $sth->execute();

      $result = $sth->fetchAll();
      foreach ($result as $player)
      {


          echo "<option value='$player'>{$player['first_name']}</option>";
      }

      ?>

    </select></</li>

  </ul>
  </div>
 <div class="submit">
     
<button class="button" type="submit" name="send"><span>verstuur </span>
</button>
 </div>

</form>
  </div>
</div>

<div class="mySlides ">
  <!-- ==================slide 3 form======================== -->
  
  <form class="formall" action="">
  <div class="champ">
<input id="champ" type="text" name=""> 
<h5 id="champw">kampioen</h5>
  </div>
  <ul  class="overall" 	>

 <li>
     <ul  class="row1" >
       <li><input id="" type="text" name=""></li> 
        <li><img  id="picvs"  src="img/storm.png" alt=""></li>
       <li><input id="" type="text" name=""></li>
             <li> <img id="paddingtool" src="img/paddingtool.png" alt=""> </li>
       <li><input  type="text" name=""></li>
        <li><img  id="picvs"  src="img/storm.png" alt=""></li>
       <li><input id="" type="text" name=""></li>
    </ul>
 </li>

 <li>
    <ul  class="row2" >
 	  <li><input id="" type="text" name=""></li> 
 	   <li><img  id="picvs"  src="img/storm.png" alt=""></li>
      <li><input id="" type="text" name=""></li>
    </ul>
 </li>
    
    <li>
      <ul class="singles">
    <li><input   type="text" name=""></li>
       
       <li><img id="vspic" src="img/VS.png"></li>

    <li><input   type="text" name=""></li> 
      </ul>
    </li>

 <li>

    <ul  class="row3">
 	  <li><input id="" type="text" name=""></li>
 	   <li><img  id="picvs"  src="img/storm.png" alt=""></li> 
      <li><input id="" type="text" name=""></li>
    </ul>
 </li>

  <li>
     <ul  class="row4">
       <li><input id="" type="text" name=""></li> 
       <li><img  id="picvs"  src="img/storm.png" alt=""></li>
       <li><input id="" type="text" name=""></li>
          <li> <img id="paddingtool" src="img/paddingtool.png" alt=""> </li>
       <li><input  type="text" name=""></li>
        <li><img  id="picvs"  src="img/storm.png" alt=""></li>
       <li><input id="" type="text" name=""></li>
    </ul>
 </li>




</ul>





  </form>

 
  
</div>

<div class="mySlides ">

  <!-- ==================slide 1 form======================== -->
<form action="">
	
	<div class="lislide1f">
		
			<ul class="ulslide1a">
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
			</ul>
	
		    

				
			<ul class="ulslide1b">
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
			</ul>

		

		
			<ul class="ulslide1c">
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
				<li><input   type="text" name=""></li>
			</ul>

		
</div>




	




</form>

  
  
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
