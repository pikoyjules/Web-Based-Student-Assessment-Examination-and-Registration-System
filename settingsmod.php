

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Settings</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body style="background-color:steelblue;">
<?php
    require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['subofans'])){
        $subofans = stripslashes($_REQUEST['subofans']); // removes backslashes
        $subofans = mysqli_real_escape_string($con,$subofans); //escapes special characters in a string
        $timer = stripslashes($_REQUEST['timer']); // removes backslashes
        $timer = mysqli_real_escape_string($con,$timer); //escapes special characters in a string
        $typeofexam = stripslashes($_REQUEST['typeofexam']); // removes backslashes
        $typeofexam = mysqli_real_escape_string($con,$typeofexam); //escapes special characters in a string
        $examperiod = stripslashes($_REQUEST['examperiod']);
        $examperiod = mysqli_real_escape_string($con,$examperiod);
        $schoolyear = stripslashes($_REQUEST['schoolyear']);
        $schoolyear = mysqli_real_escape_string($con,$schoolyear);
   




     $query = "REPLACE INTO `settings` (subofans, timer, typeofexam, examperiod, schoolyear) VALUES ('$subofans', '$timer', '$typeofexam', '$examperiod', '$schoolyear') "; 

      
       


        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'><h3>Settings has been Applied.</h3></div>";
    



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
    
    
    
    <h1>Settings</h1>
    <div id="wrapper">
<div class="form_div">
 <form action="" class="register">
 <h3> Submission of Answers</h3>
 <input type="radio" name="subofans" value="Single"> Single<br>
 <input type="radio" name="subofans" value="Multiple"> Multiple<br>
<br>
<br>
    <h2>Timer Setting </h2>
    <select name="timer">
    <option value="timer off">Timer Off</option>
    <option value="1 hour">1 Hour</option>
    <option value="2 hours">2 Hours</option>
    <option value="3 hours">3 Hours</option>
<br>
<br>
<h2> type of exam </h2>
 <input type="radio" name="typeofexam" value="multiple choice"> Multiple Choice<br>
 <input type="radio" name="typeofexam" value="indentification"> identification<br>
<br>
<br>
<input type="text" name="examperiod" placeholder="Exam Period" required />
<br>
<br>
<input type="text" name="schoolyear" placeholder="School Year" required />
<br>
<br>
<input name="submit" type="submit" value="Submit" />
<br>
<br>
</form>
</div>

</form>
</fieldset>

<br /><br />

</div>
<?php } ?>
</body>
</html>
