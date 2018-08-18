<?php session_start()  ?>

<?php

include("connect.php"); 
$tbl_name="user_levels"; 

$username=$_POST['username']; 
$password=$_POST['password']; 
$user_level = $_POST['user_level']; 
$lastname=$_POST['lastname']; 
$firstname=$_POST['firstname']; 


$result = mysqli_query($dbhandle, "INSERT INTO $tbl_name (username,password,userlevel,lastname,firstname) VALUES ('$username','$password','$user_level','$lastname','$firstname')");


if($result===TRUE)
{
echo "<script>alert('User Account has been saved in the database.');
						window.location='adminlogin.php';
						</script>";
}						
else
{
  echo"The query did not run";
} 
mysqli_close($result);


?>

