<?php require ('header.php'); ?>

<form action="../app/addmatch.php" method="post">
    <ul>
        <li><select name="teamHome">
                <option value="none">team 1</option>
                <?php
                require_once ('../app/database.php');
                $sth = $database->prepare("SELECT `name` FROM tbl_teams");
                $sth->execute();
                $result = $sth->fetchAll();

                foreach ($result as $teamHome)
                {
                    echo "<option name='teamHome' value='{$teamHome['name']}'>{$teamHome['name']}</option>";
                }
                ?>
            </select>
        </li>

        <li><select name="teamAway">
                <option id="test5" value="none">team 2</option>
                <?php
                foreach ($result as $teamAway)
                {
                    echo "<option name='teamAway' value='{$teamAway['name']}'>{$teamAway['name']}</option>";
                }
                ?>
            </select>
        </li>
    </ul>
    <button class="button" type="submit" name="send"><span>submit</span></button>
</form>
<ul class="ulinvres">
    <li>
        <ul class="liststyle" >
            <li><input type="text"></li>
            <li><input type="text"></li>
        </ul>
    </li>

    <li>
        <ul>
            <li><select name="speler">
                    <option value="none">speler die heeft gescoord</option>
                    <?php
                    foreach ($players as $player)
                    {
                        echo "<option>$player</option>";
                    }
                    ?>
                </select>
            </li>
            <button class="button" type="submit" name="send"><span> add </span></button>

            <li><select name="speler">
                    <option value="none">speler die heeft gescoord</option>
                    <?php
                    foreach ($players as $player)
                    {
                        echo "<option>$player</option>";
                    }
                    ?>
                </select>
            </li>

            <button class="button" type="submit" name="send"><span>add</span></button>
        </ul>
    </li>
</ul>

<?php require ('footer.php'); ?>