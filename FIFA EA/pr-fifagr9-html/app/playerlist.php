<?php
require_once ('database.php');
$query =("SELECT voornaam FROM project_fifa");

// set array
$array = array();

// look through query
while($row = $database->$query){

    // add each row returned into an array
    $array[] = $row;

    // OR just echo the data:
    echo $row['first_name']; // etc

}






?>