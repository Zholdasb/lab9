<?php

	if($_SERVER['REQUEST_METHOD']=='GET'){

		require_once '../db.php';

		$result = getAll();

		echo json_encode($result);

	}

?>