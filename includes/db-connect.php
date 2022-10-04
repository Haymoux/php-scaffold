<?php
$host = 'localhost';
$username = 'root';
$dbpass = '';
$dbname = 'php_scaffold';
$conn= mysqli_connect($host,$username,$dbpass,$dbname);


if (!$conn) {
    echo "Error connecting to database";
}
