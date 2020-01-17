<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('_partials/header.php') ?>
</head>
<body>
	<div id="fh5co-page">
		<?php $this->load->view('_partials/navbar.php') ?>

		<div id="fh5co-main">
			<aside id="fh5co-hero" class="js-fullheight">
				<div class="flexslider js-fullheight">
					<ul class="slides">
				   	<li style="background-image: url(<?php echo base_url(); ?>assets/images/monas.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
					   				
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(<?php echo base_url(); ?>assets/images/taman-menteng.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
					   				
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				   	<li style="background-image: url(<?php echo base_url(); ?>assets/images/ragunan.jpg);">
				   		<div class="overlay"></div>
				   		<div class="container-fluid">
				   			<div class="row">
					   			<div class="col-md-8 col-md-offset-2 text-center js-fullheight slider-text">
					   				
					   			</div>
					   		</div>
				   		</div>
				   	</li>
				  	</ul>
			  	</div>
			</aside>
			
			
			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Berita Desa</h2>
				<div class="row row-bottom-padded-md">
					<?php foreach ($berita_desa as $berita_desa): ?>
					<div class="col-md-4 col-sm-8 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="<?php echo base_url(); ?>assets/berita_desa/<?php echo $berita_desa->image?>" class="img-responsive" alt="<?php echo substr($berita_desa->description, 0, 120) ?>"></a>
							<div class="desc">
								<h3><a href="<?php echo site_url('../home/berita/'.$berita_desa->id_berita) ?>"><?php echo $berita_desa->name ?></a></h3>
								<span><small><?php echo $berita_desa->kategori ?> </small></span>
								
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					
					<!-- <div class="col-md-4 col-sm-8 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="<?php echo base_url(); ?>assets/images/dki-jakarta.jpg" class="img-responsive" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"></a>
							<div class="desc">
								<h3><a href="desa-berita/anjungan/index.html">Anjungan DKI Jakarta</a></h3>
								<span><small> News Of Artificial Beauty </small></span>
								
								
							</div>
						</div>
					</div>

					<div class="col-md-4 col-sm-8 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="<?php echo base_url(); ?>assets/berita_desa/<?php echo $berita_desa->image?>" class="img-responsive" alt="<?php echo substr($berita_desa->description, 0, 120) ?>"></a>
							<div class="desc">
								<h3><a href="desa-berita/pulau/index.html"><?php echo $berita_desa->name ?></a></h3>
								<span><small> News Of Artificial Beauty </small></span>
								
							</div>
						</div>
					</div> -->
					
				</div>
			</div>

			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Tempat Wisata</h2>
				<div class="row row-bottom-padded-md">
					<?php foreach ($tempat_wisata as $tempat_wisata): ?>
					<div class="col-md-4 col-sm-8 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="<?php echo base_url(); ?>assets/wisata/<?php echo $tempat_wisata->image?>" class="img-responsive" alt="<?php echo substr($tempat_wisata->description, 0, 120) ?>"></a>
							<div class="desc">
								<h3><a href="<?php echo site_url('../tempat_wisata/detail/'.$tempat_wisata->id) ?>"><?php echo $tempat_wisata->name ?></a></h3>
								
							</div>
						</div>
					</div>
					<?php endforeach; ?>
					
					
				</div>
			</div>



			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Kecamatan</h2>
				<div class="row row-bottom-padded-md">
					<?php foreach ($kecamatan as $kecamatan): ?>
					<div class="col-md-4 col-sm-8 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="<?php echo base_url(); ?>assets/kecamatan/<?php echo $kecamatan->image?>" class="img-responsive" alt="<?php echo substr($kecamatan->description, 0, 120) ?>"></a>
							<div class="desc">
								<h3><a href="#"><?php echo $kecamatan->nama_kecamatan ?></a></h3>
								<span><small> https://kecamatan/mampang prapatan </small></span>
								
							</div>
						</div>
					</div>
						<?php endforeach; ?>
					
				</div>
			</div>



			<div class="fh5co-narrow-content">
				<h2 class="fh5co-heading animate-box" data-animate-effect="fadeInLeft">Event</h2>
				<div class="row row-bottom-padded-md">
					<?php foreach ($event as $event): ?>
					<div class="col-md-4 col-sm-8 col-padding animate-box" data-animate-effect="fadeInLeft">
						<div class="blog-entry">
							<a href="#" class="blog-img"><img src="<?php echo base_url(); ?>assets/event/<?php echo $event->image?>" class="img-responsive" alt="<?php echo substr($event->description, 0, 120) ?>"></a>
							<div class="desc">
								<h3><a href="<?php echo site_url('../home/detail/'.$event->id_event) ?>"><?php echo $event->kategori ?></a></h3>
							

							</div>
						</div>
					</div>
					<?php endforeach; ?>
					
				</div>
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
								<i class="icon-diamond"></i>
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

			
		</div>
	</div>

	<!-- jQuery -->
	<?php $this->load->view("_partials/footer.php") ?>

	</body>
</html>

