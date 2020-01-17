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
            <li style="background-image: url(<?php echo base_url(); ?>assets/bumdes/<?php echo $detail->image ?>);">
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
      
      <section id="why-us" class="wow fadeIn">
      <div class="container-fluid">
        
        <header class="section-header">
          &nbsp;
          <h3><?php echo $detail->name ?></h3>
         
        </header>

        <div class="row">
          
          <div class="col-lg-8">
            <div class="why-us-content">
              <p><?php echo $detail->description ?></p>
            </div>
          </div>


          <div class="col-lg-4">
              <div class="wow bounceInUp clearfix">
                <h4>Kerajinan<div style="height:5px; background: orange;">&nbsp;</div></h4>
                 <?php foreach ($producte as $producte): ?>
                <div class="row" style="margin-bottom: 10px;">
                 
                  <div class="col-md-4">
                    <image src="<?php echo base_url(); ?>assets/bumdes/<?php echo $producte->image ?>" class="img-responsive" alt="" />
                  </div>
                  <div class="col-md-8">
                    <h6>
                       <a href="<?php echo site_url('../bumdes/detail/'.$producte->product_id) ?>"><?php echo $producte->name ?></a>
                      <br>
                      <span style="font-size:10px;">
                      kerajinan
                      </span>
                    </h6>
                  </div>
                   
                </div>
                <?php endforeach; ?>
              </div>
              
                 <br><br>
              <div class="wow bounceInUp clearfix">
                <h4>Pangan<div style="height:5px; background: orange;">&nbsp;</div></h4>


                <?php foreach ($pangan as $pangan): ?>
                <div class="row" style="margin-bottom: 10px;">
                  <div class="col-md-4">
                    <image src="<?php echo base_url(); ?>assets/bumdes/<?php echo $pangan->image ?>" class="img-responsive" alt="" />
                  </div>
                  <div class="col-md-8">
                    <h6>
                       <a href="<?php echo site_url('../bumdes/detail/'.$pangan->product_id) ?>"><?php echo $pangan->name ?></a>
                      <br>
                      <span style="font-size:10px;">
                        pangan
                      </span>
                    </h6>
                  </div>
                </div>
                <?php endforeach; ?>
              </div>
          </div>

        </div>
      </div>

     

    </section>

	<!-- jQuery -->
	<?php $this->load->view("_partials/footer.php") ?>

	</body>
</html>