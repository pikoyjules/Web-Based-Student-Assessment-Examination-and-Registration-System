<div id="section">
                
                <div><a href="homepage.html"><img src="title.png" alt="" /></a></div>
                
            </div>

<hr>
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM choices ORDER BY  question_number"); // using mysqli_query instead
?>






<html>
<head>	
	<title>Exam Viewer</title>
</head>

<body style="background-color:steelblue;">

<h1> Question Viewer </h1>
<h2> 1 is the Correct Answer</h2>
<h2> 0 is the Wrong Answer </h2>
	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Question #</td>
        <td>Correct Identifier</td>
        <td>Choices</td>
		
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['question_number']."</td>";
		echo "<td>".$res['is_correct']."</td>";
		echo "<td>".$res['text']."</td>";
	
        

		echo "<td> <a href=\"cdelete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	

	</table>
    
    <style>
table, td, th {    
    border: 2px solid black;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
    
}

th, td {
    padding: 15px;
}
</style>
    
</body>
</html>
