<div id="content">
	<div class='entry'>
		<p>
		<?php 
			if($_SESSION['res']){
				echo $_SESSION['res'];
				unset($_SESSION['res']);
			}
		?></p>
		<a style='color:red; margin-top:15px; font:bold 14px areal;' href='?option=add_article'>
			Add articles
		</a>
		<hr color='red'>
	</div>
	<?php foreach($content as $row) :?>
	<div class='entry'>
		<div class='entry-title'>
			<a href='?option=update_article&id_text=<?php echo $row['id']?>'><?php echo $row['title']?></a>  |
			<a style='color:red;'href='?option=delete_article&del=<?php echo $row['id']?>'>Delete</a>
		</div>
		<hr>
	</div>
<?php endforeach;?>
</div>