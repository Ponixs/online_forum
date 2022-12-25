<?php

$GLOBALS["symb_base"] = "0987654321zxcvbnmasdfghjklqwertyuiopPOIUYTREWQLKJHGFDSAMNBVCXZ";
	
		
function gen_str($count) {
	$str = "";
	for ($i = 0; $i < $count; $i++) {
		$num = rand(0,strlen($GLOBALS["symb_base"]) - 1);
		$rand_symb = $GLOBALS["symb_base"][$num];
		$str = $str.$rand_symb;
	}
	return $str;
}


if (isset($_POST["text"])) {
	$text = $_POST["text"];
	$text = trim($text);
	$time = time();
	
	if (strlen($text) > 3000) {
		header("Location: index.php?message=Слишком длинный текст");
		exit;
	}
	if (strlen($text) < 4) {
		header("Location: index.php?message=Слишком короткий текст");
		exit;
	}

		$image = "";
		
		$file = $_FILES["img"];
			
		if ($file["name"] != "") {
			
			if ($file["error"] != 0) {
				header("Location: index.php?message=С файлом что-то не так!");
				exit;
			}
			
			$types = array("image/jpeg", "image/jpg");
			if (!in_array($file["type"], $types)) {
				header("Location: index.php?message=Недопустимый формат файла!");
				exit;
			}
			
			$image = gen_str(5).".jpeg";
			if (!@copy($file["tmp_name"], 'img/'.$image)) {
				header("Location: index.php?message=С картинкой что-то не так!");
				exit;
			}
		}
		
		$sql = "INSERT INTO `posts` ( `text`, `likes`, `dislikes`, `dtime`, `image`) VALUES('$text', '0', '0', '$time', '$image')";
		
		mysqli_set_charset($link, "utf8");
		$res = mysqli_query($link, $sql);
	
		header("Location: index.php");
	}
	
else {
	header("Location: index.php?message=С файлом что-то не так!");
	exit;
}
?>