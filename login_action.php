<?php
include("connect.php"); 
$tbl_name="user_levels"; 

$username=$_POST['username']; 
$password=$_POST['password']; 

$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($dbhandle,$username);
$password = mysqli_real_escape_string($dbhandle,$password);

$result = mysqli_query($dbhandle, "SELECT * FROM $tbl_name WHERE username='$username' AND password='$password'");

if(mysqli_num_rows($result) != 1){
						echo "<script>alert(' Wrong Username or Password Access Denied !!! Try Again');
						window.location='index.php';
						</script>";
					}else{
						$row = mysqli_fetch_assoc($result);	
						if($row['userlevel'] == Admin){
							header('location: admin.php');
						}else if($row['userlevel'] == Registrar ){
							header("Location: registrar.php");
						}else if($row['userlevel'] == Teacher ){
							header("Location: teacher.php");
						}
						
						else{
							echo "<script>alert('Wrong Username or Password Access Denied !!! Try Again');
						window.location='index.php';
						</script>";
						}
					}

  						 	
?>
