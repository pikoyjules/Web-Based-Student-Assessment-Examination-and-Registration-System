
<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM questions ORDER BY question_number"); 
?>



  <div id="section">
                
                <div><a href="homepage.html"><img src="title.png" alt="" /></a></div>
                
            </div>

<hr>


<html>
<head>	
	<title>Exam Viewer</title>
</head>

<body style="background-color:steelblue;">

    
    <h1> Exam Viewer </h1>
	<table width='80%' border=0>
        
        <a href="add.php" class="button">Add Question</a>
        <a href="choices.php" class="button">View Choices</a>

	<tr bgcolor='#CCCCCC'>
		<td>Question number</td>
		<td>Question</td>
		<td>Subject</td>
        <td>Options</td>
		
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['question_number']."</td>";
		echo "<td>".$res['text']."</td>";
		echo "<td>".$res['subject']."</td>";
	

		echo "<td><a href=\"qdelete.php?question_number=$res[question_number]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	   echo "<a href=add.php>";
    
    }
      
        
	?>
        
  
	
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

.button {
    background-color: orange;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    float: right;
}
</style>


</table>
</body>
</html>
