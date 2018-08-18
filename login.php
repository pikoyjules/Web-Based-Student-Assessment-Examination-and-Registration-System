<?php

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="style.css" />
</head>
<body style="background-color:steelblue;">


    
    

    
    
    <?php
	require('db.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['lastname'])){
		
		$lastname = stripslashes($_REQUEST['lastname']); // removes backslashes
		$lastname = mysqli_real_escape_string($con,$lastname); //escapes special characters in a string
		$firstname = stripslashes($_REQUEST['firstname']); // removes backslashes
		$firstname = mysqli_real_escape_string($con,$firstname); //escapes special characters in a string
		$uid = stripslashes($_REQUEST['uid']);
		$uid = mysqli_real_escape_string($con,$uid);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE lastname='$lastname' and uid='$uid' ";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['lastname'] = $lastname;
			$_SESSION['firstname'] = $firstname;
			header("Location: examstart.php"); 
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>

 <div id="section">
                
                <div><a href="homepage.html"><img src="title.png" alt="" /></a></div>
                
            </div>

<hr>
    
    <h1>Student Login</h1>
    
<div id="wrapper">
<div class="form_div">
<p class="form_label">
    
<form action="" method="post" name="login">
<input type="text" name="lastname" placeholder="Lastname" required />
<br>
<br>
<input type="text" name="firstname" placeholder="Firstname" required />
<br>
<br>
<input type="password" name="uid" placeholder="Enter your code" required />
<br>
<br>
<input name="submit" type="submit" value="Login" />
<br>
<br>
</form>
</div>



<br /><br />


<?php } ?>

<style>
body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
 background-color:grey;
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
border-radius: 25px;
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
.form_div input[type="text"],input[type="password"]
{
width:230px;
height:40px;
border-radius:2px;
font-size:17px;
padding-left:5px;
border:none;
}
.form_div input[type="submit"]
{
width:230px;
height:40px;
border:none;
border-radius:2px;
font-size:17px;
background-color:green;
border-bottom:3px solid #616A6B;
color:white;
font-weight:bold;
}

@media only screen and (min-width:700px) and (max-width:995px)
{
#wrapper
{
width:100%;
}
#wrapper h1
{
font-size:30px;
}
.form_div
{
width:50%;
margin-left:25%;
padding-left:0px;
padding-right:0px;
}
.form_div input[type="text"],input[type="password"]
{
width:80%;
}
.form_div textarea
{
width:80%;
}
.form_div input[type="submit"]
{
width:80%;
}
}
@media only screen and (min-width:400px) and (max-width:699px)
{
#wrapper
{
width:100%;
}
#wrapper h1
{
font-size:30px;
}
.form_div
{
width:60%;
margin-left:20%;
}
.form_div input[type="text"],input[type="password"]
{
width:80%;
}
.form_div input[type="submit"]
{
width:80%;
}
}
@media only screen and (min-width:100px) and (max-width:399px)
{
#wrapper
{
width:100%;
}
#wrapper h1
{
font-size:25px;
}
.form_div
{
width:90%;
margin-left:5%;
padding-left:0px;
padding-right:0px;
}
.form_div input[type="text"],input[type="password"]
{
width:80%;
}
.form_div input[type="submit"]
{
width:80%;
}
}

    
    
</style>

</body>
</html>
