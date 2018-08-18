<html>
<body>
<?php
$link = mysqli_connect("localhost", "root", "", "zion");
if (isset($_POST['post'])) {
    $question_number = $_POST['question_number'];
    $text = $_POST['text'];


    mysqli_query($db, "UPDATE info SET question_number='$question_number', $text='$text' WHERE question=$question_number");
    $_SESSION['message'] = "Address updated!"; 

    ?>
    <form method="post" action="server.php" >
<form name="edit" action="" method="post">
<input type="text" name="question_number" placeholder="Full Name" required />
<input type="text" name="text" placeholder="Previous School" required />
<input type="submit" name="submit" value="POST" />

</body>
</html>