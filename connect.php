<?php
$HOSTNAME="localhost";
$USERNAME="root";
$DATABASE="santa needs";
$PASSWORD="";

$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($con) {
    echo("Connection Successful!");
} else {
    echo("error");
    die(mysqli_error($con));
};
