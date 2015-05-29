<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('task/create') ?>

	<label for="name">Name</label>
	<input type="input" name="name" /><br />

	<label for="desc">Text</label>
	<textarea name="desc"></textarea><br />

	<button type="submit" name="type" value="0">submit</button>
	<button type="submit" name="type" value="1">release</button>
</form>
<?php echo date("Y-m-d H:i:s"); ?>