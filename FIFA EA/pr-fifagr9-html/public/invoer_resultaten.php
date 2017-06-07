<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="header.css">
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="header">
  <h1>FIFA-BETS</h1>
  <ul>
    <li><a href="./resultaten.php">Resultaten</a></li>
    <li><a href="./finales.php">Finales</a></li>
    <li style="background-color: #787878" ><a href="./invoer_resultaten.php">Invoer-Resultaten</a></li>
    <li><a href="./invoer_spelers.php">Invoer-Teams&amp;Spelers</a></li>
  </ul>
</div> 
<div class="main">
<form class="brhiboi" action="">

<div class="padding-tool2">


	
  <select class="bob" name="speler">
  <option  id="test5" value="none">team 1</option>
  <?php
  require_once ('../app/database.php');
  $sth = $database->prepare("SELECT `name` FROM tbl_teams");
  $sth->execute();
  $result = $sth->fetchAll();

      foreach ($result as $team)
      {
          echo "<option value='{$team['name']}'>{$team['name']}</option>";
      }
      ?>
</select>
 
 <div class="testsjoerd" >
 <select class="bob" name="speler">
  <option  id="test5" value="none">team 2</option>
  <?php
  require_once ('../app/database.php');
  $sth = $database->prepare("SELECT `name` FROM tbl_teams");
  $sth->execute();
  $result = $sth->fetchAll();

      foreach ($result as $team)
      {
          echo "<option value='{$team['name']}'>{$team['name']}</option>";
      }
      ?>
</select></div>
</div>

	
   <ul class="ulinvres">
   <div class="padding-tool3" >
 
	<li ><input class="form-control mb-2 mr-sm-2 mb-sm-0" type="text"></li>
	<li ><input class="form-control mb-2 mr-sm-2 mb-sm-0 numinv2 " type="text"></li>
</div>
</ul>

<ul class="ul2">
	<li><select class="test77" name="speler">
  <option value="none">speler die heeft gescoord</option>
  <?php
      foreach ($players as $player)
      {
          echo "<option>$player</option>";
      }
      ?>
</select></li>
<button    id="button8" type="submit" name="send"><span id="button8">add </span>
</button>
 
<li class="v2"><select class="test77" name="speler">
  <option value="none">speler die heeft gescoord</option>
  <?php
      foreach ($players as $player)
      {
          echo "<option>$player</option>";
      }
      ?>
</select></li>
<button id="button8"  type="submit" name="send"><span id="button8">add</span>
</button>


   </ul></li>
</ul>
</form>
<form class="centerknop" action="" method="post">
	 <button class="button" type="submit" name="send"><span>submit</span>
</form>
</div>
</div>


	
</body>
</html>