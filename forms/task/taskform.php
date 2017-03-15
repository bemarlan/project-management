<!--
	declare div, form, and fieldset wrappers outside of php include
	include a submit file
-->

<script src="forms/task/taskform-post.js"></script>

<legend><h2>Add a Task</h2></legend>

<div>
	<?php include 'forms/fields/taskName.php'; ?>
</div>

<div>
	<?php include 'forms/fields/dueDate.php'; ?>
</div>

<div>
	<?php include 'forms/fields/estimatedTime.php'; ?>
</div>

<div>
	<?php include 'forms/fields/status.php'; ?>
</div>

<div>
	<?php include 'forms/fields/collateral.php'; ?>
</div>

<?php include 'forms/fields/precedingTasks.php'; ?>
<?php include 'forms/fields/notes.php'; ?>