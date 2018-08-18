<body style="background-color:steelblue;">
<div id="section">
                
                <div><a href="homepage.html"><img src="title.png" alt="" /></a></div>
                
            </div>

<hr>
    <h1> Exam Results </h1>
</body>

<br>


<?php

$link = mysqli_connect("localhost", "root", "", "zion");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM examresults ORDER BY score ASC ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Date</th>";              
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Score</th>";
             





            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
              echo "<tr>";
              echo "<td>" . $row['trn_date']         . "</td>" ;
              echo "<td>" . $row['lastname']         . "</td>" ;
              echo "<td>" . $row['firstname']         . "</td>" ;
              echo "<td>" . $row['score']   . "</td>" ;
             
          
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