<!-- <?php 

// http://localhost/php-exercises/day3/pre-work/CRUD/actions/db_connect.php

// $hostname = "127.0.0.1"; // this is the hostname that you can find in the PhpMyAdmin and you can write "localhost" too
// $username = "root"; // be default the userName for the databases is root
// $password = ""; // by default there is no password in the databases
// $dbname = "crud_example"; // here we need to write the Database name

// create connection, you need to be aware of the order of the parameters
// $connect = new mysqli($hostname, $username, $password, $dbname);

// check connection
// if($connect->connect_error) {
//    die("Connection failed: " . $connect->connect_error);
// }else {

//     echo "Successfully Connected";

// }
?> -->


<?php 
// http://localhost/php-exercises/day3/pre-work/CRUD/actions/db_connect.php
$localhost = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "crud_example";

// create connection
$connect = mysqli_connect($localhost, $username, $password, $dbname);
// check connection
// if (!$connect) {
//    die("Connection failed: " . mysqli_connect_error());
// }else {

//     echo "Connected successfully";

// }
?>

