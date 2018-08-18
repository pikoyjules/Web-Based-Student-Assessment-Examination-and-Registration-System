<body style="background-color:steelblue;">
<div id="section">
                
                <div><a href="homepage.html"><img src="title.png" alt="" /></a></div>
                
            </div>

<hr>
    <h1> Junior High Student Profiling </h1>
</body>

<br>


<?php

$link = mysqli_connect("localhost", "root", "", "zion");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM juniorhigh";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Date Enrolled</th>";
                echo "<th>Last Name</th>";
                echo "<th>Given Name</th>";
                echo "<th>Middle Name</th>";
                echo "<th>Gender</th>";
                echo "<th>Citizenship</th>";
                echo "<th>Date of Birthday</th>";
                echo "<th>Street No./Street</th>";
                echo "<th>Barangay<th>";
                echo "<h4>Zipcode</h4>";
                echo "<th>Telephone Number</th>";
                echo "<th>Father's Name</th>";
                echo "<th>Mother's Name</th>";
                echo "<th>Guardian's Name</th>";
                echo "<th>Current School</th>";
                echo "<th>Father's Telephone No.</th>";
                echo "<th>Mother's Telephone No.</th>";
                echo "<th>Guardian's Telephone No.</th>";
                echo "<th>Academic Year</th>";
                echo "<th>Payment Scheme</th>";
                echo "<th>facebook</th>";
                echo "<th>email</th>";
            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
              echo "<tr>";
              echo "<td>" . $row['trn_date']         . "</td>" ;
              echo "<td>" . $row['lastname']         . "</td>" ;
              echo "<td>" . $row['givenname']   . "</td>" ;
              echo "<td>" . $row['middlename'] . "</td>" ;
              echo "<td>" . $row['gender'] . "</td>";
              echo "<td>" . $row['citizenship']    . "</td>";
              echo "<td>" . $row['dateofbirth']    . "</td>"; 
              echo "<td>" . $row['streetno'] . "</td>" ;
              echo "<td>" . $row['brgy'] . "</td>" ;
              echo "<td>" . $row['zipcode'] . "</td>" ;
              echo "<td>" . $row['telno'] . "</td>";
              echo "<td>" . $row['fathersname']    . "</td>";
              echo "<td>" . $row['mothersname']    . "</td>";
              echo "<td>" . $row['guardiansname']    . "</td>"; 
              echo "<td>" . $row['currentschool']         . "</td>" ;
              echo "<td>" . $row['fatelno']   . "</td>" ;
              echo "<td>" . $row['motelno'] . "</td>" ;
              echo "<td>" . $row['guatelno'] . "</td>";
              echo "<td>" . $row['academicyear']    . "</td>";
              echo "<td>" . $row['payment']    . "</td>";
              echo "<td>" . $row['facebook']    . "</td>";
              echo "<td>" . $row['email']    . "</td>";
         
          
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<style>
table, td, th {    
    border: 2px solid black;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 200%;
}

th, td {
    padding: 15px;
}
</style>