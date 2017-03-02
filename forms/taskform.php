<script src="forms/taskform-post.js"></script>

<h2>Add a Task</h2>
<form id="addTask" action="taskform-post.php" method="post" novalidate="novalidate">
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
		<label>Notes: </label>
		<textarea name="notes" cols="60" rows="10"></textarea>
	<div>
		<input type="reset" name="reset">
		<input id="submitTask" type="submit" name="submit">
	</div>
</form>