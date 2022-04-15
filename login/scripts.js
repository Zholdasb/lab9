$('document').ready(function(){
	getAllUsers();
	getAllFilms();
	$('#addFilm').click(function(){
		addFilms($("#filmName").val(), $("#jenre").val(),$("#imagename").val());
	});
});
function getAllUsers(){
	$.get("getusers.php", {}, function(data){
		users = JSON.parse(data);

		htmlData = "";

		for(i=0; i<users.length; i++){
			htmlData += "<tr>";
			htmlData += "<td>"+users[i]['id']+"</td>";
			htmlData += "<td>"+users[i]['name']+"</td>";
			htmlData += "<td>"+users[i]['surname']+"</td>";
			htmlData += "<td>"+users[i]['login']+"</td>";
			htmlData += "<td>"+users[i]['password']+"</td>";
			htmlData += "<td>"+users[i]['age']+"</td>";
			htmlData += "<td>"+users[i]['gender']+"</td>";
			htmlData += "<td><button class='btn' onclick='deleteUser("+users[i]['id']+")'>DELETE</button></td>";
			htmlData += "</tr>";
		}

		$("#result").html(htmlData);
	});
}
function deleteUser(userId){
	$.post("deleteuser.php", {
		"id":userId
	}, function(data){
		getAllUsers();
	});
}
function getAllFilms(){
	$.get("getFilms.php", {}, function(data){
		films = JSON.parse(data);

		htmlData1 = "";

		for(i=0; i<films.length; i++){
			htmlData1 += "<tr>";
			htmlData1 += "<td>"+films[i]['id']+"</td>";
			htmlData1 += "<td>"+films[i]['film_name']+"</td>";
			htmlData1 += "<td>"+films[i]['film_genre']+"</td>";
			htmlData1 += "<td>"+films[i]['image']+"</td>";
			htmlData1 += "<td><button class='btn' onclick='deleteFilm("+films[i]['id']+")'>DELETE</button></td>";
			htmlData1 += "</tr>";
		}

		$("#result02").html(htmlData1);
	});
}

function deleteFilm(proId){
	$.post("deleteFilm.php", {
		"id":proId
	}, function(data){
		getAllFilms();
	});
}