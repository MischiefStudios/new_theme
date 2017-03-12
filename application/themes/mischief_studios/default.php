<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>

<main>
    <div class="hero">
      <video src="http://prolificinteractive.com/img/ProlificWebHomepage.mp4" type="video/mp4" autoplay="" loop="true"></video>
      <div class="hero-content">
        <h2>Headline</h2>
        <div class="tagline">tagline goes here</div>
        <div class="btn btn-primary">Contact Us</div>
      </div>
    </div>
    <section>
   		paralax<br><br>
    </section>
    <section>
   		features<br><br>
    </section>

    <?php
    $a = new Area('Page Footer');
    $a->enableGridContainer();
    $a->display($c);
    ?>
</main>

<?php $this->inc('elements/footer.php'); ?>
