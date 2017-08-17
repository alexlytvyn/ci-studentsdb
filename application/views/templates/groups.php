		<!-- Start Main Page Content -->
		<div class="row" id="content-columns">
			<div class="col-xs-12" id="content-column">
				<!-- Status Message -->
				<div class="alert alert-warning">Зміни скасовано.</div>
				<h2>Групи - <a class="btn btn-primary" href="#">Додати Групу</a></h2>

				<!-- Start Students Listing -->
				<table class="table table-hover table-striped">
					<thead>
						<tr>
							<th><a href="">№</a></th>
							<th><a href="">Назва &uarr;</a></th>
							<th><a href="#">Староста</a></th>
							<th>Дії</th>
					</thead>
					<tbody>
						{groups}
						<tr>
							<td>{id}</td>
							<td><a title="Редагувати" href="#">{group_name}</a></td>
							<td><a title="Редагувати" href="#">{leader_name}</a></td>
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
											<a role="menuitem" tabindex="-1" href="#">Редагувати</a>
										</li>
										<li role="presentation">
											<a role="menuitem" tabindex="-1" href="#">Видалити</a>
										</li>
									</ul>
								</div>
							</td>
						</tr>
						{/groups}
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
				</nav>
			</div>
		</div>
		<!-- End Main Page Content -->
