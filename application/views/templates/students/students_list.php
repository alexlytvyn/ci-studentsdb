<!-- Start Main Page Content -->
		<div class="row" id="content-columns">
			<div class="col-xs-12" id="content-column">
				<!-- Status Message -->
				<div class="alert alert-warning">Зміни скасовано</div>
				<h2>База Студентів - <a href="<?php echo base_url(); ?>students/add" class="btn btn-primary">Додати Студента</a></h2>

				<!-- Start Students Listing -->
				<table class="table table-hover table-striped">
          <thead>
            <tr>
              <th><a href="/students/ordered?order_by=id">№</a></th>
              <th>Фото</th>
              <th><a href="/students/ordered?order_by=last_name">Прізвище</a></th>
              <th><a href="/students/ordered?order_by=first_name">Ім'я</a></th>
              <th><a href="/students/ordered?order_by=ticket">№ Білету</a></th>
              <th>Дії</th>
          </thead>
          <tbody>
						<?php $i = 1; ?>
						<?php foreach ($students as $student): ?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><a href="<?php echo base_url().'students/photo_edit/'.$student->id; ?>"><img height="30" width="30" src="<?php echo $student->photo; ?>" class="img-thumbnail"></a></td>
								<td><a title="Редагувати" href="<?php echo base_url().'students/edit/'.$student->id; ?>"><?php echo $student->last_name; ?></a></td>
								<td><a title="Редагувати" href="<?php echo base_url().'students/edit/'.$student->id; ?>"><?php echo $student->first_name; ?></a></td>
								<td><?php echo $student->ticket; ?></td>
								<td>
									<div class="dropdown">
										<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Дія
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu" role="menu">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="<?php echo base_url().'journal/student_journal/'.$student->id; ?>">Відвідування</a>
											</li>
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="<?php echo base_url().'students/edit/'.$student->id; ?>">Редагувати</a>
											</li>
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="<?php echo base_url().'students/delete/'.$student->id; ?>">Видалити</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
					<?php endforeach; ?>
          </tbody>
        </table>
				<!-- End Students Listing -->

				<nav>
					<ul class="pagination">
						<li><a href="#">&laquo;</a></li>
						<li><a href="#">1</a></li>
						<li class="active"><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
						<li><a href="#">&raquo;</a></li>
					</ul>
					<!-- <?php echo $pagination; ?> -->
				</nav>

			</div>

		</div>
		<!-- End Main Page Content -->
