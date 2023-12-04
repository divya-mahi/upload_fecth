<?php
$sever="localhost";
$username="root";
$pwd="";
$db="divya";
$con=mysqli_connect($sever,$username,$pwd,$db);
$name=$_POST['name'];

$fname=$_FILES['fpath']['name'];
$tempf=$_FILES['fpath']['tmp_name'];
$fsize=$_FILES['fpath']['size'];
$fdir="image/";
$image=$fdir.$fname;
if(move_uploaded_file($tempf,$image))
{
    $query="insert into emp values(null,'$name','$image')";
    $res=mysqli_query($con,$query);
    echo"inserted successfully";
}
else
{
    echo"error";
}
?>