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
				<div class="footer-left col-4">
					<?php $a = new Area('Footer Section 4'); $a->display($c); ?>
				</div>
				<div class="footer-middle col-4">
					<?php $a = new Area('Footer Section 5'); $a->display($c); ?>
				</div>
				<div class="footer-right col-4">
					<?php $a = new Area('Footer Section 6'); $a->display($c); ?>
				</div>
			</footer>
		</div>
<?php Loader::element('footer_required'); ?>
</body>
</html>
