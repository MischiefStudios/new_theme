<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<!--<div id="Main"><?php //echo $innerContent; ?></div>-->

<?php $this->inc('elements/header.php'); ?>

			<section class="hero row">
				<div class="col-12">
					<?php $a = new Area('Hero Section 1'); $a->display($c); ?>
				</div>
			</section>
			<section class="main row flex-container">
				<div class="col-12">
					<?php View::element('system_errors', [
	                    'format' => 'block',
	                    'error' => isset($error) ? $error : null,
	                    'success' => isset($success) ? $success : null,
	                    'message' => isset($message) ? $message : null,
	                ]);
	                echo $innerContent; ?>
				</div>
			</section>
			<section class="support row">
				<div class="col-12">
					<?php $a = new Area('Support Section 1'); $a->display($c); ?>
				</div>
			</section>

<?php $this->inc('elements/footer.php'); ?>