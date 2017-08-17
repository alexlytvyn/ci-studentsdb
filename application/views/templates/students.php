<!DOCTYPE html>
<html lang="uk">

<head>
	<meta charset="UTF-8">
	<title>Сервіс обліку студентів - Студенти</title>
	<meta name="description" value="Система Обліку Студентів Навчального Закладу" />
	<!-- Include Styles -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/css/main.css" charset="utf-8">
</head>

<body>
	<!-- Start container -->
	<div class="container">

		<!-- Start Header -->
		<div class="row" id="header">

			<!-- Logo -->
			<div class="col-xs-8">
				<h1>Сервіс Обліку Студентів</h1>
			</div>
			<!-- Groups Selector -->
			<div class="col-xs-4" id="group-selector">
				<strong>Група:</strong>
				<select>
					<option value="">Усі Студенти</option>
					<option value="">Ф-07, Литвин Олександр (№ 007)</option>
					<option value="">Ф-08, Мороз Вікторія (№ 010)</option>
					<option value="">Ф-09, Желюк Михайло (№ 609)</option>
				</select>

			</div>

		</div>
		<!-- End Header -->

		<!-- Start Subheader -->
		<div class="row" id="sub-header">
			<div class="col-xs-12">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="/students">Студенти</a></li>
					<li role="presentation"><a href="/journal">Відвідування</a></li>
					<li role="presentation"><a href="/groups">Групи</a></li>
				</ul>
			</div>

		</div>
		<!-- End SubHeader -->

		<!-- Start Main Page Content -->
		<div class="row" id="content-columns">
			<div class="col-xs-12" id="content-column">
				<!-- Status Message -->
				<div class="alert alert-warning">Зміни скасовано</div>
				<h2>База Студентів - <a href="#" class="btn btn-primary">Додати Студента</a></h2>

				<!-- Start Students Listing -->
				<table class="table table-hover table-striped">
          <thead>
            <tr>
              <th><a href="">№</a></th>
              <th>Фото</th>
              <th><a href="">Прізвище &uarr;</a></th>
              <th><a href="#">Ім'я</a></th>
              <th><a href="#">№ Білету</a></th>
              <th>Дії</th>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td><img height="30" width="30" src="/static/img/alytvyn.jpg" class="img-circle"></td>
              <td><a title="Редагувати" href="#">Литвин</a></td>
              <td><a title="Редагувати" href="#">Олександр</a></td>
              <td>007</td>
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
            <tr>
              <td>2</td>
              <td><img height="30" width="30" src="/static/img/vmoroz.jpg" class="img-circle"></td>
              <td><a title="Редагувати" href="#">Мороз</a></td>
              <td><a title="Редагувати" href="#">Вікторія</a></td>
              <td>010</td>
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
            <tr>
              <td>3</td>
              <td><img height="30" width="30" src="/static/img/mzheljuk.jpg" class="img-circle"></td>
              <td><a title="Редагувати" href="#">Желюк</a></td>
              <td><a title="Редагувати" href="#">Михайло</a></td>
              <td>609</td>
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

		<!-- Start Footer -->
		<div class="row" id="footer">
			<div class="col-xs-12">
				&copy; 2017 Сервіс Обліку Студентів
			</div>
		</div>
		<!-- End Footer -->

	</div>
	<!-- End container -->
	<!-- Javascripts Section -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>

</body>

</html>
