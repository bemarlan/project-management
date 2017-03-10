<script src="forms/taskform-post.js"></script>

<form id="addTask" action="taskform-post.php" method="post" novalidate="novalidate">
	<fieldset>
		<legend><h2>Add a Task</h2></legend>
		<div>
			<label class="req">Task name: </label>
			<input type="text" name="taskName" placeholder="e.g. do the dishes" required>
		</div>
		<div>
			<label>Due date: </label>
			<input type="date" name="dueDate" placeholder="MM/DD/YYY">
		</div>
		<div>
			<label>Estimated time to complete (in hours): </label>
			<input type="number" name="estTime" step="0.25" min="0" placeholder="e.g. 1.25">
		</div>
		<div>
			<label>Status: </label>
			<select>
				<option value="Not started">Not started</option>
				<option value="Red folder">Red folder</option>
				<option value="Pending">Pending</option>
				<option value="Complete">Complete</option>
			</select>
		</div>
		<div>
			<label>Collateral: </label>
			<input type="file" name="collateral">
		</div>

			<label>Preceding Tasks: </label>
			<section class="box-hard mb-1">
				<input type="checkbox" name="pretask" value="task1">task 1 <br>
				<input type="checkbox" name="pretask" value="task2">task 2 <br>
				<input type="checkbox" name="pretask" value="task3">task 3 <br>
			</section>

			<label>Notes: </label>
			<textarea name="notes" cols="60" rows="10" class="mb-1"></textarea>

		<div>
			<input type="reset" name="reset" class="mr-1">
			<input id="submitTask" type="submit" name="submit">
		</div>
	</fieldset>
</form>