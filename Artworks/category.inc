<!-- start of list of category -->
<div id="category">
<form>
<select id="menu" onchange="navigate();">
<option value="#">Category</option>
<?php
	$db = mysqli_connect("localhost", "root","", "artworks")  or die(mysqli_error($db));
	$q = "select distinct category from artwork";
	$results = mysqli_query($db, $q) or die(mysqli_error($db));
	
	while($row=mysqli_fetch_array($results)) {
		
		print "<option value='galleryctg.php?ct={$row['category']}'>{$row['category']}</option>";
	}
?>

</select>
</form>
</div>
<!-- end of list of category -->