<!-- Start Main Page Content -->
		<div class="row" id="content-columns">
			<div class="col-xs-12" id="status-message">
				<!-- Status Message -->
				<div class="alert alert-warning">Зміни скасовано</div>
			</div>
		</div>
		<div class="row">
		  <div class="col-md-6">
				<!-- Start Photo Changing Form -->
				<form class="" action="" method="post" enctype="multipart/form-data">
					<h2>Змінити Фото Студента</h2>
					<h4>Поточне фото студента:</h4>
					<div class="student_photo">
							<img height="200" src="<?php echo $current_student->photo; ?>" alt="student_photo">
					</div>
					<div class="form-group">
					  <label for="photo">Фото Студента</label>
					  <input type="file" name="photo" size="20" value="<?php echo $current_student->photo; ?>">
					</div>
					<button type="submit" name="edit_student_photo_button" class="btn btn-danger">Змінити Фото</button>
					<a href="<?php echo base_url(); ?>" class="btn btn-default">Відміна</a>
				</form>

		  </div>
		</div>
		<!-- End Main Page Content -->
