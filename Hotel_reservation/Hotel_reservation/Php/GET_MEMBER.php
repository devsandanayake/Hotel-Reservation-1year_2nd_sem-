<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMIN PAGE</title>
    <link rel="stylesheet" href="ADMIN_NAV.css">
    <link rel="stylesheet" href="../Css/navigation.css">
    <link rel="stylesheet" href="../Css/Back_Button.css">
    
</head>
<body>

    <header>
        <!-- Header -->
        <h1 id="header">ADMIN PAGE</h1>

        <!-- Navigation Bar -->
        <ul id="n_bar">
           
            <li ><a href="#">MEMBERS</a></li>
            
            <li ><a href="../Php/GET_PAYMENT.php">PAYMENT</a></li>
        </ul>

        <a id="go" href="../Html/Hall.html">
        <button id="back_b">USER MODE</button></a>
 
    </header>

    <!-- Sign Up Table -->
    <br><br>
    <table border="4px" width="100%">
        <tr>
            <th class="row">Member_ID</th>
            <th class="row">First Name</th>
            <th class="row">Last Name</th>
            <th class="row">E-mail</th>
            <th class="row">Password</th>
            <th class="row">Mobile Number</th>
            <th class="row">Date of Birth</th>
            <th class="row">Gender</th>
            <th class="row">Home Address</th>
            <th class="row">Edit</th>
        </tr>

    
     

       <!-- PHP Connect -->
    <?php
	include_once '../Php/CONFIG.php';
    ?>

    <br><br><br>

    <!-- Get Database Data -->
    <?php
        $sql = "select * from sign_up";
        $result = $connec->query($sql);

        if($result -> num_rows > 0){

            while($row = $result -> fetch_assoc())
            {

                echo "<tr><td>".$row["Member_ID"]."</td>
                      <td>".$row["First_Name"]."</td>
                      <td>".$row["Last_Name"]."</td>
                      <td>".$row["Email"]."</td>
                      <td>".$row["Password"]."</td>
                      <td>".$row["Mobile_Number"]."</td>
                      <td>".$row["Birth"]."</td>
                      <td>".$row["Gender"]."</td>
                      <td>".$row["Address"]."</td>
                      <td><a href='DELETE_MEMBER.php? Member_ID = $row[Member_ID]'><input type='submit' value='Delete' id='sub'></a></td>
                      </tr>";
            }
        }else{
            echo "0 results";
        }

        echo "</table>";

        $connec->close();

    ?>

         

    ?>

</body>
</html>