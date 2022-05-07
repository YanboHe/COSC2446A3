<?php 
    $page_title="Artworks";
    include("header.inc");
    include("nav.inc");
	include("category.inc");
 ?>
 <!-- start of main content -->
 
  <div id="main-content">
 
<?php 
	$ct = $_GET['ct']; 
	$db = mysqli_connect("localhost", "root","", "artworks")  or die(mysqli_error($db));
	

	$q = "select filename from artwork where category ='{$ct}' ";
	
	$results = mysqli_query($db, $q) or die(mysqli_error($db));
    
    while($row=mysqli_fetch_array($results))
    {
		$filename=$row['filename'];
		print "<a href='artwork.php?id={$row['filename']}'><img src=images/$filename height= height= '100' width='100'></a>";
    }

?>
 </div>
  <?php 
    include("footer.inc");
 ?>