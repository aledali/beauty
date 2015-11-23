<div id="menu">
	<ul>'
		<li><a href="?option=main">Home</a></li>
		<?php foreach($menu_top as $item) :?>
			<li>
				<a href='?option=menu&id_menu=<?php echo $item['id_menu']?>'><?php echo $item['name_menu']?></a>
			</li>
		<?php endforeach;?>
	</ul>
</div>