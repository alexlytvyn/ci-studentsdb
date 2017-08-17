<?php
	$studclass = ($_SERVER['REQUEST_URI'] == '/students' || $_SERVER['REQUEST_URI'] == '/') ? 'active' : '';
	$jourclass = ($_SERVER['REQUEST_URI'] == '/journal') ? 'active' : '';
	$groupclass = ($_SERVER['REQUEST_URI'] == '/groups') ? 'active' : '';
	?>

<!-- Start Subheader -->
		<div class="row" id="sub-header">
			<div class="col-xs-12">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="<?php echo $studclass; ?>"><a href="/students">Студенти</a></li>
					<li role="presentation" class="<?php echo $jourclass; ?>"><a href="/journal">Відвідування</a></li>
					<li role="presentation" class="<?php echo $groupclass; ?>"><a href="/groups">Групи</a></li>
				</ul>
			</div>
		</div>
		<!-- End SubHeader -->
