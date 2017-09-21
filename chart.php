<?php
include_once 'apps/db_connect.php';
include_once 'apps/functions.php';

sec_session_start();

if (login_check($mysqli) == false)
	header('Location: apps/login.php');
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
                    <li class="active">
                        <a href="./chart.php"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
    </nav>

	<div class="jumbotron">
	
		<div class="spacer" style="height: 50px;"> </div>
		<div style="height: 800px; padding-left:100px">
		<?php
			$query = "select coursename, MAX(cid) as courseid, SUM(qty) as qty from (select c.coursename, c.id as cid, o.qty from orders as o inner join courses as c on o.courseid = c.id where o.userid=".$_SESSION['user_id'].") as T group by coursename";
			$result = $mysqli->query($query);
			
				
			$num_results = $result->num_rows;

			echo '<table style="width:100%">';
				echo '<tr>';
					echo '<th><h2>Course</h2></th>';
					echo '<th><h2>Quantity</h2></th>';
					echo '<th></th>';
				echo '</tr>';
				
				for ($i=0; $i < $num_results; $i++) {
					$row = $result->fetch_assoc();	
					echo '<tr>';
						echo '<th><font size="5px"><a href="course_info.php?courseid='.$row['courseid'].'">'.$row['coursename'].'</a></font></th>';
						echo '<th><font size="5px">'.$row['qty'].'</font></th>';
						echo '<th>';
							echo '<form action="apps/process_order.php" method="post">';
							echo '<input type="hidden" name="courseid" value="'.$row['courseid'].'">';
							echo '<input type="hidden" name="action" value="remove">';
							echo '<input type="submit" class="wsite-button" name="buy" value="Remove">';
							echo '</form>';
						echo '</th>';
					echo '</tr>';
				}
			echo '</table>';
		?>
		</div>
	
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
