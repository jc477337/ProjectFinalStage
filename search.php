<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start();
 
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
        <link rel="stylesheet" href="../css/custom.css" />
        <script type="text/JavaScript" src="../js/sha512.js"></script> 
        <script type="text/JavaScript" src="../js/forms.js"></script> 
    </head>
    <body>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
		
		
		<div>
		<div class="login-box">
			<div class="login-inner-box">
				<h1>
				<div class="login-title">Search</div>
				</h1>
			</div>
				
			<form action="process_search.php" method="post" name="search_form">                      
				<input type="text" class="email-input" name="coursename" placeholder="Course Name" />
				<input type="price" class="email-input" name="price" id="price" placeholder="Price"/>
				<input type="submit" class="login-button"
					value="Search"/> 
			</form>
		</div>
		</div>
			
		<div>	

		</div>
    </body>
</html>