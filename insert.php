<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','sailor');

// get the post records

$txtSname = $_POST['txtSname'];

$txtRating = $_POST['txtRating'];
$txtAge = $_POST['txtAge'];
$txtBid=$_POST['txtBid'];
$txtBname = $_POST['txtBname'];
$txtColor = $_POST['txtColor'];
$txtDay = $_POST['txtDay'];

// database insert SQL code
$sql = "INSERT INTO sailors ( fldSid, fldSname, fldRating, fldAge) VALUES (
    '0', '$txtSname', '$txtRating', '$txtAge')";


$rs = mysqli_query($con, $sql);

if($rs){
    $sql2 = "INSERT INTO boats ( fldBid, fldBname, fldColor) VALUES (
        '$txtBid', '$txtBname', '$txtColor')";
    $rs2=mysqli_query($con,$sql2);
    
    
   
}
if($rs){
    $sql3= "INSERT INTO 'reserves'(fldSid,fldBid,fldDay) 
    VALUES ('0','$txtBid','$txtDay') "  ;
    $rs3=mysqli_query($con,$sql3);
    }

echo "Sailors Entry Sucessfully Inserted";

// insert in database 
?>