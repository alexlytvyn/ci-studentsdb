<!-- Start Main Page Content -->
		<div class="row" id="content-columns">
			<div class="col-xs-12" id="status-message">
				<!-- Status Message -->
				<div class="alert alert-warning">Зміни скасовано</div>
			</div>
		</div>
		<div class="row">
		  <div class="col-md-6">
				<!-- Start Students Adding Form -->
				<form class="" action="" method="post" enctype="multipart/form-data">
					<h2>Додати студента</h2>
					<div class="form-group">
					  <label for="last_name">Прізвище</label>
					  <input type="text" class="form-control" name="last_name" placeholder="Введіть прізвище студента">
					</div>
					<div class="form-group">
					  <label for="first_name">Ім'я</label>
					  <input type="text" class="form-control" name="first_name" placeholder="Введіть ім'я студента">
					</div>
					<div class="form-group">
					  <label for="middle_name">По-батькові</label>
					  <input type="text" class="form-control" name="middle_name" placeholder="Введіть ім'я по-батькові студента">
					</div>
					<div class="form-group">
					  <label for="birthday">Дата Народження</label>
					  <input type="date" class="form-control" name="birthday" placeholder="Введіть дату народження студента">
					</div>
					<div class="form-group">
					  <label for="ticket">№ Студентського Квитка</label>
					  <input type="text" class="form-control" name="ticket" placeholder="Введіть № Студентського Квитка">
					</div>
					<div class="form-group">
					  <label for="notes">Додаткові нотатки</label>
					  <textarea name="notes" class="form-control" placeholder="Тут можна вказати додаткові нотатки"></textarea>
					</div>
					<div class="form-group">
					  <label for="photo">Фото Студента</label>
					  <input type="file" name="photo" value="" size="20">
					</div>
					<button type="submit" name="add_student_button" class="btn btn-warning">Додати Студента</button>
					<a href="<?php echo base_url(); ?>" class="btn btn-default">Відміна</a>
				</form>

		  </div>
		</div>
		<!-- End Main Page Content -->
