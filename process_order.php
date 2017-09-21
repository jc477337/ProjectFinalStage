<?php
include_once 'db_connect.php';
include_once 'functions.php';
 
sec_session_start(); // Our custom secure way of starting a PHP session.

if (login_check($mysqli) == false)
	 header('Location: login.php');
 
	$userid = $_SESSION['user_id'];
	
	if (isset($_POST['action'], $_POST['courseid'])) {
		$courseid = $_POST['courseid'];
		if ($_POST['action'] == "add") {
			$qty = $_POST['qty'];
			if ($insert_stmt = $mysqli->prepare("INSERT INTO orders (userid, courseid, qty) VALUES (?, ?, ?)")) {
				$insert_stmt->bind_param('iii', $userid, $courseid, $qty);
				if (! $insert_stmt->execute()) {
					header('Location: error.php?err=Add course to chart failure: INSERT');
				}
			}
		}
		if ($_POST['action'] == "remove") {
			$stmt = "DELETE FROM orders WHERE userid=".$userid." and courseid=".$courseid;
			$mysqli->query($stmt);
		}
		header('Location: ../chart.php');
	}
?>