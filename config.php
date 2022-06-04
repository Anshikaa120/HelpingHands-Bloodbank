<?php
$host = "localhost";
$user = "root";
$password = "Anshika@12";
$dbname = "bloodbankdb";

if(!$conn = mysqli_connect($host,$user,$password,$dbname)){
echo "Failure";
echo "<br>";

}

?>