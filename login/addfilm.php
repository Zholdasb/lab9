<?php

	$res = array();
	$res['message'] = "Couldn't add film";
	$res['status'] = "ERROR";

	if($_SERVER['REQUEST_METHOD']=='POST'){

		if(isset($_POST['filmName'])&&$_POST['filmName']!=""&&isset($_POST['imagename'])){

			require_once '../db.php';
			$films = getAllFilms();
			$i=0;
			foreach ($films as $f) {
				if($_POST['filmName']==$f['film_name']){
					$i++;
				}
			}
			if($i==0){
				addFilms(trim($_POST['filmName']), $_POST['jenre'], $_POST['imagename']);
				$res['message'] = "Film added successfully";
				$res['status'] = "OK";
				header("Location: moderatorpage.php");
			}else{
				$res['message'] = "Film with name \"".$_POST['filmName']."\" is already exist";
				$res['status'] = "ERROR";
				header("Location: moderatorpage.php");
			}
		}
	}
	echo json_encode($res);
?>