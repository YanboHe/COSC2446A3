<?php 
    $page_title="Login";
    include("header.inc");
    include("nav.inc");

 ?>
 <!-- start of main content -->
<div id="main-content">
    <h2>Login</h2>
    <form method="post" action="process_login.php">
        Username:<input type="text" name="username" /><br>
        Password:<input type="password" name="password" /><br>
        <input type="submit" value="Login" />
    </form>
 </div>
 <!-- end of main content -->
 
 <?php 
    include("footer.inc");
 ?>