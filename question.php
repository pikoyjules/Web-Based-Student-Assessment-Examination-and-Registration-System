<?php include 'database.php' ?>
<?php session_start(); ?>
<?php
		
	 $number =  $_GET['n'];






	

			/*
		* Get total questions
		*/
		
		$query = "SELECT * FROM `questions`  "; 
		//Get result
		$results = $mysqli->query($query) or die($mysqli->error._LINE_);
		$total = $results->num_rows;
	
	
	/*
	*	Get Question
	*/
	$random = mt_rand(1, 18);


$query = "SELECT * FROM `questions` WHERE `question_number` = '$random'";

	//Get result
	$result = $mysqli->query($query) or die($mysqli->error._LINE_);

	$question = $result->fetch_assoc();

	/*
	*	Get Choices
	*/
	$query = "SELECT * FROM `choices`
				WHERE question_number = $number";
	//Get results
	$choices = $mysqli->query($query) or die($mysqli->error._LINE_);

    
?>








<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Assesment Examination</title>
		<link rel="stylesheet" href="style.css" type="text/css"/>
		 <?php include("timer.php"); ?>



<?php echo $_SESSION['lastname']; ?>,<?php echo $_SESSION['firstname']; ?>
		

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
              echo "<td>" . $row['schoolyear'] 
                       . "</td>" ;    
         
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

$link = mysqli_connect("localhost", "root", "", "zion");
 

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "SELECT * FROM users l ORDER BY  gradelevel DESC
LIMIT     1; ";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>gradelevel</th>";
               

                
            echo "</tr>";

        while($row = mysqli_fetch_array($result)){
              echo "<tr>";
              echo "<td>" . $row['gradelevel'] 
                       . "</td>" ;    
         
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







		<script type="text/javascript">
	history.pushState(null,null, location.href)
	window.onpopstate = function() {
		history.go(1);
	};

		</script>



	</head>

	<body>
		
			
			<header>
				<div class="container">
					<h1>Assesment Examination</h1>
				</div>
			</header>
		
			<main>
				<div class="container">
                    <h3><?php echo $question['subject']; ?></h3>
                  
                    <h3><?php echo " Question Number ".$_GET['n'] ?></h3>
				
						
						<?php echo $question['question_essay']; ?>
						<div>
						<?php echo $question['text']; ?>
					
					</p>
					<form method="post" action="process.php">
						<ul class="choices">
							<?php while($row = $choices->fetch_assoc()): ?>
							<input name="choice" type="radio" value="<?php echo $row['id']; ?>" required/><?php echo $row['text']; ?><br>
							<?php endwhile; ?>

							




																								
						</ul>
						<input type="submit" value="Submit" />
						<input type="hidden" name="number" value="<?php echo $number; ?>" />
									

					</form>
				</div>
			</main>
			<footer>
			
			</footer>
		
		
		
	</body>

</html>