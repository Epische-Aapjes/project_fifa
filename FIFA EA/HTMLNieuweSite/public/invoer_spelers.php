<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style.css">
	<meta charset="UTF-8">
	<title>Spelers_invoer</title>
</head>
<body>

        <h1>FIFA-BETS</h1>
      <ul>
        <li><a href="./resultaten.php">Resultaten</a></li>
        <li><a href="./finales.php">Finales</a></li>
        <li><a href="./invoer_resultaten.php">Invoer-Resultaten</a></li>
        <li><a href="./invoer_spelers.php">Invoer-Teams&amp;Spelers</a></li>
      </ul>
    <a href="../app/storage/teams.csv" download="teams.csv">TeamBestand</a>

    <form method="post" action="../app/fileconversion.php">
      <h5>team naam:</h5>
      <input type="text" name="team-naam">
       <h4>Teams bekijken</h4>
        <ul>
            <?php
            require_once ('../app/database.php');

            $sth = $database->prepare("SELECT name FROM tbl_teams");
            $sth->execute();

            $result = $sth->fetchAll();
            foreach ($result as $team)
            {
                echo "<li><a href=''>{$team['name']}</a></li>";
            }
            ?>
            <li></li>
        </ul>

         <h5>selecteer spelers</h5>
          <ul>
              <li><select name="speler1">
                      <option value="none">Speler 1</option>
                      <?php
                      $stmt = $database->prepare("");


                      $sth = $database->prepare("SELECT first_name FROM tbl_players WHERE isnull(team_id)");
                      $sth->execute();

                      $result = $sth->fetchAll();
                      foreach ($result as $player)
                      {
                          echo "<option value='{$player['first_name']}'>{$player['first_name']}</option>";
                      }

                      ?>


        </select></li>

              <li><select name="speler2">
          <option name="player2" value="none">speler 2</option>
          <?php

          foreach ($result as $player)
          {
              echo "<option value='{$player['first_name']}'>{$player['first_name']}</option>";
          }

          ?>
        </select></</li>

              <li><select name="speler3">
          <option value="none">speler 3</option>
          <?php

              foreach ($result as $player)
              {


                  echo "<option value='{$player['first_name']}'>{$player['first_name']}</option>";
              }

          ?>
        </select></</li>

              <li><select name="speler4">
          <option value="none">speler 4</option>
          <?php

              foreach ($result as $player)
              {


                  echo "<option value='{$player['first_name']}'>{$player['first_name']}</option>";
              }

          ?>
        </select></</li>

              <li name="speler5"><select name="speler5">
          <option value="none">speler 5</option>
          <?php


          foreach ($result as $player)
          {


              echo "<option value='{$player['first_name']}'>{$player['first_name']}</option>";
          }

          ?>

        </select></</li>
      </ul>
        <input type="submit" value="Verstuur">

    </form>


    <form action="../app/addplayer.php" method="post">
        <label>Voeg een Speler toe:</label>
        <ul>
            <li><input type="text" name="voornaam" placeholder="voornaam: "></li>
            <li> <input type="text" name="achternaam" placeholder="achternaam: "></li>
            <li> <input type="text" name="studentennummer" placeholder="studentennummer: "></li>
        </ul>
        <input type="submit" value="Toevoegen">
    </form>


</body>
</html>