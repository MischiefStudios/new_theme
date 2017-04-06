<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

</div>

<script src="<?php echo $view->getThemePath()?>/js/default.js"></script>

<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-XXXXX-X', 'auto');
	ga('send', 'pageview');
</script>

<?php View::element('footer_required'); ?>

</body>
</html>
