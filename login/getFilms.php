<?php

	if($_SERVER['REQUEST_METHOD']=='GET'){

		require_once '../db.php';

		$result02 = getAllFilms();

		echo json_encode($result02);

	}

?>