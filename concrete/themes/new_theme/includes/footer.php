			<footer class="footer row">
				<div class="footer col-12">
					<?php $a = new Area('Footer'); $a->display($c); ?></li>
				</div>
				<div class="footer-left col-6">
					<?php $a = new Area('Footer Left'); $a->display($c); ?></li>
				</div>
				<div class="footer-right col-6">
					<?php $a = new Area('Footer Right'); $a->display($c); ?></li>
				</div>
				<div class="footer-left col-4">
					<?php $a = new Area('Footer Left 4'); $a->display($c); ?></li>
				</div>
				<div class="footer-middle col-4">
					<?php $a = new Area('Footer Middle 4'); $a->display($c); ?></li>
				</div>
				<div class="footer-right col-4">
					<?php $a = new Area('Footer Right 4'); $a->display($c); ?></li>
				</div>
			</footer>
		</div>
<?php Loader::element('footer_required'); ?>
</body>
</html>
