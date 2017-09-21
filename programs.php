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
					<li class="active">
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
	<h2>
	Sport
	</h2>
	</div>
	
	
	<div class="jumbotron">
        <table class="wsite-multicol-table">
          <tbody class="wsite-multicol-tbody">
            <tr class="wsite-multicol-tr">
              <td class="wsite-multicol-col" style="width:30%; padding:0 15px;">
				<h2>
					Sport Programs
				</h2>
				<div>
					<span>
						Off Site Sport programs can not only encourage people to communicate in English but also extend social network, &nbsp;making friends, and talk freely
						<br>
						Sport class with a focus on developing personal finess, it is also a great way to protect yourself.. So come ready to work hard and sweat! Food and drinks are provided. &nbsp;
					</span>
				</div>
			  </td>
              <td class="wsite-multicol-col" style="width:70%; padding:0 15px;">
				<div id="img_box">
					<img class="resize_horizontal" src="images/357599894.jpg" />
				</div>
			  </td>
            </tr>
          </tbody>
        </table>
	</div>
		
	
	<div class="jumbotron">
        <table class="wsite-multicol-table">
          <tbody class="wsite-multicol-tbody">
            <tr class="wsite-multicol-tr">
			  <td class="wsite-multicol-col" style="width:70%; padding:0 15px;">
				<div id="img_box">
					<img class="resize_horizontal" src="images/384193965.jpg" />
				</div>
			  </td>
              <td class="wsite-multicol-col" style="width:30%; padding:0 15px;">
				<h2>
					Cooking
				</h2>
				<div>
					<span>
						Our cooking courses will be arranged to allow student sharing ingredients, way of making food, and most importantly the food culture..&nbsp;
						<br>
						Teachers will share much knowledge of western food culture and making actual food. Abundant food materials will be provided. &nbsp;
						<br>
						<br>
						​Be creative and join us !&nbsp;
					</span>
				</div>
			  </td> 
            </tr>
          </tbody>
        </table>
	</div>
	
	<div class="jumbotron">
        <table class="wsite-multicol-table">
          <tbody class="wsite-multicol-tbody">
            <tr class="wsite-multicol-tr">
              <td class="wsite-multicol-col" style="width:30%; padding:0 15px;">
				<h2>
					ART
				</h2>
				<div>
					<span>
						​In this English Life Club, students are able to design their own products, make their own styles of painting. They paint it out and share their ideas about their design or art product...&nbsp;
						<br>
						<br>
						It is an opportunity to appy English while painting and developing personal interest...&nbsp;
					</span>
				</div>
			  </td>
              <td class="wsite-multicol-col" style="width:70%; padding:0 15px;">
				<div id="img_box">
					<img class="resize_horizontal" src="images/645294727.jpg" />
				</div>
			  </td>
            </tr>
          </tbody>
        </table>
	</div>
	
	<div class="jumbotron">
        <table class="wsite-multicol-table">
          <tbody class="wsite-multicol-tbody">
            <tr class="wsite-multicol-tr">
			  <td class="wsite-multicol-col" style="width:70%; padding:0 15px;">
				<div id="img_box">
					<img class="resize_horizontal" src="images/735409144_orig.jpg" />
				</div>
			  </td>
              <td class="wsite-multicol-col" style="width:30%; padding:0 15px;">
				<h2>
					Culture Sharing
				</h2>
				<div>
					<span>
						Culture Sharing programs will allow learners to &nbsp;know more &nbsp;about international culture, dressing, costumes, behaviors, traditions, and also way of living.. For those who want to move and live to another country, it can prepare themselves; for those who work in international companies, it can better help with commumication and understanding in career development&nbsp;
					</span>
				</div>
			  </td> 
            </tr>
          </tbody>
        </table>
	</div>
	
	<div class="jumbotron">
        <table class="wsite-multicol-table">
          <tbody class="wsite-multicol-tbody">
            <tr class="wsite-multicol-tr">
              <td class="wsite-multicol-col" style="width:30%; padding:0 15px;">
				<h2>
					Movie and Music
				</h2>
				<div>
					<span>
						Detailed actions or daily talks in the movie or music will help student to better understand English application and expressions... &nbsp;Assigned teacher will share the knowledge in the music or movie to student and inspire them to learn and speak from every possible way.&nbsp;
					</span>
				</div>
			  </td>
              <td class="wsite-multicol-col" style="width:70%; padding:0 15px;">
				<div id="img_box">
					<img class="resize_horizontal" src="images/101018429_orig.jpg" />
				</div>
			  </td>
            </tr>
          </tbody>
        </table>
	</div>
	
	<div class="jumbotron">
        <table class="wsite-multicol-table">
          <tbody class="wsite-multicol-tbody">
            <tr class="wsite-multicol-tr">
			  <td class="wsite-multicol-col" style="width:70%; padding:0 15px;">
				<div id="img_box">
					<img class="resize_horizontal" src="images/853511913.jpg" />
				</div>
			  </td>
              <td class="wsite-multicol-col" style="width:30%; padding:0 15px;">
				<h2>
					Travel
				</h2>
				<div>
					<span>
						Travel encourages student to participate and engage into the topic and meanwhile talk freely... Join us at the travelling programs maybe hiking is a good choice with other memebers
					</span>
				</div>
			  </td> 
            </tr>
          </tbody>
        </table>
	</div>
	
	<div class="jumbotron">
        <table class="wsite-multicol-table">
          <tbody class="wsite-multicol-tbody">
            <tr class="wsite-multicol-tr">
              <td class="wsite-multicol-col" style="width:30%; padding:0 15px;">
				<h2>
					DIY Activity 
				</h2>
				<div>
					<span>
						DIY activity is the most popular programs in ELC as student can not only extend their imagination but also discovery their much potentials.. Sharing and talkin g with group member about self design experience is a good choice.&nbsp;
					</span>
				</div>
			  </td>
              <td class="wsite-multicol-col" style="width:70%; padding:0 15px;">
				<div id="img_box">
					<img class="resize_horizontal" src="images/783956996.jpg" />
				</div>
			  </td>
            </tr>
          </tbody>
        </table>
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
