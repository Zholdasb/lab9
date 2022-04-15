<?php

	$res = array();
	

	if($_SERVER['REQUEST_METHOD']=='POST'){

		if(isset($_POST['id'])){

			require_once '../db.php';

			deleteFilm($_POST['id']);


		}

	}

	echo json_encode($res);

?>