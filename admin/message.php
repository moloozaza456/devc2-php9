<?php
if (isset($_SESSION['message'])) { ?>

	<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong>Hi!</strong> <?php echo $_SESSION['message']; ?>
	</div>

<?php } ?>