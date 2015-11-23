<div id="content">
	<div class="entry">
		<form enctype='multipart/form-data' action='' method='POST'>
			<p>Article title:<br />
				<input type='text' name='title' class=''>
			</p>
			<p>Image:<br />
				<input type='file' name='img_src'>
			</p>
			<p>Description:<br />
				<textarea name='discription' cols='50' rows='7'></textarea>
			</p>	
			<p>Text:<br />
				<textarea name='text' cols='50' rows='7'></textarea>
			</p>
			<p>
				<select name='cat'>
				<?php foreach ($content as $item) :?>
					<option value='<?php echo $item['id_category']?>'><?php echo $item['name_category']?></option>
				<?php endforeach?>
				</select>
			</p>
			<p>
				<input type='submit' name='button' value='Save'>
			</p>
		</form>
	</div>
</div>