<?php require ('header.php'); ?>
<!-- extra's -->
<div class="extras">
    <h1>Description</h1>
    <p>World's First Radius College FiFa Tournament
    The FiFa tournament is a competition of students de parted in 14 to 16 teams that will compete each other to win the Big prize.
    The players of the tournament are forming a team of 4 to 5 players. one keeper and 3~4 player on the field.
    </p>
    <p>There is also a place for betting. If you interested you can bet on you're favorite Team. you can make profit of it so try you luck and who ones.
    The bedding role is also a foundation for a charity for research of illnesses that need proper founding to make treatments for those terrible diseases.
    </p>

    <h1>Extra</h1>

    <p>Time's, Date's Place's and all what looks around.</p>
    <p>Date:     22 - 06 - 2017</p>
    <p>Time:     10:00 ~ 16:00</p>
    <p>Game:     20 Min</p>
    <p>Minimum Player: 4 Members</p>
    <p>Maximim Player: 5 Members (Where 1 is reserve)</p>
</div>
<!-- resultaten -->
    <div class="main" id="#resultaten">
        <?php
        require_once ("../app/database.php");

        $stmt = $database->prepare("SELECT team_id_a FROM tbl_matches");
        $stmt->execute();
        $fetchType = PDO::FETCH_ASSOC;
        $count = $stmt->rowCount();
        $results = $stmt->fetchall($fetchType);

        foreach ($results as $match)
        {
            echo "<p>$match <- id a</p>";
        }
        ?>
    </div>

<!-- finales -->
    <div class="main" id="#finales">
        <h1>Finales</h1>
        <p class="champ">Kampioen: <?php ('database.php'); ?></p>
    </div>

<?php require ('footer.php'); ?>