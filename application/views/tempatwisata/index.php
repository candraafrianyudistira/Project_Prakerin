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
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Tempat Wisata Yang Ada Di Kota Jakarta</h2>
				<div class="row row-bottom-padded-md">
					<?php foreach ($tempat_wisata as $tempat_wisata): ?>
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="<?php echo base_url(); ?>assets/wisata/<?php echo $tempat_wisata->image ?>" class="img-responsive" alt="<?php echo substr($tempat_wisata->description, 0, 120) ?>"></a>
							<div class="desc">
								<h3><a href="<?php echo site_url('../tempat_wisata/detail/'.$tempat_wisata->id) ?>"><?php echo $tempat_wisata->name ?></a></h3>
								
							</div>
						</div>
					</div>
					<?php endforeach; ?><!-- 
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="<?php echo base_url(); ?>assets/images/ragunan.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3><a href="#">Ragunan</a></h3>
								
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="<?php echo base_url(); ?>assets/images/museum-fatahilah.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3><a href="#">Museum Fatahilah</a></h3>
								
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="<?php echo base_url(); ?>assets/images/monas-5.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3><a href="#">Monas</a></h3>
								
							</div>
						</div>
					</div> -->

				</div>
			</div>
		
			<div id="get-in-touch">
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
	</div>

	<!-- jQuery -->
	<?php $this->load->view("_partials/footer.php") ?>

	</body>
</html>