<table class = "posting" method="post" enctype="multipart/form-data" align="center"> 
	<tr>
		<td colspan = 3 > <h3 align = "center" color="#00FF7F"> Добавить новую запись </h3> </td>
	</tr>
	
	<form action = "add_post.php" method = "post" enctype = "multipart/form-data">
	
	<tr>
		<td width = 63 rowspan = 3> </td>
		
		<td rowspan = 3  width = 407  align = "center"> 
		
			<input type = "text" name = "text" placeholder = "Введите текст поста..." class="form-control"></input>
		</td>
					
		<td width = 159 align = "center"> 
			<button type = "submit" class = "btn btn-dark">Отправить</button>
		</td> 
	
	</tr>
	
	<tr >
		<td align = "center"> 
			 <input  class="btn btn-dark" type="file" name="img" id="file" accept="image/jpeg">
		</td>
	</tr>
	
	</form>
</table>