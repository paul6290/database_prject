<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

<h1> 아티스트 입력 </h1>

<form enctype="multipart/form-data" action="insert_artist_result.php" method = "post">


	아이디 : <INPUT TYPE = "text" NAME="artist_id"><br>
	이름 : <INPUT TYPE ="text" NAME = "artist_name"><br>
	데뷔날짜 : <INPUT TYPE ="text" NAME = "artist_debut"><br>
	국가 : <INPUT TYPE="text" NAME = "artist_nation"><br>
	장르 : <INPUT TYPE="text" NAME = "artist_genre"><br>
	스타일 : <INPUT TYPE="text" NAME = "artist_style"><br>
	유형 : <INPUT TYPE="text" NAME = "artist_type"><br>
	소속사 아이디 : <INPUT TYPE = "text" NAME="artist_agency_id"><br>
	<input type="file" name ="artist_image">
	<input type="submit" value = "upload">

</form>




</body>

</html>

