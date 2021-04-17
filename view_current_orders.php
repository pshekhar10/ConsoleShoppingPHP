<?php
session_start();
$title = 'Pending Orders';
//require('../../../secure_files/mysql.inc.php');
require('./includes/mysql.inc.php');
$errors_array = array();
require('./includes/functions.inc.php');
if(isset($_SESSION['playstation_customers_id']) && isset($_SESSION['full_name'])){
	$playstation_customers_id = $_SESSION['playstation_customers_id'];
	if(isset($_GET['playstation_orders_id'])){
		$playstation_orders_id = $_GET['playstation_orders_id'];
		require('./includes/cancel_orders.inc.php');
	}else{
		include('./includes/header.inc.php');
		require('./includes/view_current_orders.inc.php');
	}
	include('./includes/footer.inc.php');
}else{
	redirect('You are not an authentic user', 'login.php', 1);
}
?>