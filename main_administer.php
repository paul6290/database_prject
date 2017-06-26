<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

<h1> 관리자 페이지 </h1>
<?php
	if($_COOKIE["login_cookie_administer"]==true){
		echo "<a href='insert_artist.php'> 아티스트 추가하기 </a><br>";
		echo "<a href='insert_album.php'> 앨범 추가하기 </a><br>";
		echo "<a href='insert_song.php'> 음악 추가하기 </a><br>";
		echo "<a href='insert_agency.php'> 소속사 추가하기 </a><br><br>";
		echo "<a href='logout_administer.php'> 로그아웃하기 </a><br>";
	}
?>

</body>

</html>

