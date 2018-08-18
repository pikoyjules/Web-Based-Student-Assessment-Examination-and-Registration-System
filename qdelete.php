<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$question_number = $_GET['question_number'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM questions WHERE question_number=$question_number");

//redirecting to the display page (index.php in our case)
header("Location:del.php");
?>

