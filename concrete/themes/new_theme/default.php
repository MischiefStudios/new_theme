<?php defined('C5_EXECUTE') or die(_("Access Denied.")); $this->inc('includes/top.php'); ?>    
<body class="default" id="pageid<?php  print $c->getCollectionID(); ?>">
<img style="margin:-2000px" src="<?php echo $this->getThemePath()?>/facebookPost.png" />
<?php   $this->inc('includes/header.php'); ?>

			<section class="hero row">
				<div class="col-12">
					<?php $a = new Area('Hero Section 1'); $a->display($c); ?>
				</div>
			</section>
			<section class="main row flex-container">
				<div class="col-12">
					<?php $a = new Area('Main Section 1'); $a->display($c); ?>
				</div>
			</section>
			<section class="support row">
				<div class="col-12">
					<?php $a = new Area('Support Section 1'); $a->display($c); ?>
				</div>
			</section>

<?php  $this->inc('includes/footer.php'); ?>