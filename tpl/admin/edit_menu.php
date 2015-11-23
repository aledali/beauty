<div id="content">
	<div class='entry'>
		<p>
		<?php 
			if($_SESSION['res']){
				echo $_SESSION['res'];
				unset($_SESSION['res']);
			}
		?></p>
		<a style='color:red; margin-top:15px; font:bold 14px areal;' href='?option=add_menu'>
			Add a new menu item
		</a>
		<hr color='red'>
	</div>
	<?php foreach($content as $row) :?>
	<div class='entry'>
		<div class='entry-title'>
			<a href='?option=update_menu&id_text=<?php echo $row['id_menu']?>'><?php echo $row['name_menu']?></a>  |
			<a style='color:red;'href='?option=delete_menu&del=<?php echo $row['id_menu']?>'>Delete</a>
		</div>
		<hr>
	</div>
	<?php endforeach;?>
</div>