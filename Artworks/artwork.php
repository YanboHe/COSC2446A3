<?php 
    $page_title="Artworks";
    include("header.inc");
    include("nav.inc");
 ?>
 <!-- start of page specific content -->
	<section>
		 <?php
            $id = $_GET['id']; 
            
            //connect
            $db = mysqli_connect("localhost","root","","artworks") or die(mysqli_error($db));
            
            $q = "select * from artwork where filename like '$id' ";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
            
            while($row=mysqli_fetch_array($results))
            {
                print "<h2>{$row['title']}</h2>";
                print "<h3>By: {$row['username']}</h3>";
				print "<h3>Category: {$row['category']}</h3>";
				print "<img src='images/{$row['filename']}' />";
				print "<p>{$row['description']}</p>";
            }
        ?>
	</section>
<!-- end of page specific content -->

<?php
	include("footer.inc");
?>