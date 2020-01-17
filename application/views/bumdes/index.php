  <!DOCTYPE html>
<html lang="en">
	<head>
       <?php $this->load->view('_partials/header.php') ?>
	</head>
	<body>
	<div id="fh5co-page">
		<?php $this->load->view('_partials/navbar.php') ?>

		<div id="fh5co-main">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Kerajinan</h2>
				<div class="row row-bottom-padded-md">
						<?php foreach ($producte as $producte): ?>
					<div class="col-md-3 col-sm-6 col-padding text-center animate-box">
						<a href="<?php echo site_url('../bumdes/detail/'.$producte->product_id) ?>" class="work image-popup" style="background-image: url(<?php echo base_url(); ?>assets/bumdes/<?php echo $producte->image ?>");>
							<div class="desc">
								<h3><?php echo $producte->name ?></h3>
								<span>Rp. <?php echo $producte->price ?></span>
							</div>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>

			
            <div class="row row-bottom-padded-md">
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Pangan</h2>
				<div class="row row-bottom-padded-md">
						<?php foreach ($pangan as $pangan): ?>
					<div class="col-md-3 col-sm-6 col-padding text-center animate-box">
						<a href="<?php echo site_url('../bumdes/detail/'.$pangan->product_id) ?>" class="work image-popup" style="background-image: url(<?php echo base_url(); ?>assets/bumdes/<?php echo $pangan->image ?>");>
							<div class="desc">
								<h3><?php echo $pangan->name ?></h3>
								<span>Rp. <?php echo $pangan->price ?></span>
							</div>
						</a>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		
			<div class="fh5co-narrow-content">
				<div class="row">
					<div class="col-md-4 animate-box" data-animate-effect="fadeInLeft">
						<h1 class="fh5co-heading-colored">Get in touch</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
						<p class="fh5co-lead">Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						<p><a href="#" class="btn btn-primary">Learn More</a></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<?php $this->load->view("_partials/footer.php") ?>
	</body>
</html>

