<table id="c<?php echo $i?>" hidden border = 0>
	<tr>
		<td width = 10 rowspan = 40> </td>
		<td width = 45 rowspan = 40> </td>
		
		<form  action = "add_comment.php" method = "post">
			<td width = 393>
				<input type = "text" name = "text" placeholder = "Новый комментарий"> </input>
				<input type = "hidden" name = "postid" value = "<?php echo $postid?>"> </input>
				<input type = "hidden" name = "forum_page"  value = "<?php echo $page?>"> </input>
			</td>
			<td>
				<button type = "submit"> Оставить комментарий </button>
			</td>
		</form>
	</tr>
	
	<?php
		for ($comm = 1; $comm <= $comm_count; $comm++) {
			echo "<tr><td>";
			include ("forms/sub_comments.php");
			echo "<hr></tr></td>";
			
			[$sub_comments, $sub_comm_count] = parse_sub_comments($c_id[$comm], $sub_comments_db);
			
			for ($sub_comm = 1; $sub_comm <= $sub_comm_count; $sub_comm++) {
				echo "<tr>";
				echo "<td  width = 380> &nbsp;|--------".$sub_comments[$sub_comm]."<hr></td>";
				echo "</tr>";

			}				
		}
	?>

</table>