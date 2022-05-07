<?php
	if(isset($_POST['username']))
        $username = $_POST['username'];
	if(isset($_POST['password']))
        $password = $_POST['password'];
	
	$db = mysqli_connect("localhost", "root","", "artworks");
	$q = "insert into member values(null, '$username', SHA('$password'), curdate())";
	mysqli_query($db, $q) or die(mysqli_error($db));
	
	header("Location:login.php");
?>

