<div id="content">
	<?php foreach($content as $row) :?>
	<div class='entry'>
		<img class='img_post' src='<?php echo $row['img_src']?>'>
		<div class='entry-title'>
			<a href='?option=view&id_text=<?php echo $row['id']?>'><?php echo $row['title']?></a>
		</div>
		<div class='date'><?php echo $row['date']?></div>
		<p><?php echo $row['discription']?></p>
		<hr>
	</div>
<?php endforeach;?>
</div>
