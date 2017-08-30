		<!-- Start Main Page Content -->
		<div class="row" id="content-columns">
			<div class="col-xs-12" id="content-column">
				<!-- Status Message -->
				<div class="alert alert-warning">Зміни скасовано.</div>
				<h2>Групи - <a class="btn btn-primary" href="<?php echo base_url(); ?>groups/add">Додати Групу</a></h2>

				<!-- Start Groups Listing -->
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th><a href="/groups/ordered?order_by=id">№</a></th>
							<th><a href="/groups/ordered?order_by=group_name">Назва</a></th>
							<th><a href="/groups/ordered?order_by=leader_name">Староста</a></th>
							<th>Дії</th>
					</thead>
					<tbody>
						<?php $i = 1; ?>
						<?php foreach ($groups as $group): ?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td><a title="Редагувати" href="<?php echo base_url().'groups/edit/'.$group->id; ?>"><?php echo $group->group_name; ?></a></td>
								<td><a title="Редагувати" href="<?php echo base_url().'groups/edit/'.$group->id; ?>"><?php echo $group->leader_name; ?></a></td>
								<td>
									<div class="dropdown">
										<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Дія
	                    <span class="caret"></span>
	                  </button>
										<ul class="dropdown-menu" role="menu">
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="#">Відвідування</a>
											</li>
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="<?php echo base_url().'groups/edit/'.$group->id; ?>">Редагувати</a>
											</li>
											<li role="presentation">
												<a role="menuitem" tabindex="-1" href="<?php echo base_url().'groups/delete/'.$group->id; ?>">Видалити</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				<!-- End Groups Listing -->
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
				</nav>
			</div>
		</div>
		<!-- End Main Page Content -->
