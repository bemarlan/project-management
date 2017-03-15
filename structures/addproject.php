<p class="light">Add project</p>

<div class="col2-lg border-rt-gray">
	<form id="addProject" action="projectform-post.php" method="post" novalidate="novalidate">
		<fieldset>
			<?php include 'forms/project/projectform.php'; ?>
			<?php include 'forms/project/submitProject.php'; ?>
		</fieldset>
	</form>
</div>

<div class="col2-sm">
	<?php include 'includes/projectlist-sm.php'; ?>
</div>