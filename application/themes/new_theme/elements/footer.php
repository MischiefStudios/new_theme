<?php defined('C5_EXECUTE') or die("Access Denied."); ?>


			<footer class="footer row">
				<div class="footer col-12">
					<?php $a = new Area('Footer Section 1'); $a->display($c); ?>
				</div>
				<div class="footer-left col-6">
					<?php $a = new Area('Footer Section 2'); $a->display($c); ?>
				</div>
				<div class="footer-right col-6">
					<?php $a = new Area('Footer Section 3'); $a->display($c); ?>
				</div>
				<div>
					<?php echo Core::make('helper/navigation')->getLogInOutLink() ?>
				</div>
			</footer>
		</div>

	</div>
	<?php View::element('footer_required'); ?>
</body>
</html>
