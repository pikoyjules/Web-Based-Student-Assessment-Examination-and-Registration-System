<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<h1> Admin Page </h1>


<?php
include("auth.php"); //include auth.php file on all secure pages ?>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>

<a href='del.php'>Exam Editor</a>
<div>
<a href='studentprof.php'>Pre-Registration Student Profiling </a>
 <div>
  <a href='juniorview.php'>Junior High Student Profiling </a>
  <div>
  <a href='seniorview.php'>Senior High Student Profiling </a>
<div>
<a href='juniorreg.php'>Junior High Registration</a>
<div>
<a href='seniorreg.php'>Senior High Registration </a>
<div>
<a href="adlogout.php">Logout</a>