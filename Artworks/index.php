<?php 
    session_start();
    $favourites = array();
    $_SESSION['fav'] = $favourites;
    
    $page_title="Artworks Home";
    include("header.inc");
    include("nav.inc");
		
 ?>
 
 <?php
	$files = scandir("images/");
?>

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	<li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
	<li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
  
	<?php
		$i = 0;
		for ($a = 2; $a < 6; $a++):
	?>
	
    <div class="item <?php echo $i == 0 ? 'active': ''; ?>">
      <img src="images/<?php echo $files[$a]; ?>" alt="First">
    </div>

	<?php 
		$i++;
		endfor;
	?>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 
 <div id="main-content">
	<tr>&nbsp;</tr>
    <h3>Our mission is to create a global network of art museum leaders in audience
		engagement committed to advancing the public value of museums through 
		supporting an authentic internal and external focus on the audience experience. 
		</h3>
 
 </div>
<tr>&nbsp;</tr>

 <div class="container2">
			<div class=row>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
						reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
						pariatur. Excepteur sint occaecat cupidatat non proident, 
						sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
						reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
						pariatur. Excepteur sint occaecat cupidatat non proident, 
						sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>						
				</div>
				<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
						Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
						nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
						reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
						pariatur. Excepteur sint occaecat cupidatat non proident, 
						sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
</div>
		
<section>
	<?php
            //connect
            $db = mysqli_connect("localhost","root","","artworks") or die(mysqli_error($db));
            
            $q = "select distinct username from artwork ";
            
            $results = mysqli_query($db, $q) or die(mysqli_error($db));
            
            while($row=mysqli_fetch_array($results))
            {
                print "<a href='member.php?id={$row['username']}'><p>{$row['username']}</p>";
            }
        ?>
	</section>
 <!-- end of main content -->

 <?php 
    include("footer.inc");
 ?>