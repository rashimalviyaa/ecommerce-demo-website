<?php
$user="root";
$dpass="";
$ser="localhost";
$dname="kuchbhi";
try{
$conn=mysqli_connect($ser,$user,$dpass, $dname);
}
catch (mysqli_aql_exception){
    echo "no";
}
?>