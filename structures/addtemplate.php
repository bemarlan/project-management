<p class="light">Add template</p>

<form id="addTemplate" action="templateform-post.php" method="post" novalidate="novalidate">
	<div>
			<?php include 'forms/template/templateform.php'; ?>
			<div class="center">
				<?php include 'forms/fields/addTaskButton.php'; ?>
			</div>
		<?php include 'forms/template/submitTemplate.php'; ?>
	</div>
</form>