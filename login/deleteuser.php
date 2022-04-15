<?php

	$res = array();
	

	if($_SERVER['REQUEST_METHOD']=='POST'){

		if(isset($_POST['id'])){

			require_once '../db.php';

			deleteUs($_POST['id']);


		}

	}

	echo json_encode($res);

?>