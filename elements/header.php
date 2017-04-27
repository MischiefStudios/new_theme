<?php defined('C5_EXECUTE') or die("Access Denied."); 

$this->inc('elements/header_top.php'); ?>

<header class="header-bar">
	<div class="container">
		<div class="row">
			<div class="header-brand col-md-3 col-sm-5 col-xs-10">
				<?php
				$a = new GlobalArea('Header Site Title');
				$a->display();
				?>
			</div>
			<div class="header-nav col-md-9 col-sm-7 col-xs-2">
				<?php
				$a = new GlobalArea('Header Navigation');
				$a->display();
				?>
			</div>
		</div>
	</div>
</header>