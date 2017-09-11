<!-- Start Main Page Content -->
<div class="row" id="content-columns">
  <div class="col-xs-12" id="content-column">
      <h2>Облік відвідування</h2>
				<?php
					// місцезнаходження скрипта
					$self = base_url().'journal';

					// Перевіряємо, чи місяць був встановдений у GET-запиті.
					// Якщо ні, то встановлюємо поточний місяць
					if (isset($_GET['month'])) {
					    $month = $_GET['month'];
					} else {
					    $month = date('m');
					}

					// Перевіряємо, чи рік був встановдений у GET-запиті.
					// Якщо ні, то встановлюємо поточний рік
					if (isset($_GET['year'])) {
					    $year = $_GET['year'];
					} else {
					    $year = date('Y');
					}

					// Якщо поточний місяць - дванадцятий,то кнопка-посилання на наступний місяць
					// збільшує рік на одиницю
					if ($month == '12') {
					    $next_year = $year + 1;
					} else {
					    $next_year = $year;
					}

					// Якщо поточний місяць - січень, то кнопка-посилання для попереднього місяця
					// зменшує рік на одиницю
					if ($month == '1') {
					    $previous_year = $year-1;
					} else {
					    $previous_year = $year;
					}

					// Якщо поточний місяць - грудень, то кнопка наступного місяця змінює місяць на перший
					if ($month == '12') {
					    $next_month = '1';
					} else {
					    $next_month = $month+1;
					}

					// Список місяців для відображення у календарі
					$Month_r = array(
							"1" => "January",
							"2" => "February",
							"3" => "March",
							"4" => "April",
							"5" => "May",
							"6" => "June",
							"7" => "July",
							"8" => "August",
							"9" => "September",
							"10" => "October",
							"11" => "November",
							"12" => "December");

					// Змінна, яка містить перше число заданого місяця
					$first_of_month = mktime(0, 0, 0, $month, 1, $year);

					$maxdays = date('t', $first_of_month);
					$date_info = getdate($first_of_month);
					$month = $date_info['mon'];
					$year = $date_info['year'];

					// Вычитаем один день с первого дня месяца,
					//чтобы получить в конец прошлого месяца
					$timestamp_previous_month = $first_of_month - (24*60*60);
					$previous_month = date("m", $timestamp_previous_month);?>


					<div class="datechoose" style="text-align: center;">
					<a href='<?php echo $self; ?>?month=<?php echo $previous_month; ?>&year=<?php echo $previous_year; ?>'>&larr;</a>
         <?php echo $Month_r[$month]. ' '. $year;  ?>
          <a href='<?php echo $self; ?>?month=<?php echo $next_month; ?>&year=<?php echo $next_year; ?>'>&rarr;</a>
				</div>
        <!-- Start Students Listing -->
        <div class="maintable" style="margin-right: 15px;">
        <table class="table table-bordered">
            <thead>
              <th>#</th>
              <th>Студент</th>
              <?php
							// станавливаем текущий день как единица 1
							$day = 1;

							// Масив, який містить назви днів тижня
							$day_headings = array('Нд', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб');

							while ($day <= $maxdays) {
									$month_day_timestamp = mktime(0, 0, 0, $month, $day, $year);
									$month_day_info = getdate($month_day_timestamp);
									$wday = $day_headings[$month_day_info['wday']];

									if ($day == date('d') && $month == date('m') && $year == date('Y')) {
										echo '<th>'.$day.' '. $wday. '</th>';
									} else {
										echo '<th>'.$day.' '.$wday. '</th>';
									}
									$day++;
							}
							 ?>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><a title="Редагувати" href="#">Литвин Олександр</a></td>
								<?php
								for ($i=0; $i < $maxdays; $i++) { ?>
									<td><div class="checkbox">
	                <label><input type="checkbox" value=""></label>
	                </div></td>
								<?php  } ?>
              </tr>
            </tbody>
        </table>
        </div>
        <!-- End Students Listing -->
    </div>
</div>
<!-- End Main Page Content -->
