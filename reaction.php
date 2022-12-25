<?php
	$id = $_GET["id"];
	$reaction = $_GET["reaction"];
	$page = $_GET["page"];
	$count = $_GET["count"];
	
	$count  += 1;
	
	if ($count > 999)
		header("Location: index.php?page=".$page."&message=Достигнуто максимально число этой реакции");
	else {
		if ($reaction == "likes")
			$sql = "UPDATE `posts` SET `likes` = '$count' WHERE `posts` . `id` = '$id'";
	
		if ($reaction == "dislikes")
			$sql = "UPDATE `posts` SET `dislikes` = '$count' WHERE `posts`.`id` = '$id'";
	
		
		$res = mysqli_query($link, $sql);
		header("Location: index.php?page=".$page);
	}
?>