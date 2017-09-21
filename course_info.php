<?php
include_once 'apps/db_connect.php';
include_once 'apps/functions.php';

sec_session_start();
?>

<!DOCTYPE html>
<!-- Template by Quackit.com -->
<!-- Images by various sources under the Creative Commons CC0 license and/or the Creative Commons Zero license. 
Although you can use them, for a more unique website, replace these images with your own. -->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Business 2</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/social-icons.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                	<img src="images/logo.jpeg" width="62" height="46">
                </a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="./">Home</a>
                    </li>
                    <li>
                        <a href="./about.php">About ELC</a>
                    </li>
					<li>
                        <a href="./programs.php">Programs</a>
                    </li>
					<li>
                        <a href="./courses.php">Courses in ELC</a>
                    </li>
					<li>
                        <a href="./operation_team.php">Operation Team</a>
                    </li>
					<li>
                        <a href="./community.php">ELC Community</a>
                    </li>
					<li>
                        <a href="./contact.php">Contact</a>
                    </li>
					<li>
						<?php if (login_check($mysqli) == true) : ?>
							
							<a href="apps/logout.php"><?php echo htmlentities($_SESSION['username']); ?> | Logout</a>
						<?php else : ?>
							<a href="apps/login.php">Log in | Register</a>
						<?php endif; ?>
                    </li>
					<li>
                       <a href="apps/search.php">Search</a>
                    </li>
                    <li>
                        <a href="./chart.php"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

	<div class="jumbotron">
	
	<?php
		$courseid = $_GET['courseid'];
		
		$query = "select * from courses where id=".$courseid;
		$result = $mysqli->query($query);
		$row = $result->fetch_assoc();
		
		echo '<div class="info-container">';
			echo '<div class="product-image">';
				echo '<div><img class="resize_horizontal" src="images/courses/s811306257112453669_'.$row['image'].'"/></div>';
			echo '</div>';
			echo '<div class="product-info">';
				echo '<h2>';
					echo $row['coursename'];
				echo '</h2>';
				echo '<br>';
				
				echo '<div class="price-container">';
					echo '<div class="course-price">';
						echo 'AU$'.$row['price'];
					echo '</div>';
					echo '<div class="course-identifier">SKU: '.$row['sku'].'</div>';
				echo '</div>';
				
				echo '<div class="course-short-info">';
					echo 'Time: '.$row['starttime'];
					echo '<br>';
					echo 'Place: '.$row['place'];
					echo '<br>';
					echo 'Remarks: '.$row['remarks'];
					echo '<br>';
					echo '<br>';
				echo '</div>';
				
				echo '<div class="share-container">';
					echo '<ul>';
					echo '</ul>';
				echo '</div>';
				
				$coursename = urlencode($row['coursename']);
				$description = urlencode("Time: ".$row['starttime'].". Place: ".$row['place'].". Remarks: ".$row['remarks']);
				$imagename = urlencode($row['image']);
				$sharing = "
<ul id='wsite-com-product-social-sharing'>
  <li class='share-list'>
    <a class='wsite-com-product-social-facebook' title='Share on Facebook' data-network='facebook'
    href='https://facebook.com/sharer.php?u=http%3A%2F%2Fwww.enlifeclub.com%2Fcourse_info.php?courseid={$row['id']}'
    target='_blank'>Facebook</a>
  </li>
  <li class='share-list'>
    <a class='wsite-com-product-social-twitter' title='Share on Twitter' data-network='twitter'
    href='https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.enlifeclub.com%2Fcourse_info.php?courseid={$row['id']}&amp;text={$coursename}'
    target='_blank'>Twitter</a>
  </li>
  <li class='share-list'>
    <a class='wsite-com-product-social-pinterest' title='Share on Pinterest' data-network='pinterest'
    href='https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fwww.enlifeclub.com%2Fcourse_info.php?courseid={$row['id']}&amp;description={$description}++&amp;media=http%3A%2F%2Fwww.enlifeclub.com%2Fimages%2Fcourses%2Fs811306257112453669_{$imagename}'
    target='_blank'>Pinterest</a>
  </li>
  <li class='share-list'>
    <a class='wsite-com-product-social-plus' title='Share on Google+' data-network='plus'
    href='https://plus.google.com/share?url=http%3A%2F%2Fwww.enlifeclub.com%2Fcourse_info.php?courseid={$row['id']}'
    target='_blank'>Google+</a>
  </li>
";
				echo '<div class="share-container">';
					echo $sharing;
				echo '</div>';
				
				echo '<div class="course-short-info">';
				echo '<strong>';
					if (!is_null($row['friend'])) {
						echo 'Friends: '.$row['friend'];
						echo '<br>';
					}
					if (!is_null($row['fee'])) {
						echo 'Fee: '.$row['fee'];
						echo '<br>';
					}
					if (!is_null($row['levels'])) {
						echo 'Level: '.$row['levels'];
						echo '<br>';
					}
					if (!is_null($row['offsite'])) {
						echo 'Off Site: '.$row['offsite'];
						echo '<br>';
					}
				echo '</strong>';
				echo '</div>';
				echo '<form id="buy-course" action="apps/process_order.php" method="post">';
					echo '<div>';
					echo '<label for="course-qty" class="course-short-info">';
						echo 'Quantity';
					echo '</label>';
					echo '<br>';
					echo '<input id="course-qty" class="wsite-input" style="width:70px" name="qty" type="number" maxlength-"3" min="0" value="1"/>';
					echo '</div>';
					echo '<input type="hidden" name="courseid" value="'.$row['id'].'">';
					echo '<input type="hidden" name="action" value="add">';
					if ($row['available'] == true)
						echo '<input class="wsite-button" type="submit" name="buy" value="Add to Cart">';
					else
						echo '<input class="wsite-button" type="submit" name="buy" value="Not Available" disabled>';
				echo '</form>';
				
			echo '</div>';
		echo '</div>';
		
	?>

	
	</div>
		
	<!-- Footer -->
	<footer>

		<!-- Footer Links -->
		<div class="footer-info">
			<div class="container">
				<div class="row">
					<div class="col-sm-4 footer-info-item">
						<h3>Information</h3>
						<ul class="list-unstyled">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Customer Service</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Sitemap</a></li>
							<li><a href="#">Orders &amp; Returns</a></li>
						</ul>
					</div>
					<div class="col-sm-4 footer-info-item">
						<h3>My Account</h3>
						<ul class="list-unstyled">
							<li><a href="#">Sign In</a></li>
							<li><a href="#">View Cart</a></li>
							<li><a href="#">My Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="#">Help</a></li>
						</ul>	
					</div>
					<div class="col-sm-4 footer-info-item">
						<h3><span class="glyphicon glyphicon-list-alt"></span> Newsletter</h3>
						<p>Sign up for exclusive offers.</p>
						<div class="input-group">
							<input type="email" class="form-control" placeholder="Enter your email address">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="button">
									Subscribe!
								</button>
							</span>
						</div>
					</div>
				</div><!-- /.row -->
			</div><!-- /.container -->
        </div>
        
        <!-- Copyright etc -->
        <div class="small-print">
        	<div class="container">
        		<p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
        		<p>Copyright &copy; jc477337 </p>
        	</div>
        </div>
        
	</footer>

	
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>
	
</body>

</html>
