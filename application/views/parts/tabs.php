<?php
	$studclass = (substr($_SERVER['REQUEST_URI'], 0, 9) == '/students' || $_SERVER['REQUEST_URI'] == '/') ? 'active' : '';
	$jourclass = (substr($_SERVER['REQUEST_URI'], 0, 8) == '/journal') ? 'active' : '';
	$groupclass = (substr($_SERVER['REQUEST_URI'], 0, 7) == '/groups') ? 'active' : '';
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
