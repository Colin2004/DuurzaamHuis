<?php

session_start();

$host = "127.0.0.1"; /* Host name */
$user = "c5695colin"; /* User */
$password = "Dataflex!2004"; /* Password */
$dbname = "c5695flex"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
 die("Connection failed: " . mysqli_connect_error());
}