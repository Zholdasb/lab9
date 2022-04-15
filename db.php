<?php
	try {
        $connection = new PDO('mysql:host=localhost;dbname=cinemadb', 'root', '');
    } catch(PDOException $e){
        echo $e->getMessage();
    }


	function getAllFilms(){
		global $connection;
		$query = $connection->prepare("select * from films");
		$query->execute();
		$results = $query->fetchAll();
		return $results;
	}

	function getGenres(){
		global $connection;
		$query = $connection->prepare("select * from genres");
		$rows = $query->execute(array());
		$results = $query->fetchAll();
		return $results;
	}
	function getRoleByLogin($login){
		global $connection;
		$query = $connection->prepare("SELECT role_name FROM user_role where user_login = :ulog");
		$rows = $query->execute(array("ulog"=>$login));
		$results = $query->fetch();
		return $results;
	}
	function getFilmsByGenreId($genre_id){
		global $connection;
		$query = $connection->prepare("SELECT film_name, id, film_genre, image
               FROM films where film_genre= :gid");
		$rows = $query->execute(array("gid"=>$genre_id));
		$results = $query->fetchAll();
		return $results;
	}

	function getAll(){
		global $connection;
		$query = $connection->prepare("select * from users");
		$query->execute();
		$results = $query->fetchAll();
		return $results;
	}

	
	function addUs($name, $surname, $login, $password, $age, $gender){
		global $connection;
		$query = $connection->prepare("insert into users(name, surname, login, password, age, gender) VALUES(:n, :sn, :l, :p, :a, :g)");
		$rows = $query->execute(array(":n"=>$name, ":sn"=>$surname, ":l"=>$login, ":p"=>$password, ":a"=>$age, ":g"=>$gender));

		return $rows>0;
	}
	function addRoles($role,$login){
		global $connection;
		$query = $connection->prepare("insert into user_role(role_name, user_login) VALUES(:n, :l)");
		$rows = $query->execute(array(":n"=>$role, ":l"=>$login));

		return $rows>0;
	}
	function addFilms($fname,$fgenre,$image){
		global $connection;
		$query = $connection->prepare("insert into films(film_name, film_genre, image) VALUES(:n, :l, :k)");
		$rows = $query->execute(array(":n"=>$fname, ":l"=>$fgenre, ":k"=>$image));

		return $rows>0;
	}
	function deleteUs($id){
		global $connection;
		$query = $connection->prepare("delete from users where id=:uid");
		$rows = $query->execute(array("uid"=>$id));

		return $rows>0;
	}
	function deleteFilm($id){
		global $connection;
		$query = $connection->prepare("delete from films where id=:fid");
		$rows = $query->execute(array("fid"=>$id));

		return $rows>0;
	}
	function getOneUserById($id){
		global $connection;
		$query = $connection->prepare("select * from users where id=:sid");
		$rows = $query->execute(array("sid"=>$id));
		$result = $query->fetch();
		return $result;
	}

	function updateUser($id, $login, $password, $name, $age){
		global $connection;
		$query = $connection->prepare("
			update users
			SET login=:l, password=:p, name=:n, age=:a
			WHERE id=:sid
			");
		$rows = $query->execute(array(":l"=>$login, ":p"=>$password, ":n"=>$name, ":a"=>$age, "sid"=>$id));
		return $rows>0;
	}

	function getOneUserByLogin($login){
		global $connection;
		$query = $connection->prepare("select * from users where login=:login");
		$rows = $query->execute(array("login"=>$login));
		$result = $query->fetch();
		return $result;
	}

?>