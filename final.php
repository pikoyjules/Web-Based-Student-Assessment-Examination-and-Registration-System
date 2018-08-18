<?php session_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Zion Assesment Exam</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
	</head>

	<body style="background-color:steelblue;">
        
        <div id="section">
                
                <div><a href="homepage.html"><img src="title.png" alt="" /></a></div>
                
            </div>

<hr>
		<center>	<header>
				<div class="container">
					<h1>Assessment Examination</h1>
				</div>
			</header>
		
			<main>
				




<?php
	
	$lastname = $_SESSION['lastname'];
	$firstname = $_SESSION['firstname'];
	$score=$_SESSION['score'];
	$trn_date = date("Y-m-d H:i:s");

	
	echo "Thanks for taking the exam ".$firstname; 
	echo "<br>score  :".$score;

$con=mysqli_connect("localhost","root","","zion");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Perform queries 
mysqli_query($con,"SELECT * FROM examresults");
mysqli_query($con,"INSERT INTO examresults (lastname,firstname,score,trn_date) 
VALUES ('$lastname','$firstname','$score','$trn_date')");

mysqli_close($con);
?>






				</div>
            </main> </center>
			<footer>
				
			</footer>
		
		
		
	</body>

</html>