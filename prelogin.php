
<?php include 'database.php' ?>

<?php
/*
* Get Total Questions
*/
	$query = "SELECT * FROM questions";
	//Get results
	$results = $mysqli->query($query) or die($mysqli->error._LINE_);
	$total = $results->num_rows;
?>

<?php
include("auth.php"); //include auth.php file on all secure pages ?>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>



<!DOCTYPE html>
<html>
	
	<head>
		<meta charset="utf-8" />
		<title>Assesment Exam</title>
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
	</head>

	<body>



			<header>
				<div class="container">
					<h1>Assement Exam</h1>
				</div>
			</header>
		
			<main>
				<div class="container">
					<h2>Requirements for Registration</h2>
					<p>Evaluate your knowledge for Zion</p>
					<ul>
						<li><strong>Number of Questions: </strong><?php echo $total; ?></li>
						<li><strong>Type: </strong>Multiple Choice</li>
						<li><strong>Estimated Time: </strong><?php echo $total * .5 ; ?> Minutes</li>
					
					</ul>
					
					<a href="question.php?n=1" class="start">Start Quiz</a>
					
				</div>
			</main>
			<footer>
			
			</footer>
		
		
		
	</body>

</html>