<div id="footer">
	<div id="footer-valid">
	<?php $i=1;?>
	<?php foreach ($footer as $item) :?>
		<a href='?option=menu&id_menu=<?php echo $item['id_menu']?>'><?php echo $item['name_menu']?></a>
		<?php if($i !== count($footer)) echo "/"; $i++;?>
			<?php  endforeach; ?>
	</div>
</div>";