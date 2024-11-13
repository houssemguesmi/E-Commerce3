<?php
$HOSTNAME="localhost";
$USERNAME="root";
$DATABASE="santaneeds";
$PASSWORD="";

global $con;
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$con) {
    echo("error");
    die(mysqli_error($con));
};
