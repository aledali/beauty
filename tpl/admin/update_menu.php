<div id="content">
	<div class="entry">
		<form action='' method='POST'>
			<p>Menu title:<br />
				<input type='text' name='title' class='' value='<?php echo $content['name_menu']?>'>
				<input type='hidden' name='id' class='' value='<?php echo $content['id_menu']?>'>
			</p>
			<p>Text:<br />
				<textarea name='text' cols='50' rows='7'><?php echo $content['text_menu']?></textarea>
			</p>
			<p><input type='submit' name='button' value='Save'>
			</p>
		</form>
	</div>
</div>