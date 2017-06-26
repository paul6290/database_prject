<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>

<body>

<h1> 음악 입력 </h1>

<form enctype="multipart/form-data" action="insert_song_result.php" method = "post">


	아이디 : <INPUT TYPE = "text" NAME="song_id"><br>
	타이틀 : <INPUT TYPE ="text" NAME = "song_title"><br>
	작사가 : <INPUT TYPE ="text" NAME = "song_lyricist"><br>
	작곡가 : <INPUT TYPE="text" NAME = "song_songwriter"><br>
	앨범 ID : <INPUT TYPE = "text" NAME="song_album_id"><br>
	<input type="file" name ="song_file">
	<input type="submit" value = "upload">

</form>




</body>

</html>

