<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view('_partials/header.php') ?>
</head>
<body>
	<div id="fh5co-page">
		<?php $this->load->view('_partials/navbar.php') ?>

<main id="main">
	 <?php foreach ($kontak_desa as $kontak_desa): ?>   
         
		<div id="fh5co-main">
			<div class="fh5co-more-contact">
             <section id="" class="features clearfix">
             
          <div class="content-page">
           <!-- Start content -->
            <div class="content">
              <div class="container-fluid">        
                  <div class="card-body">
                    <div class="mapouter"><div class="gmap_canvas"><?php echo $kontak_desa->maps ?><a href="https://www.vpnchief.com"></a></div><style>.mapouter{position:relative;text-align:right;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style>
                     </div>

                    </div>
                
                    </div> <!-- container -->

                </div> <!-- content -->

            </div>
                                      
            </section>              
				<div class="fh5co-narrow-content">
					<div class="row">
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-globe"></i>
								</div>
								<div class="fh5co-text">
									<p><a href="#"><?php echo $kontak_desa->email ?></a></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-map"></i>
								</div>
								<div class="fh5co-text">
									<p><?php echo $kontak_desa->alamat ?></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="fh5co-feature fh5co-feature-sm animate-box" data-animate-effect="fadeInLeft">
								<div class="fh5co-icon">
									<i class="icon-phone"></i>
								</div>
								<div class="fh5co-text">
									<p><a href="tel://"><?php echo $kontak_desa->telepon ?></a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="fh5co-narrow-content animate-box" data-animate-effect="fadeInLeft">
				
				<div class="row">
					<div class="col-md-4">
						<h2>Get In Touch</h2>
					</div>
				</div>
				<form action="">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Phone">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-primary btn-md" value="Send Message">
									</div>
								</div>
								
							</div>
						</div>
						
					</div>
				</form>
			</div>
				
		</div>
		<?php endforeach; ?>
	

		<?php $this->load->view("_partials/footer.php") ?>

	</body>
</html>