<?php
	include_once '../Php/CONFIG.php';
?>

 <?php

$x1=$_POST["adate"];
$x2=$_POST["ddate"];
$x3=$_POST["nog"];
$x4=$_POST["Hall_Number"];
$x5=$_POST["Number_of_Rooms"];

$sql = "INSERT INTO Hall(Adate,Ddate,NuofGuest,HallNum,NumofRoom) VALUES ('','$x1','$x2','$x3','$x4','$x5')";

if(mysqli_query($connec,$sql)){
	 

}else{
	echo "<script> alert('ERROR: NOT  ADDED!') </script>";
}

mysqli_close($connec);

?>