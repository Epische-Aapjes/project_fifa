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
    <li><a href="./invoer_resultaten.php">Invoer-Resultaten</a></li>
    <li style="background-color: #787878" ><a href="./invoer_spelers.php">Invoer-Teams&amp;Spelers</a></li>
  </ul>
</div> 
<div class="main">
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
</div>

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
</body>
</html>