<?php 
    $page_title="Register";
    include("header.inc");
    include("nav.inc");
 ?>
 <!-- start of main content -->
 <div id="main-content">
        <h2>Register</h2>
        <form method="post" action="process_register.php">
            Username:<input type="text" name = "username" /><br>
            Password:<input type="password" name="password" /><br>
            <input type="submit" value="Register Now" />
        </form>
 
 </div>
 <!-- end of main content -->
 
 <?php 
    include("footer.inc");
 ?>