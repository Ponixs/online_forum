<table border = 0 class="post" width = 620  align = "center" >
			<tr height = 45>
				<td width = 10> </td>
			
				<td width = 45 align = "center"> <h2> <?php echo $i?> </h2> </td>
				
				<td style = "table-layout:fixed; width:420px; border-radius: 15px"  rowspan = 2 colspan = 10 height = 100 bgcolor = "#101010" width = 420 > <?php print ($text);?>  </td>
			
			</tr>
			<tr height = 45>
				<td width = 10> </td>
				<td width = 10> </td>
				<td width = 10> </td>
			</tr>
			<?php
			if ($image != "none") {
						
				echo "<tr><td></td><td></td><td>";
				echo "<table class = 'img_t' border = 0>";
								
				echo "<tr>";
			
				echo "<td align = 'center'><img style = 'width:390px;' src = 'img/".$image."' alt = 'Тут должно быть изображение'/> </td>";
							
				echo "</tr>";
				
				echo "</table></td><td></td><td></td><td></td><td></td></tr>";
			}
			?>
			
			
		<tr height = 20>
			<td width = 10> </td>
			<td width = 10> </td>
			<td width = 10> </td>
				<td width = 20 align = "center" > 
					<form action = "reaction.php?" method = "get">
						<input type = "hidden" name = "reaction" value = "likes"> </input>
						<input type = "hidden" name = "id" value = "<?php echo $postid?>"> </input>
						<input type = "hidden" name = "page" value = "<?php echo $page?>"> </input>
						<input type = "hidden" name = "count" value = "<?php echo $likes?>"> </input>
						<button type = "submit"> 👍 &nbsp;<?php echo $likes?> </button>
					</form> 
				</td>
					
				<td width = 20 align = "center" > 
					<form action = "reaction.php?" method = "get">
						<input type = "hidden" name = "reaction" value = "dislikes"> </input>
						<input type = "hidden" name = "id" value = "<?php echo $postid?>"> </input>
						<input type = "hidden" name = "page" value = "<?php echo $page?>"> </input>
						<input type = "hidden" name = "count" value = "<?php echo $dislikes?>"> </input>
						<button type = "submit"> 👎 &nbsp;<?php echo $dislikes?> </button>
					</form> 
				</td>
			
				
			
			
			<td width = 300> </td>
			<td> </td>
			<td colspan = 3> 
				<button id="b<?php echo $i?>" onclick="show_comments('<?php echo $i?>')"> Показать комментарии </button>
			</td>
			
			<td width = 10> </td>
		</tr>
		
		
		
		<style>
			table.img_t {
				table-layout:fixed; width:100%;
			}
		</style>
		
		</table>