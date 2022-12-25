<?php 


function parse_post($index, $result) {
	
	$data_string = $result[$index];
	
	$text = $data_string['text'];
	$likes = $data_string['likes'];
	$dislikes = $data_string['dislikes'];

	
	$postid = $data_string['id'];
			
	if(strlen($data_string['image']) == 10	)
		$image = $data_string['image'];
	else
		$image = "none";
	
	return [$text, $likes, $dislikes, $postid, $image];
}


function parse_comment($postid, $comments_db) {
	$comm_count = 0;
	$comments_a = array();
	$comments_id = array();
		
	foreach ($comments_db as $comment) {
		if ($comment["postid"] == $postid) {
			
			$comm_count += 1;
				
			$comments_a[$comm_count] = $comment["text"];
			$comments_id[$comm_count] = $comment["id"];
				
		}
	}
		
	return [$comments_a, $comm_count, $comments_id, 0];
}


function parse_sub_comments($comment_id, $sub_comments_db) {
	$sub_comm_count = 0;
	$sub_comments_a = array();
	
	foreach ($sub_comments_db as $sub_comment) {
		if ($sub_comment["comment_id"] == $comment_id) {
			
			$sub_comm_count += 1;
				
			$sub_comments_a[$sub_comm_count] = $sub_comment["text"];
		}
	}
	
	return [$sub_comments_a, $sub_comm_count];
}

?>