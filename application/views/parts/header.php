<!DOCTYPE html>
<html lang="uk">

<head>
	<meta charset="UTF-8">
	<title>Сервіс обліку студентів - <?php echo $title; ?></title>
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
				<h1><a href="<?php echo base_url(); ?>" class="heading_url">Сервіс Обліку Студентів</a></h1>
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
