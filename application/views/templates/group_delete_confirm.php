<!-- Start Main Page Content -->
		<div class="row" id="content-columns">
			<div class="col-xs-12" id="status-message">
				<!-- Status Message -->
				<div class="alert alert-warning">Зміни скасовано</div>
			</div>
		</div>
		<div class="row">
		  <div class="col-md-6">
				<!-- Start Group Deleting Form -->
			<form class="" action="" method="post">
				<h2>Ви дійсно хочете видалити Групу <?php echo $current_group->group_name; ?>?</h2>
				<button type="submit" name="group_confirm_delete_button" class="btn btn-danger">OK</button>
				<a href="<?php echo base_url(); ?>groups" class="btn btn-default">Відміна</a>
			</form>
		  </div>
		</div>
		<!-- End Main Page Content -->
