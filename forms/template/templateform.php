<!--
	declare div, form, and fieldset wrappers outside of php include
	include a submit file
-->

<script src="forms/template/templateform-post.js"></script>

<h2>Add/Edit Template</h2>

<div class="mb-1">
	<?php include 'forms/fields/templateName.php'; ?>
</div>

<h3>Tasks to be included:</h2>

<div>
	<form id="addTask" action="taskform-post.php" method="post" novalidate="novalidate">
		<fieldset>
			<?php include 'forms/task/taskform.php'; ?>
		</fieldset>
	</form>
</div>