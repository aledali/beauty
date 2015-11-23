<div id="sidebar">
	<div id="feed">
		<a class="feed-button" href="#">&nbsp;</a>
	</div>
	<ul>
		<?php foreach ($sidebar as $row) :?>
			<li>
					<a href='?option=category&id_cat=<?php echo $row['id_category'] ?>'><?php echo $row['name_category'] ?></a>
					</li>
		<?php endforeach;?>
	</ul>
	<div id="sidebar-bottom">
		&nbsp;
  	</div>
</div>