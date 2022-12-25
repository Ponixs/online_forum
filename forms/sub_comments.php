<table>
	<tr>
		<td colspan = 2 id = "<?php echo $c_id[$comm]?>" width = 380> - <?php echo $comments[$comm]?> </td>
	</tr>
	
	<tr>
		<form  action = "add_comment.php" method = "post">
			<td width = 380 style="padding-left: 90px;">
				
				<input type = "text" name = "sub_text" placeholder = "Написать комментарий..."> </input>
				<input type = "hidden" name = "comment_id"  value = "<?php echo $c_id[$comm]?>"> </input>
				<input type = "hidden" name = "forum_page"  value = "<?php echo $page?>"> </input>
			</td>
			<td>
				<button type = "submit"> Комментировать </button>
			</td>
		</form>
	</tr>
</table>