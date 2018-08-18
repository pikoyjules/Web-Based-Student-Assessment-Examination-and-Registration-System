<div id="section">
                
                <div><a href="homepage.html"><img src="title.png" alt="" /></a></div>
                
            </div>

<hr>

<h1> Examinee List </h1>

<body style="background-color:steelblue;">
 
    <form action="studentprof.php" method="post">
        <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
        <input type="submit" name="search" value="Filter"><br><br>
    
        
    </form>
<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    $query = "SELECT * FROM `users` WHERE CONCAT (`id`, `lastname`, `firstname`, `prevschool`, `gradelevel`, `Address`, `Contact`, `uid`, `trn_date`) LIKE '%".$valueToSearch."%'";
     $search_result = filterTable($query);
}
    else {
        $query = "SELECT * FROM `users`";
        $search_result = filterTable($query);
        
    }

function filterTable($query)
{
    
    $connect = mysqli_connect("localhost", "root", "", "zion");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}




$link = mysqli_connect("localhost", "root", "", "zion");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$sql = "SELECT * FROM users";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Last Name</th>";
                echo "<th>First Name</th>";
                echo "<th>Previous School</th>";
                echo "<th>Grade Level</th>";
                echo "<th>Address</th>";
                echo "<th>Contact</th>";
                echo "<th>Access Code</th>";
                echo "</tr>";
      
        while($row = mysqli_fetch_array($search_result)){
            echo "<tr>";
              echo "<td>" . $row['id']         . "</td>" ;
              echo "<td>" . $row['lastname']   . "</td>" ;
              echo "<td>" . $row['firstname']   . "</td>" ;
              echo "<td>" . $row['prevschool'] . "</td>" ;
              echo "<td>" . $row['gradelevel'] . "</td>";
              echo "<td>" . $row['Address']    . "</td>";
              echo "<td>" . $row['Contact']    . "</td>";
              echo "<td>" . $row['uid']    . "</td>"; 
          
            echo "</tr>";
        }
        echo "</table>";
        
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 

mysqli_close($link);
?>



<!DOCTYPE html>
<html>




        
       
        

</body>
</html>
    



<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>