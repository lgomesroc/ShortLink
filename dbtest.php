<?php
$connection = mysqli_connect('127.0.0.1', 'root', '5577azcD@#', 'shortlinkdb');

if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}
echo 'Connected successfully';
mysqli_close($connection);
