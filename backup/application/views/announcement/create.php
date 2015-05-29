<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('announcement/create') ?>

	<label for="topic">Name</label>
	<input type="input" name="topic" /><br />

	<label for="desc">Text</label>
	<textarea name="desc"></textarea><br />

	<button type="submit" name="type" value="0">create</button>
	
</form>
<?php echo date("Y-m-d H:i:s"); ?>