<?php

$dbname="webdev";
$dbuser="root";
$dbpass="toor";


try{
    $conn = new PDO("mysql:host=localhost;dbname=$dbname", $dbuser, $dbpass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

} catch (Exception $ex) {
    echo "Koneksi Error -> ";
    echo $ex->getMessage();

}
