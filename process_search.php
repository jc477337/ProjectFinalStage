<?php
include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Business 2</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="../css/custom.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<div class="jumbotron">
	
		<div class="spacer" style="height: 50px;"> </div>
		<div style="height: 800px; padding-left:100px">
		<?php
			$coursename = $_POST['coursename'];
			$price = $_POST['price'];
			if ($price == '') {
				$query = "select coursename, id, price from courses where coursename like '%".$coursename."%'";
			}
			else {
				$query = "select coursename, id, price from courses where coursename like '%".$coursename."%' and price=".$price;
			}
			
			$result = $mysqli->query($query);
			
				
			$num_results = $result->num_rows;
			echo '<h2>Searching Results</h2>';
			echo '<table style="width:100%">';
				echo '<tr>';
					echo '<th><h2>Course</h2></th>';
					echo '<th><h2>Price</h2></th>';
				echo '</tr>';
				
				for ($i=0; $i < $num_results; $i++) {
					$row = $result->fetch_assoc();	
					echo '<tr>';
						echo '<th><font size="5px"><a href="../course_info.php?courseid='.$row['id'].'">'.$row['coursename'].'</a></font></th>';
						echo '<th><font size="5px">'.$row['price'].'</font></th>';
					echo '</tr>';
				}
			echo '</table>';
		?>
		</div>
	
	</div>
	
	<!-- jQuery -->
    <script src="../js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
	
	<!-- IE10 viewport bug workaround -->
	<script src="../js/ie10-viewport-bug-workaround.js"></script>
</body>