<?php 
    session_start();
     
    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);
    $_SESSION;
?>

<!DOCTYPE html>
<html>
<head>
	

	<title>team IDIOTS assignment</title>
</head>
<body>
     <a href="Logout.php">Logout</a>
     <h1>This is the index page</h1>
     <br>
     Hello, <?php echo $user_data['user_name']; ?>
</body>
</html>