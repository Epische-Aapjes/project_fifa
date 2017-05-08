<?php

$query =("SELECT voornaam FROM project_fifa");

// set array
$array = array();

// look through query
while($row = $query){

    // add each row returned into an array
    $array[] = $row;

    // OR just echo the data:
    echo $row['username']; // etc

}






?>