<!DOCTYPE html>
<html>
<head>
	<title>forms</title>
</head>
<body>
	<!-- form[method(get&post) && action] -->
	<?php
		

		if(isset($_POST["submit"])){
			// var_dump($_FILES);
			$tmp = $_FILES["image"]["tmp_name"];
			$img_name = uniqid().".jpg";
			move_uploaded_file($tmp, "photos/".$img_name);
		}

		if(isset($_POST["submit"])){
			$tmp = $_FILES["document"]["tmp_name"];
			$doc_name = uniqid().".pdf";
			move_uploaded_file($tmp, "documents/".$doc_name);
		}
			
		
	?>
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="image"><br>
		<input type="file" name="document"><br>
		<input type="submit" name="submit" value="Upload">
	</form>
		


</body>
</html>