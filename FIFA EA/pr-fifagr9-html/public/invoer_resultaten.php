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
<form class="brhiboi" action="../app/addmatch.php" method="post">
<ul class="dropdown2">
	<li><select name="team">
  <option value="none">team 1</option>
  <?php
  require_once ('../app/database.php');
  $sth = $database->prepare("SELECT `name` FROM tbl_teams");
  $sth->execute();
  $result = $sth->fetchAll();

      foreach ($result as $teamHome)
      {
          echo "<option name='teamHome'>{$teamHome['name']}</option>";
      }
      ?>
</select></li>

    <li><select name="teamAway">
  <option id="test5" value="none">team 2</option>
  <?php
      foreach ($result as $teamAway)
      {
          echo "<option name='teamAway'value='{$teamAway['name']}'>{$teamAway['name']}</option>";
      }
      ?>
</select></li>

	
   <ul class="ulinvres">
   <div class="padding-tool3" >
 
	<li ><input class="form-control mb-2 mr-sm-2 mb-sm-0" type="number"></li>
	<li ><input class="form-control mb-2 mr-sm-2 mb-sm-0 numinv2 " type="number"></li>
</div>
</ul>
    <button class="button" type="submit" name="send"><span>submit</span>
</form>
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
</div>
</div>


	
</body>
</html>