<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMIN PAGE</title>
    <link rel="stylesheet" href="../Css/ADMIN_NAV.css">
    <link rel="stylesheet" href="../Css/navigation.css">
    <link rel="stylesheet" href="../Css/Back_Button.css">
    
</head>
<body>

    <header>
        <!-- Header -->
        <h1 id="header">ADMIN PAGE</h1>

        <!-- Navigation Bar -->
        <ul id="n_bar">
            
            <li ><a href="../Php/GET_MEMBER.php">MEMBERS</a></li>
        
            <li ><a href="#">PAYMENT</a></li>
        </ul>

        <a id="go" href="../Html/home.html">
        <button id="back_b">USER MODE</button></a>

        <hr></hr>
    </header>

    <!-- Payment Table -->
    <br><br>
    <table border="4px" width="100%">
        <tr>
            <th class="row">ID</th>
            <th class="row">Customer Name</th>
            <th class="row">Card Number</th>
            <th class="row">Card Ex.Month</th>
            <th class="row">Card Ex.Year</th>
            <th class="row">CVV Number</th>
            <th class="row">Edit</th>
        </tr>

    <!-- PHP Connect -->
    <?php
	include_once '../Php/CONFIG.php';
    ?>

    <br><br><br>

    <!-- Get Database Data -->
    <?php
        $sql = "select * from payment";
        $result = $connec->query($sql);

        if($result -> num_rows > 0){

            while($row = $result -> fetch_assoc()){

                echo "<tr><td>".$row["ID"]."</td>
                      <td>".$row["Name"]."</td>
                      <td>".$row["Card_Num"]."</td>
                      <td>".$row["Expire_Month"]."</td>
                      <td>".$row["Expire_Year"]."</td>
                      <td>".$row["CVV"]."</td>
                      <td><a href='DELETE_PAYMENT.php ?ID = $row[ID]'><input type='submit' value='Delete' id='sub'></a></td>
                      </tr>";
            }
        }else{
            echo "0 results";
        }

        echo "</table>";

        $connec->close();

    ?>

</body>
</html>