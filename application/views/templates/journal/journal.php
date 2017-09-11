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
							"1" => "Січень",
							"2" => "Лютий",
							"3" => "Березень",
							"4" => "Квітень",
							"5" => "Травень",
							"6" => "Червень",
							"7" => "Липень",
							"8" => "Серпень",
							"9" => "Вересень",
							"10" => "Жовтень",
							"11" => "Листопад",
							"12" => "Грудень");

					// Змінна, яка містить перше число заданого місяця
					$first_of_month = mktime(0, 0, 0, $month, 1, $year);

					$maxdays = date('t', $first_of_month);
					$date_info = getdate($first_of_month);
					$month = $date_info['mon'];
					$year = $date_info['year'];

					// Вираховуємо останній день попереднього місяця
					$timestamp_previous_month = $first_of_month - (24*60*60);
					$previous_month = date("m", $timestamp_previous_month);?>


					<div class="datechoose">
					<a href='<?php echo $self; ?>?month=<?php echo $previous_month; ?>&year=<?php echo $previous_year; ?>'>&larr;</a>
         <?php echo $Month_r[$month]. ' '. $year;  ?>
          <a href='<?php echo $self; ?>?month=<?php echo $next_month; ?>&year=<?php echo $next_year; ?>'>&rarr;</a>
				</div>
        <!-- Start Students Listing -->
        <div class="maintable">
        <table class="table table-bordered table-striped table-hover table-condensed">
            <thead>
              <th>#</th>
              <th>Студент</th>
              <?php
							// Встановлюємо поточний день як перший
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
						<?php foreach ($full_name as $journal_item): ?>
              <tr>
									<td><?php echo $journal_item->id; ?></td>
									<td><a title="Редагувати" href="#"><?php echo $journal_item->last_name . ' ' . $journal_item->first_name ?></a></td>
									<?php
									for ($i=0; $i < $maxdays; $i++) { ?>
										<td><div class="checkbox">
		                <label><input type="checkbox" value=""></label>
		                </div></td>
									<?php  } ?>
              </tr>
							<?php endforeach; ?>
            </tbody>
        </table>
        </div>
        <!-- End Students Listing -->
    </div>
</div>
<!-- End Main Page Content -->
