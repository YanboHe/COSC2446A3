<?php
session_start();
if(!isset($_SESSION['username']))
{
header("Location:login.php");
exit(0);
}

    $page_title="New Image";
    include("header.inc");
    include("nav.inc");

?>
   <section>
		<h2>Add New Image</h2>
		<form method=post action=process_add.php enctype="multipart/form-data">
			Title<input type=text name=title><br>
			Category<input type=text name=category><br>
			Description<br>
			<textarea rows=10 cols=50 name=description></textarea><br>
			Tags<input type=text name=tags><br>
			<input type="file" name = "image"><br>
			<input type=submit value="Add New Image">
		</form>
	</section>
	
<?php 
    include("footer.inc");
 ?>