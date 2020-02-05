<!DOCTYPE html>
<html lang="en">
<head>

	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">
				
		<div class="container-fluid">
		
       
		<?php //$this->load->view("admin/_partials/breadcrumb.php") ?>

		<!-- Icon Cards-->
			<!-- Jumbotrom -->
			<div class="jumbotron text-center" id="jumbotron">
            <h1><b> Our Gallery Maribu Valley</b></h1>
            <hr>
                 <h2>Our Community</h2>
                 <br>
               
                
                 <div class="profolio" id="portfolio">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10">
                         </div>

                              <div class="row">
                              <div class="col-sm-5 ">
                              <a href="" class="tumbnail">
                              <img src="<?php echo base_url('assets/img/gallery/1.jpg') ?>" width="300px">
                              </a>
                              <h4>Working</h4>
                              </div>
                                 </div>
                              
                        <div class="row">
                           <div class="col-sm-5 ">
                              <a href="" class="tumbnail">
                                 <img src="<?php echo base_url('assets/img/gallery/2.jpg') ?>" width="300px">
                                    </a>
                                       <h4>Tools </h4>
                               </div>
                               </div>

                        <div class="row">
                              <div class="col-sm-5 ">
                                 <a href="" class="tumbnail">
                                    <img src="<?php echo base_url('assets/img/gallery/3.jpg') ?>" width="300px">
                                       </a>
                                       <h4>Analysis</h4>
                                 </div>
                              </div>
                        
                           <div class="row">
                                <div class="col-sm-5">
                                    <a href="" class="tumbnail">
                                     <img src="<?php echo base_url('assets/img/gallery/4.jpg') ?>" width="300px">
                                </a>
                               <h4>Work Relations</h4> 
                            </div>
                        </div>
                                
                        <div class="row">
                            <div class="col-sm-5">
                                  <a href="" class="tumbnail">
                                   <img src="<?php echo base_url('assets/img/gallery/5.jpg') ?>" width="300px">
                                      </a>
                                       <h4>Focus</h4>
                                </div>
                        </div>

                          <div class="row">
                                <div class="col-sm-12">
                                 <a href="" class="tumbnail">
                                   <img src="<?php echo base_url('assets/img/gallery/6.jpg') ?>" width="300px">
                                </a>
                               <h4>Team Working</h4> 
                            </div>
                          </div>
                        </div>
                    </div>
                 </div>
				
				
		  </div>
		  
          </div>
	 </div>
	 
	 

<!-- Akhir Jumbotron -->



		<!-- /.container-fluid -->

		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>
