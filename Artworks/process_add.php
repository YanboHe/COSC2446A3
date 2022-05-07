<?php
session_start();

	$username = $_SESSION['username'];
    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $tags = $_POST['tags'];
	$filename = $_FILES['image']['name'];   //name of the file index is 'name' not 'filename'
	$location = $_FILES['image']['tmp_name'];
	
	move_uploaded_file($location, "images/$filename");
    
    //connect
    $db = mysqli_connect("localhost","root","","artworks") or die(mysqli_error($db));
    
    //the query
    $q = "insert into artwork values(null, '$username', '$title', '$category', '$description', '$tags', '$filename')";
    
    //execute the query
    mysqli_query($db, $q) or die(mysqli_error($db));
    
    //back to gallery
    header("Location:gallery.php");
    exit(0);
?>