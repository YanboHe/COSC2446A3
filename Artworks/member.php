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
            
            $q = "select filename from artwork where username like '$id' ";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
            
            while($row=mysqli_fetch_array($results))
            {
               $filename=$row['filename'];
		print "<a href='artwork.php?id={$row['filename']}'><img src=images/$filename height= height= '100' width='100'></a>";
    }
        ?>
	</section>
<!-- end of page specific content -->

<?php
	include("footer.inc");
?>