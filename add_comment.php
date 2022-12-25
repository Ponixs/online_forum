<?php

	if (isset($_POST["text"])) {	
		$text = $_POST["text"];
		$time = time();
		$postid = $_POST["postid"];
		$page = $_POST["forum_page"];
	
		if (strlen($text) > 1000) {
			header("Location: index.php?message=Слишком длинный текст");
			exit();
		}
		
		if (strlen($text) < 4) {
			header("Location: index.php?message=Слишком короткий текст");
			exit();
		}
	
		$sql = "INSERT INTO `comments` (`text`, `postid`) VALUES ( '$text', '$postid')";
		
		mysqli_set_charset($link, "utf8");
		$res = mysqli_query($link, $sql);
	
		header("Location: index.php?page=".$page);
		exit();
	}

	if (isset($_POST["sub_text"])) {																						
		$text = $_POST["sub_text"];
		$time = time();
		$comment_id = $_POST["comment_id"];
		$page = $_POST["forum_page"];
	
		if (strlen($text) > 1000) {
			header("Location: index.php?message=Слишком длинный текст");
			exit;
		}
		
		if (strlen($text) < 4) {
			header("Location: index.php?message=Слишком короткий текст");
			exit;
		}
	
		$sql = "INSERT INTO `sub_comments` ( `text`, `comment_id`) VALUES ('$text', '$comment_id')";
		mysqli_set_charset($link, "utf8");
		$res = mysqli_query($link, $sql);
	
		header("Location: index.php?page=".$page);
		exit();
	}
	
	else {
		header("Location: index.php?message=Что-то пошло не так");
		exit();
	}
?>