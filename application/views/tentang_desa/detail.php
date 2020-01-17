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
				<div class="row row-bottom-padded-md">
					<?php foreach ($tentang_desa as $tentang_desa): ?>
					
					
					<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
						<p><?php echo $detail->description ?></p>
						
						 	    
					</div>
				
			<div class="fh5co-narrow-content">
					<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Aplikasi Internal</h2>
					<div class="row">
						<div class="col-md-6">
							<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-settings"></i>
								</div>
								<div class="fh5co-text">
									<h3>Strategy</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-search4"></i>
								</div>
								<div class="fh5co-text">
									<h3>Explore</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-paperplane"></i>
								</div>
								<div class="fh5co-text">
									<h3>Direction</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="fh5co-feature animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-params"></i>
								</div>
								<div class="fh5co-text">
									<h3>Expertise</h3>
									<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
								</div>
							</div>
						</div>
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
		<?php endforeach; ?>

		<?php $this->load->view("_partials/footer.php") ?>

	</body>
</html>