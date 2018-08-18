<div id="section">
                
                <div><a href="homepage.html"><img src="title.png" alt="" /></a></div>
                
            </div>


<?php include 'database.php'; ?>

<?php
	if(isset($_POST['submit'])){
		//Get post variables
		
		$subject = $_POST['subject'];
		$question_essay = $_POST['question_essay'];
		$question_number = $_POST['question_number'];
		$question_text = $_POST['question_text'];
		$correct_choice = $_POST['correct_choice'];
        $instruction = $_POST['instruction'];
		//Choices array
		$choices = array();
		$choices[1] = $_POST['choice1'];
		$choices[2] = $_POST['choice2'];
		$choices[3] = $_POST['choice3'];
		$choices[4] = $_POST['choice4'];
		
		
		//Question query
		$query = "INSERT INTO `questions`(subject,question_number, text, question_essay, instruction)
					VALUES('$subject' ,'$question_number','$question_text', '$question_essay', '$instruction' )";
					
		//Run query
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		//Validate insert
		if($insert_row){
			foreach($choices as $choice => $value){
				if($value != ''){
					if($correct_choice == $choice){
						$is_correct = 1;
					} else {
						$is_correct = 0;
					}
					//Choice query
					$query = "INSERT INTO `choices` (question_number, is_correct, text)
							VALUES ('$question_number','$is_correct','$value')";
							
					//Run query
					$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
					
					//Validate insert
					if($insert_row){
						continue;
					} else {
						die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
					}
				}
			}
			$msg = 'Question has been added';
		}
	}
	
	/*
 	* Get total questions
	*/
	$query = "SELECT * FROM `questions`";
	//Get The Results
	$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $questions->num_rows;
	$next = $total+1;
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>Exam Editor</title>
	<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body style="background-color:steelblue;">

    <header>
		<div class="container">
			<h1>Exam Editor</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>Add A Question</h2>
			<?php
				if(isset($msg)){
					echo '<p>'.$msg.'</p>';
				}
			?>
			      <div id="wrapper">
                <div class="form_div">
                <p class="form_label">
            <form method="post" action="add.php">
                
                <p>
					<label>Instructions: </label>
					<input type="text" name="instruction" required/>
				</p>
				


				<p>
					 <label>Subject:</label>
					 <br>
					 <input type="radio" name="subject" value="Science" required> Science<br>
 					 <input type="radio" name="subject" value="Math" required> Math<br>
  					 <input type="radio" name="subject" value="AP" required> AP<br> 
					<input type="radio" name="subject" value="English" required> English<br> 
				    <input type="radio" name="subject" value="Filipino" required> Filipino<br> 
                </p>


				<p>
					<label>Question Number: </label>
					<input type="number" value="<?php echo $next; ?>" name="question_number" />
				</p>
				<p>


                    <textarea name="question_essay" rows="4" cols="40"></textarea>





					<label>Question Text: </label>
					<input type="text" name="question_text"  required/>
				</p>
				<p>
					<label>Choice #1: </label>
					<input type="text" name="choice1" required/>
				</p>
				<p>
					<label>Choice #2: </label>
					<input type="text" name="choice2" required/>
				</p>
				<p>
					<label>Choice #3: </label>
					<input type="text" name="choice3" required/>
				</p>
				<p>
					<label>Choice #4: </label>
					<input type="text" name="choice4" required/>
				</p>
				<p>
				
					<label>Correct Choice Number: </label>
					<input type="number" name="correct_choice"  required/>
				</p>
				<p>
					
				<br>

<p>
					<label>Instructions: </label>
					<input type="text" name="instruction" />
				</p>
				


				<p>
					 <label>Subject:</label>
					 <br>
					 <input type="radio" name="subject" value="Science" required> Science<br>
 					 <input type="radio" name="subject" value="Math" required> Math<br>
  					 <input type="radio" name="subject" value="AP" required> AP<br> 
					<input type="radio" name="subject" value="English" required> English<br> 
				    <input type="radio" name="subject" value="Filipino" required> Filipino<br> 
                </p>


				<p>
					<label>Question Number: </label>
					<input type="number" value="<?php echo $next+1; ?>" name="question_number" />
				</p>
				<p>


                    <textarea name="question_essay" rows="4" cols="40"></textarea>





					<label>Question Text: </label>
					<input type="text" name="question_text"  />
				</p>
				<p>
					<label>Choice #1: </label>
					<input type="text" name="choice1" />
				</p>
				<p>
					<label>Choice #2: </label>
					<input type="text" name="choice2" />
				</p>
				<p>
					<label>Choice #3: </label>
					<input type="text" name="choice3" />
				</p>
				<p>
					<label>Choice #4: </label>
					<input type="text" name="choice4" />
				</p>
				<p>
				
					<label>Correct Choice Number: </label>
					<input type="number" name="correct_choice"  />
				</p>
				<p>
					<label>Instructions: </label>
					<input type="text" name="instruction" />
				</p>
				


				<p>
					 <label>Subject:</label>
					 <br>
					 <input type="radio" name="subject" value="Science" required> Science<br>
 					 <input type="radio" name="subject" value="Math" required> Math<br>
  					 <input type="radio" name="subject" value="AP" required> AP<br> 
					<input type="radio" name="subject" value="English" required> English<br> 
				    <input type="radio" name="subject" value="Filipino" required> Filipino<br> 
                </p>


				<p>
					<label>Question Number: </label>
					<input type="number" value="<?php echo $next+2; ?>" name="question_number" />
				</p>
				<p>


                    <textarea name="question_essay" rows="4" cols="40"></textarea>





					<label>Question Text: </label>
					<input type="text" name="question_text"  />
				</p>
				<p>
					<label>Choice #1: </label>
					<input type="text" name="choice1" />
				</p>
				<p>
					<label>Choice #2: </label>
					<input type="text" name="choice2" />
				</p>
				<p>
					<label>Choice #3: </label>
					<input type="text" name="choice3" />
				</p>
				<p>
					<label>Choice #4: </label>
					<input type="text" name="choice4" />
				</p>
				<p>
				
					<label>Correct Choice Number: </label>
					<input type="number" name="correct_choice"  />
				</p>
				<p>
					<input type="submit" name="submit" value="Submit"/>



				<a href=del.php> Back to questions</a> 
				</p>
			</form>
		</div>
	</main>
            
<style>
        
    body{
	font-family: arial;
	font-size: 15px;
	line-height:1.6em;
}
        

li{
	list-style: none;
}

a{
	text-decoration: none;
}

label{
	display: inline-block;
	width:180px;
}

input[type='text']{
	width: 97%;
	padding: 4px;
	border-radius: 5px;
	border: 1px #ccc solid;
	
}

input[type='number']{
	width: 50px;
	padding: 4px;
	border-radius: 5px;
	border: 1px #ccc solid;
	
}

.container{
	width: 60%;
	margin: 0 auto;
	overflow: auto;
}

header{
	
	border-bottom: 3px #f4f4f4 solid;
}

footer{
	border-top: 3px #f4f4f4 solid;
	text-align:center;
	padding-top: 5px;
}

main{
	padding-bottom: 20px;
}

a.start{
	display: inline-block;
	color: #666;
	background: #f4f4f4;
	border: 1px dotted #ccc;
	padding: 6px 13px;
}

.current{
	padding: 10px;
	background: #f4f4f4;
	border: #ccc dotted 1px;
	margin: 20px 0 10px 0;
}
@media only screen and (max-width:960px){
	
	.container{
		width: 80%;
	}
}

    #wrapper
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:995px;
}
#wrapper h1
{
 margin-top:50px;
 font-size:45px;
 color:#424949;
}
#wrapper h1 p
{
font-size:18px;
}
.form_div
{
width:330px;
margin-left:320px;
padding:10px;
background-color:gold;
}
.form_div .form_label
{
margin:15px;
margin-bottom:30px;
font-size:25px;
font-weight:bold;
color:white;
text-decoration:underline;
}    
    
    
    </style>
	
</body>
</html>