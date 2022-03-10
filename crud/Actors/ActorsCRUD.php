<?php
require_once "../../config.php";
$firstName = 'Dwayne';
$lastName = 'Johnson';
$ID = 1;
function getActor($firstName, $lastName){
    $query = "SELECT * from Actor where FirstName = '$firstName' and LastName = '$lastName'";
    $result = mysql_query($query, $yhendus);

    return $result;
}

function getAllActors(){

}

function createActor(){

}

function deleteActor($ID){

}

function updateActor($ID){

}
