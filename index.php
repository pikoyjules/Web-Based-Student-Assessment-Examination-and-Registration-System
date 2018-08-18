<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Pre-registration</title>
<link rel="stylesheet" href="style.css" />


</head>
<body style="background-color:steelblue;">
    
    <div id="section">
                
                <div><a href="homepage.html"><img src="title.png" alt="" /></a></div>
                
            </div>

<hr>
<?php
    require('db.php');
    
    if (isset($_REQUEST['lastname'])){
        $lastname = stripslashes($_REQUEST['lastname']); 
        $lastname = mysqli_real_escape_string($con,$lastname);
        $firstname = stripslashes($_REQUEST['firstname']); 
        $firstname = mysqli_real_escape_string($con,$firstname);
        $prevschool = stripslashes($_REQUEST['prevschool']);
        $prevschool = mysqli_real_escape_string($con,$prevschool);
        $gradelevel = stripslashes($_REQUEST['gradelevel']);
        $gradelevel = mysqli_real_escape_string($con,$gradelevel);
        $Address = stripslashes($_REQUEST['Address']);
        $Address = mysqli_real_escape_string($con,$Address);
        $Contact = stripslashes($_REQUEST['Contact']);
        $Contact = mysqli_real_escape_string($con,$Contact);
        $uid = stripslashes($_REQUEST['uid']);
        $uid = mysqli_real_escape_string($con,$uid);
        $uid = rand ( 10000 , 99999 );






        
$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (lastname, firstname, prevschool, gradelevel, Address, Contact, uid, trn_date) VALUES ('$lastname', '$firstname', '$prevschool', '$gradelevel', '$Address', '$Contact','$uid', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
           echo "This is your Access Code: <br> <h2>$uid</h2>";
           echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>"; 
    
            




        }
    }else{ 
?>

            

<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<link href="responsive_style.css" type="text/css" rel="stylesheet"/>
<div id="wrapper">
<br>
<div class="form_div">
<p class="form_label">Entrance Form</p>

<form name="registration" action="" method="post">
    <input type="text" name="lastname" placeholder="Last Name" required />
<br>
<br>
    <input type="text" name="firstname" placeholder="First Name" required />
<br>
<br>
    <input type="text" name="Address" placeholder="Address" required />
<br>
<br>
    <input type="text" name="prevschool" placeholder="Previous School" required />
<br>
<br>
<p>Grade Level </p>  <input type="radio" name="gradelevel" value="Grade 7" checked>Grade 7<br>
    <input type="radio" name="gradelevel" value="Grade 11" checked>Grade 11<br>
<br>    
    <input type="text" name="Contact" placeholder="Contact of Guardian" required />
<br>
<br>
<input type="hidden" name="uid" placeholder="uid" />
<input type="submit" name="submit" value="Register" />
</form>

    
    
    
<style> 
   
body
{
 margin:0 auto;
 padding:0px;
 text-align:center;
 width:100%;
 font-family: "Myriad Pro","Helvetica Neue",Helvetica,Arial,Sans-Serif;
 background-color: white;
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
width:500px;
margin-left:auto;
margin-right:auto;
padding:10px;
background-color: gold;
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
background-color:black;
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
 
   .container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}


.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}


.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
}


.container:hover input ~ .checkmark {
    background-color: #ccc;
}


.container input:checked ~ .checkmark {
    background-color: #2196F3;
}


.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}


.container input:checked ~ .checkmark:after {
    display: block;
}


.container .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
} 
    

}
</style>
    
</div>
<?php } ?>
</body>
</html>
