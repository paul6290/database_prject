<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

<h1> 앨범 입력 </h1>

<form enctype="multipart/form-data" action="insert_album_result.php" method = "post">


	아이디 : <INPUT TYPE = "text" NAME="album_id"><br>
	타이틀 : <INPUT TYPE ="text" NAME = "album_title"><br>
	장르 : <INPUT TYPE ="text" NAME = "album_genre"><br>
	발매일 : <INPUT TYPE="text" NAME = "album_release_date"><br>
	소개 : <INPUT TYPE="text" NAME = "album_introduction"><br>
	아티스트 ID : <INPUT TYPE = "text" NAME="album_artist_id"><br>
	<input type="file" name ="album_image">
	<input type="submit" value = "upload">

</form>




</body>

</html>

