<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<footer>
	<div class="container">
		<div class="row social">
			<div class="col-sm-3">
				<a href="tel:612.492.1804">612-492-1804</a>
			</div>
			<div class="col-sm-3">
				<a href="mailto:contact@mischief-studios.com">contact@mischief-studios.com</a>
			</div>
			<div class="col-sm-3">
				<ul class="list-inline">
					<li>
						<a target="_blank" href="https://www.facebook.com/Mischief-Studios-266425877120784/">
							<img src="<?php echo $view->getThemePath()?>/images/facebook-white-iso.png" alt="Visit Mischief Studios Facebook Page"/>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://www.linkedin.com/Mischief-Studios">
							<img src="<?php echo $view->getThemePath()?>/images/linkedin-white-iso.png" alt="Visit Mischief Studios Linkedin Profile"/>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-sm-3">
			</div>
		</div>
	</div>
</footer>

<?php $this->inc('elements/footer_bottom.php');?>

