<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

<h1>음악 검색 </h1>

<?php
	if($_COOKIE["login_cookie_consumer"]==false){
		header ('Location: http://localhost/music_site/login.html');
	}else{

	}
?>

<FORM method = "post" action="artist_search.php">
	아티스트: <INPUT TYPE="text" NAME = "artist"> <INPUT TYPE="submit" value="검색">
</FORM>

<FORM method = "post" action="song_search.php">
	노래: <INPUT TYPE="text" NAME = "song"> <INPUT TYPE="submit" value="검색">
</FORM>

<?php
	if($_COOKIE["login_cookie_consumer"]==true){
		echo "<a href='my_music.php'> 내 음악 페이지로 가기 </a><br><br>";
		echo "<a href='logout_consumer.php'> 로그아웃하기 </a><br>";
	}
?>

</body>

</html>

