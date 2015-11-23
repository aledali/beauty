<div id="content">
	<div class="entry">
		<form enctype='multipart/form-data' action='' method='POST'>
			<p>Article title:<br />
				<input type='text' name='title' class='' value='<?php echo $content['text']['title']?>'>
				<input type='hidden' name='id' class='' value='<?php echo $content['text']['id']?>'>
			</p>
			<p>Image:<br />
				<input type='file' name='img_src'>
			</p>
			<p>Description:<br />
				<textarea name='discription' cols='50' rows='7'><?php echo $content['text']['discription']?></textarea>
			</p>	
			<p>Text:<br />
				<textarea name='text' cols='50' rows='7'><?php echo $content['text']['text']?></textarea>
			</p>
			<p>
				<select name='cat'>


					<?php foreach ($content['cat'] as $item) :?>
						<?php if($content['text']['cat']==$item['id_category']) : ?>
							<option selected value='<?php echo $item['id_category'] ?>'><?php echo $item['name_category']?></option>
						<?php else :?>
							<option value='<?php echo $item['id_category']?>'><?php echo $item['name_category']?></option>
						<?php endif; 
						endforeach;?>
				</select>
			</p>
			<p>
				<input type='submit' name='button' value='Save'>
			</p>
		</form>
	</div>
</div>