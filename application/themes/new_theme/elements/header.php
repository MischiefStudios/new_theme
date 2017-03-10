<?php defined('C5_EXECUTE') or die("Access Denied."); 

$this->inc('elements/header_top.php'); ?>

<?php $as = new GlobalArea('Header Search'); 
$blocks = $as->getTotalBlocksInArea(); 
$displayThirdColumn = $blocks > 0 || $c->isEditMode(); ?>
	
			<div class="grid">
				<header class="header row">
					<div class="col-12">
						<h1 class="text-thin"> <?php $a = new Area('Site Title'); $a->display($c); ?></h1>
					</div>
				</header>