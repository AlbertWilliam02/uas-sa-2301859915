<?php
$SERVERNAME= '172.19.0.2';
$DATABASE= 'trucorp-db';
$USER='root';
$PASSWORD='bertal';

$connect=mysqli_connect($SERVERNAME,$USER,$PASSWORD,$DATABASE);

$SQLquery = "SELECT * FROM users";

if($result = mysqli_query($connect, $SQLquery)){
$counter = mysqli_num_rows($result);
echo "Num of rows in table users: ".$counter;
}
?>
