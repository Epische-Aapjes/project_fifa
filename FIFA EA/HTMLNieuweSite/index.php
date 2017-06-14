<?php require ('header.php'); ?>
<!-- resultaten -->
    <div class="main" id="#resultaten">
        <?php
        require_once ("./app/database.php");

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