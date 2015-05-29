<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('edit_hp/edit') ?>

	<label for="hp-head">Head</label>
	<input type="input" name="hp-head" /><br />

	<!-- working is easy -->
	<label for="hp-task">Task</label>
	<input type="input" name="hp-task" /><br />

	<label for="hp-send">Send</label>
	<input type="input" name="hp-send" /><br />

	<label for="hp-progress">Progress</label>
	<input type="input" name="hp-progress" /><br />

	<!-- About us  -->
	<!-- slide 1 -->
	<label for="hp-about-head-1">About Head 1</label>
	<input type="input" name="hp-about-head-1" /><br />

	<label for="hp-about-desc-1">About Desc 1</label>
	<input type="input" name="hp-about-desc-1" /><br />

	<label for="hp-about-head-2">About Head 2</label>
	<input type="input" name="hp-about-head-2" /><br />

	<label for="hp-about-desc-2">About Desc 2</label>
	<input type="input" name="hp-about-desc-2" /><br />

	<label for="hp-about-head-3">About Head 3</label>
	<input type="input" name="hp-about-head-3" /><br />

	<label for="hp-about-desc-3">About Desc 3</label>
	<input type="input" name="hp-about-desc-3" /><br />

	<!-- slide 2 -->
	<label for="hp-about-head-4">About Head 4</label>
	<input type="input" name="hp-about-head-4" /><br />

	<label for="hp-about-desc-4">About Desc 4</label>
	<input type="input" name="hp-about-desc-4" /><br />

	<label for="hp-about-head-5">About Head 5</label>
	<input type="input" name="hp-about-head-5" /><br />

	<label for="hp-about-desc-5">About Desc 5</label>
	<input type="input" name="hp-about-desc-5" /><br />

	<label for="hp-about-head-6">About Head 6</label>
	<input type="input" name="hp-about-head-6" /><br />

	<label for="hp-about-desc-6">About Desc 6</label>
	<input type="input" name="hp-about-desc-6" /><br />

	<!-- contact -->
	<label for="hp-address">Address</label>
	<input type="input" name="hp-address" /><br />

	<label for="hp-phone">Phone</label>
	<input type="input" name="hp-phone" /><br />

	<label for="hp-email">Email</label>
	<input type="input" name="hp-email" /><br />
	
	<!-- little contact icon -->
	<label for="hp-facebook">Facebook</label>
	<input type="input" name="hp-facebook" /><br />

	<label for="hp-twitter">Twiiter</label>
	<input type="input" name="hp-twitter" /><br />

	<label for="hp-googleplus">Google Plus</label>
	<input type="input" name="hp-googleplus" /><br />

	<!-- Save Change -->
	<button type="submit" name="type" value="0">Save</button>
	
</form>
<?php echo date("Y-m-d H:i:s"); ?>