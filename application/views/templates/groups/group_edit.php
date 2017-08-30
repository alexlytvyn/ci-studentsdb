<!-- Start Main Page Content -->
		<div class="row" id="content-columns">
			<div class="col-xs-12" id="status-message">
				<!-- Status Message -->
				<div class="alert alert-warning">Зміни скасовано</div>
			</div>
		</div>
		<div class="row">
		  <div class="col-md-6">
				<!-- Start Groups Editing Form -->
				<form class="" action="" method="post">
					<h2>Редагування даних про Групу</h2>
					<div class="form-group">
					  <label for="group_name">Назва Групи</label>
					  <input type="text" class="form-control" name="group_name" placeholder="Введіть Назву Групи" value="<?php echo $current_group->group_name; ?>">
					</div>
					<div class="form-group">
					  <label for="leader_name">Ім'я Старости</label>
					  <input type="text" class="form-control" name="leader_name" placeholder="Введіть ім'я Старости" value="<?php echo $current_group->leader_name; ?>">
					</div>
					<div class="form-group">
					  <label for="notes">Додаткові нотатки</label>
					  <textarea name="notes" class="form-control" placeholder="Тут можна вказати додаткові нотатки"><?php echo $current_group->notes; ?></textarea>
					</div>
					<button type="submit" name="edit_group_button" class="btn btn-danger">Редагувати Групу</button>
					<a href="<?php echo base_url().'groups'; ?>" class="btn btn-default">Відміна</a>
				</form>

		  </div>
		</div>
		<!-- End Main Page Content -->
