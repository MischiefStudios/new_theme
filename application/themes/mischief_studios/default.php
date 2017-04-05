<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<?php $this->inc('elements/header.php'); ?>


<div class="hero">
	<video src="<?php echo $view->getThemePath()?>/images/HomepageBanner.mp4" type="video/mp4" autoplay="" loop="true"></video>
	<div class="hero-content">
		<h2>Storytelling through website design and analysis.</h2>
		<div class="tagline"></div>
	</div>
</div>
<div class="services container">
	<div class="row">
		<div class="col-sm-12">
			<h2 class="text-center">Services</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<h3>Custom Design</h3>
			<p>Simple and functional designs. Clutter free. Reach your audience on all of their devices. Great performance.</p>
			<a href="/"><span class="btn-success">Link</span></a>
		</div>
		<div class="col-sm-4">
			<h3>Take Control</h3>
			<p>Have your own host. Take control, manage your site from any computer with an internet connnection. CMS gives you the control because it's so easy.</p>
			<button>this is a button</button>
		</div>
		<div class="col-sm-4">
			<h3>All the Features you need</h3>
			<p>Calendars, events, blog, ecommerce, donations...</p>
		</div>
	</div>
</div>
<!-- <div class="about">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="text-center">Who are we?</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<img src="/"/>
						<h3>Natasha</h3>
						<p>Some text can go here about the service. Some text can go here about the service. Some text can go here about the service. Some text can go here about the service. </p>
					</div>
					<div class="col-sm-6">
						<img src="/"/>
						<h3>Nick</h3>
						<p>Some text can go here about the service. Some text can go here about the service. Some text can go here about the service. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->

<?php $this->inc('elements/footer.php');
