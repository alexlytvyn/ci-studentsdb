<!-- Start Main Page Content -->
		<div class="row" id="content-columns">
			<div class="col-xs-12" id="status-message">
				<!-- Status Message -->
				<div class="alert alert-warning">Зміни скасовано</div>
			</div>
		</div>
		<div class="row">
		  <div class="col-md-6">
				<!-- Start Groups Adding Form -->
				<form class="" action="" method="post">
					<h2>Додати Групу</h2>
					<div class="form-group">
					  <label for="group_name">Назва Групи</label>
					  <input type="text" class="form-control" name="group_name" placeholder="Введіть назву Групи">
					</div>
					<div class="form-group">
					  <label for="leader_name">Ім'я Старости</label>
					  <input type="text" class="form-control" name="leader_name" placeholder="Введіть ім'я старости Групи">
					</div>
					<div class="form-group">
						<label for="notes">Додаткові нотатки</label>
						<textarea name="notes" class="form-control" placeholder="Тут можна вказати додаткові нотатки"></textarea>
					</div>
					<button type="submit" name="add_group_button" class="btn btn-warning">Додати Групу</button>
					<a href="<?php echo base_url(); ?>groups" class="btn btn-default">Відміна</a>
				</form>
		  </div>
		</div>
		<!-- End Main Page Content -->
