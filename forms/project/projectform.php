<!--
	declare div, form, and fieldset wrappers outside of php include
	include a submit file
-->

<script src="forms/project/projectform-post.js"></script>

<legend><h2>Add a Project</h2></legend>

<div>
	<?php include 'forms/fields/projectName.php'; ?>
</div>

<div>
	<?php include 'forms/fields/dueDate.php'; ?>
</div>

<fieldset class="mb-1">
	<legend>Copy from existing project or template</legend>
		<div>
			<label>Existing project: 
				<p class="light sm">Select an existing project to copy it</p>
			</label>
			<?php include 'forms/fields/selectProject.php'; ?>
		</div>

		<div>
			<label>Template: 
				<p class="light sm">Select an existing template to copy it</p>
			</label>
			<?php include 'forms/fields/selectTemplate.php'; ?>
		</div>
</fieldset>

<?php include 'forms/fields/description.php'; ?>

<div>
	<?php include 'forms/fields/saveTemplate.php'; ?>
</div>

<div>
	<?php include 'forms/fields/templateName.php'; ?>
</div>