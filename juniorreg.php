<div id="section">
                
                <div><a href="homepage.html"><img src="title.png" alt="" /></a></div>
                
            </div>

<hr>


<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body style="background-color:steelblue;">
<?php
    require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['lastname'])){
        $lastname = stripslashes($_REQUEST['lastname']); // removes backslashes
        $lastname = mysqli_real_escape_string($con,$lastname); //escapes special characters in a string
        $givenname = stripslashes($_REQUEST['givenname']);
        $givenname = mysqli_real_escape_string($con,$givenname);
        $middlename = stripslashes($_REQUEST['middlename']);
        $middlename = mysqli_real_escape_string($con,$middlename);
        $gender = stripslashes($_REQUEST['gender']);
        $gender = mysqli_real_escape_string($con,$gender);
        $citizenship = stripslashes($_REQUEST['citizenship']);
        $citizenship = mysqli_real_escape_string($con,$citizenship);
        $dateofbirth = stripslashes($_REQUEST['dateofbirth']);
        $dateofbirth = mysqli_real_escape_string($con,$dateofbirth);
        $zipcode = stripslashes($_REQUEST['zipcode']);
        $zipcode = mysqli_real_escape_string($con,$zipcode);
        $telno = stripslashes($_REQUEST['telno']);
        $telno = mysqli_real_escape_string($con,$telno);
        $fathersname = stripslashes($_REQUEST['fathersname']);
        $fathersname = mysqli_real_escape_string($con,$fathersname);
        $mothersname = stripslashes($_REQUEST['mothersname']);
        $mothersname = mysqli_real_escape_string($con,$mothersname);
        $guardiansname = stripslashes($_REQUEST['guardiansname']);
        $guardiansname = mysqli_real_escape_string($con,$guardiansname);
        $currentschool = stripslashes($_REQUEST['currentschool']);
        $currentschool = mysqli_real_escape_string($con,$currentschool);
        $fatelno = stripslashes($_REQUEST['fatelno']);
        $fatelno = mysqli_real_escape_string($con,$fatelno);
        $motelno = stripslashes($_REQUEST['motelno']);
        $motelno = mysqli_real_escape_string($con,$motelno);
        $guatelno = stripslashes($_REQUEST['guatelno']);
        $guatelno = mysqli_real_escape_string($con,$guatelno);
        $payment = stripslashes($_REQUEST['payment']);
        $payment = mysqli_real_escape_string($con,$payment);
        $academicyear = stripslashes($_REQUEST['academicyear']);
        $academicyear = mysqli_real_escape_string($con,$academicyear);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $facebook = stripslashes($_REQUEST['facebook']);
        $facebook = mysqli_real_escape_string($con,$facebook);
        $streetno = stripslashes($_REQUEST['streetno']);
        $streetno = mysqli_real_escape_string($con,$streetno);
        $brgy = stripslashes($_REQUEST['brgy']);
        $brgy = mysqli_real_escape_string($con,$brgy);
   
   
   


    
    
    
    








        
$trn_date = date("Y-m-d H:i:s");

        $query = "INSERT into `juniorhigh` (lastname, givenname, middlename, gender, citizenship, dateofbirth, zipcode, telno, fathersname, mothersname, guardiansname, currentschool, fatelno, motelno, guatelno, payment, academicyear,email,facebook, streetno ,brgy,trn_date) VALUES ('$lastname', '$givenname', '$middlename', '$gender', '$citizenship', '$dateofbirth', '$zipcode','$telno', '$fathersname', '$mothersname', '$guardiansname', '$currentschool', '$fatelno', '$motelno', '$guatelno', '$payment','$academicyear', '$email', '$facebook','$streetno', '$brgy','$trn_date')";

        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>You are registered successfully.</h3></div>";
    



        }
    }else{
?>
<style>
    */*Set's border, padding and margin to 0 for all values*/
{
    padding: 1px;
    margin: 0;
    border: 0;
}
body, html {
    color: #373C40;
    font-family: Verdana,Arial, Helvetica, sans-serif;
    height: 100%;
    background-color: #f0f0f0;
    margin:0px;
}
body {
    font-size: 70%;
}
p {
    padding: 7px 0 7px 0;
    font-weight: 500;
    font-size: 10pt;
}
a {
    color: #656565;
    text-decoration:none;
}
a:hover{
    color: #abda0f;
    text-decoration: none;
}
h1 {
    font-weight:200;
    color: #888888;
    font-size:16pt;
    background: transparent url(../img/h1.png) no-repeat center left;
    padding-left:33px;
    margin:7px 5px 8px 8px;
}
h4 {
    padding:1px;
    color: #ACACAC;
    font-size:9pt;
    font-weight:100;
    text-transform:uppercase;
}
form.register{
    width:800px;
    margin: 20px auto 0px auto;
    height:750px;
    background-color:gold;
    padding:5px;
    -moz-border-radius:20px;
    -webkit-border-radius:20px;
}
form p{
    font-size: 8pt;
    clear:both;
    margin: 0;
    color:gray;
    padding:4px;
}
form.register fieldset.row1
{
    width:500px;
    padding:5px;
    float:left;
    border-top:1px solid #F5F5F5;
    margin-bottom:15px;
}
form.register fieldset.row1 label{
    width:140px;
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
}
form.register fieldset.row2
{
    border-top:1px solid #F1F1F1;
    border-right:1px solid #F1F1F1;
    height:220px;
    padding:5px;
    float:left;
}
form.register fieldset.row3
{
    border-top:1px solid #F1F1F1;
    padding:5px;
    float:left;
    margin-bottom:15px;
    width:400px;
}
form.register fieldset.row4
{
    border-top:1px solid #F1F1F1;
    border-right:1px solid #F1F1F1;
    padding:5px;
    float:left;
    clear:both;
    width:365px;
}
form.register fieldset.row5
{
    border-top:1px solid #F1F1F1;
    padding:5px;
    float:left;
    margin-bottom:15px;
    width:400px;
}
form.register fieldset.row6
{
    border-top:1px solid #F1F1F1;
    padding:5px;
    float:left;
    margin-bottom:15px;
    width:400px;
}
form.register legend
{
    color: black;
    padding:2px;
    margin-left: 14px;
    font-weight:bold;
    font-size: 14px;
    font-weight:100;
}
form.register label{
    color:#444;
    width:98px;
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
}
form.register label.optional{
    float: left;
    text-align: right;
    margin-right: 6px;
    margin-top:2px;
    color: #A3A3A3;
}
form.register label.obinfo{
    float:right;
    padding:3px;
    font-style:italic;
}
form.register input{
    width: 140px;
    color: #505050;
    float: left;
    margin-right: 5px;
}
form.register input.long{
    width: 247px;
    color: #505050;
}
form.register input.short{
    width: 40px;
    color: #505050;
}
form.register input[type=radio]
{
    float:left;
    width:15px;
}
form.register label.gender{
    margin-top:-1px;
    margin-bottom:2px;
    width:34px;
    float:left;
    text-align:left;
    line-height:19px;
}
form.register input[type=text]
{
    border: 1px solid #E1E1E1;
    height: 18px;
}
form.register input[type=password]
{
    border: 1px solid #E1E1E1;
    height: 18px;
}
.button
{
    background: #abda0f url(../img/overlay.png) repeat-x;
    padding: 8px 10px 8px;
    color: #fff;
    text-decoration: none;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    -webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.5);
    text-shadow: 0 -1px 1px rgba(0,0,0,0.25);
    cursor: pointer;
    float:right;
    font-size:18px;
    margin:10px;
}
form.register input[type=text].year
{
    border: 1px solid #E1E1E1;
    height: 18px;
    width:30px;
}
form.register input[type=checkbox] {
    width:14px;
    margin-top:4px;
}
form.register select
{
    border: 1px solid #E1E1E1;
    width: 130px;
    float:left;
    margin-bottom:3px;
    color: #505050;
    margin-right:5px;
}
form.register select.date
{
    width: 40px;
}
input:focus, select:focus{
    background-color: #efffe0;
}

</style>
    
    
<div id="wrapper">
<div class="form_div">
 <form action="" class="register">
            <h1>Registration</h1>
            <fieldset class="row1">
                <legend>Student's Information</legend>
                <p>
                    <label>Last Name *</label>
                        <input type="text" name="lastname" required/> 
                </p>
                
                <p> 
                    <label>Given Name *</label>
                        <input type="text" name="givenname" required/> 
                </p>
            
                <p>  
                    <label>Middle Name *</label>
                        <input type="text" name="middlename" required/>
                </p>
                
            </fieldset>
            
            
            
            <fieldset class="row2">
                <legend>Contact Details</legend>
                <p>
                    <label>Street No./Street</label>
                        <input type="text" name="streetno" class="long" required/>
                </p>
                
                <p>
                    <label>Brgy/City</label>
                        <input type="text" maxlength="20" name="brgy" required/>
                </p>
                
                <p>
                    <label>Zip Code *</label>
                        <input type="text" size="4" maxlength="4" name="zipcode" required />
                </p>
                <p>
                    <label>Mobile No. *</label>
                        <input type="text" size="11" maxlength="11" name="telno" required/>
                </p>
                <p>
                    <label>Email Address *</label>
                        <input type="text" name="email" required/>
                </p>
                <p>
                    <label>Facebook *</label>
                        <input type="text" name="facebook" required/>
                </p>
            </fieldset>
            
            
            <fieldset class="row3">
                <legend>Further Information
                </legend>
                <p>
                    <label>Gender *</label>
                    <input type="radio" name="gender" value="male" required/>
                    <label class="gender">Male</label>
                    <input type="radio" name="gender" value="female" required/>
                    <label class="gender">Female</label>
                </p>
                <p>
                    <label>Birthdate *
                    </label>
                <input type="date" name="dateofbirth" required="">
                </p>
                <p>
                    <label>Citizenship</label> 
                    <input type="text" name="citizenship" required/>
                    
                </p>
                
            </fieldset>


            <fieldset class="row5">
                <legend>Current or Last School Attended</legend>
                <p>
                    <label>Insert here *</label> 
                    <input type="text" name="currentschool" required/>
                    
                </p>
                <p>
                    <label>Academic Year</label> 
                    <input type="text" name="academicyear" required/>
                    
                </p>
                
            </fieldset>

            <fieldset class="row6">
                <legend>Payment Scheme</legend>
                <p>
                       <label>Cash</label>
                    <input type="radio" name="payment" value="Cash" required/>
                 <label>Installment</label>
                    <input type="radio" name="payment" value="Installment" required/>
                   
                </p>
                
            </fieldset>



            <fieldset class="row4">
                <legend>Parents/Guardian Information</legend>
                <p>
                    <label>Father's Name: </label> (last name first)
                        <input type="text" name="fathersname" required/>
                </p>
                <p>
                    <label>Mobile No. *</label>
                        <input type="text" size="11" maxlength="11" name="fatelno" placeholder="father's mobile no." required/>
                </p>
                <p>
                    <label>Mother's Name: </label> (last name first)
                        <input type="text" name="mothersname" required/>
                </p>
                <p>
                    <label>Mobile No. *</label>
                        <input type="text" size="11" maxlength="11" name="motelno" placeholder="mother's mobile no." required/>
                </p>
                <p>
                    <label>Guardian's Name: </label> (last name first)
                        <input type="text" name="guardiansname" required/>
                </p>
                <p>
                    <label>Mobile No. *</label>
                        <input type="text" size="11" maxlength="11" name="guatelno" placeholder="guardian's mobile no." required/>
                </p>
            </fieldset>
<input type="submit" name="submit" value="Register" />
</form>
</fieldset>

<br /><br />

</div>
<?php } ?>
</body>
</html>
