<!DOCTYPE html>



<html>
<head>
	<meta charset="UTF-8">
    <title>Chat</title>
    <link rel="stylesheet" href="css/http_stackpath.bootstrapcdn.com_bootstrap_4.3.1_css_bootstrap.css">
    <link rel="stylesheet" href="css/index.css">

</head>
<script> 
	function show_comments(id){
		
		let c = document.getElementById("c"+id);
		c.removeAttribute("hidden");
		
		let b = document.getElementById("b"+id);
		b.textContent = "Скрыть комментарии";
		
		b.setAttribute("onClick", "hide_comments('"+id+"')");
	}
	
	function hide_comments(id) {
		let c = document.getElementById("c"+id);
		c.setAttribute("hidden", true);
		
		let b = document.getElementById("b"+id);
		b.textContent = "Показать комментарии";
		
		b.setAttribute("onClick", "show_comments('"+id+"')");
	}
</script>
<body>
	<font color="white">
	<?php 
		include ("connect.php"); 
		echo "<table height = 10> </table>";
		include ("forms/header.php");
	?>
	
	<table height = 10 > </table>
	
	<table border = 0  width = 620  align = "center" bgcolor = "#363636" >
	
		<tr height = 48>
			<td>
				<h2 align = "center" >Анонимный чат</h2>
			</td>
		</tr>
		
		<?php
			require "parse.php";
			$max_page_posts = 2;
			$page = 1;

			if (isset($_GET["page"]) && $_GET["page"] > 0)
				$page = $_GET["page"];
			
			if (($page - 1) * $max_page_posts >= $max_posts)
				$page = ceil($max_posts / $max_page_posts); 
			
			for ($i = 1 + ($max_page_posts * ($page - 1)); $i <= ($max_page_posts * $page); $i++) {
				if ($i > $max_posts)
					break;
				[$text, $likes, $dislikes,$postid, $image] = parse_post($i - 1, $result);

				[$comments, $comm_count, $c_id, $sub_comm_count] = parse_comment($postid, $comments_db);
				echo "<tr> <td>";
				include ("forms/post.php");
				echo "</td></tr>";
				
				echo "<tr height = 5> </tr>";
				echo "<tr><td>";
				include ("forms/comments.php"); 
				echo "</td></tr>";
				
				echo "<tr height = 20> <td> <hr> <td> </tr>";
			}
		
		?>
			
	</table>
	</font>

	<?php
		include ("forms/footer.php");
	
		if (isset($_GET["message"]))
			echo "<script> alert('".$_GET["message"]."') </script>";
	?>
</body>
</html>