<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<main>
    <?php $a = new Area('Main'); $a->enableGridContainer(); $a->display($c); ?>
</main>

<?php $this->inc('elements/footer.php'); ?>