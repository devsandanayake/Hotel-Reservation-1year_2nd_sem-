<?php
	include_once '../Php/CONFIG.php';
?>

<?php

        $value = $_GET['ID'];

        $query = "DELETE FROM payment WHERE ID =  '$value'";

        $data = mysqli_query($connec,$query);

        if($data){
            echo"WELL";
            header("Location: GET_PAYMENT.php");
        }else{
            echo "<script> alert('ERROR: RECORD NOT DELETED SUCCESSFULLY') </script>";
        }
?>