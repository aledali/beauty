<div id="content">
	<div class='entry'>
			<p>
			<?php if($_SESSION['res']){
				echo $_SESSION['res'];
				unset($_SESSION['res']);
			}?>
			</p>
		<a style='color:red; margin-top:15px; font:bold 14px areal;' href='?option=add_category'>
			Add a new category
		</a>
		<hr color='red'>
	</div>
	<?php foreach($content as $row) :?>
		<div class='entry'>
			<div class='entry-title'>
				<a href='?option=update_category&id_text=<?php echo $row['id_category']?>'><?php echo $row['name_category']?></a>  |
				<a style='color:red;'href='?option=delete_category&del=<?php echo $row['id_category']?>'>Delete</a>
			</div>
			<hr>
		</div>
	<?php endforeach;?>	   
</div>