<?php if( isset($_GET['message'] ) ) { ?>

	<?php if($_GET['message'] == 'basic') { ?>
		<div class="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Thank you for your interest and feedback. Have a wonderfull day!</strong>
		</div>
	<?php } ?>

	<?php if($_GET['message'] == 'facility') { ?>
		<div class="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Thank you for your interest we value your partnership. Have a wonderfull day!</strong>
		</div>
	<?php } ?>

	<?php if($_GET['message'] == 'investor') { ?>
		<div class="alert">
			<button type="button" class="close" data-dismiss="alert">&times;</button>
			<strong>Thank you for your interest we will make sure our relationship becomes mutually beneficial. Have a wonderfull day!</strong>
		</div>
	<?php } ?>

<?php } ?>
