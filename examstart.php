
<?php include 'database.php' ?>

<?php
	$query = "SELECT * FROM questions";
	//Get results
	$results = $mysqli->query($query) or die($mysqli->error._LINE_);
	$total = $results->num_rows;
?>

<?php

$link = mysqli_connect("localhost", "root", "", "zion");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM settings";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>schoolyear</th>";
                
            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
              echo "<tr>";
              echo "<td>" . $row['schoolyear']         . "</td>" ;    
         
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



<?php
include("auth.php"); ?>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="style.css" />
<div class="form">
<br>
<h1>Welcome <?php echo $_SESSION['lastname']; ?>,<?php echo $_SESSION['firstname']; ?>   </h1>
    <p>Read the questions carefully <br> Do not cheat</p>
    



<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8" />
		<title>Assesment Examination</title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
	</head>

	<body>
			<script type="text/javascript">
	history.pushState(null,null, location.href)
	window.onpopstate = function() {
		history.go(1);
	};
</script>


			<header>
				<div class="container">
					<h1>Assement Examination</h1>
				</div>
			</header>
		
			<main>
				<div class="container">
					<h2>Requirements for Registration</h2>
					<p>Evaluate your knowledge for Zion</p>
					
						<p><strong>Number of Questions: </strong> <?php echo $total; ?> </p>
                        <p><strong>Type: </strong>Multiple Choice </p>
						<p><strong>Estimated Time: </strong> <?php echo $total * .5 ; ?> Minutes </p>
					
					
					
					<a href="question.php?n=1" class="start">Start Exam</a>
					
				</div>
			</main>
			
		
		
		
	</body>

</html>