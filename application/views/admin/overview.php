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
			<h1><b>Welcome to Maribu Valley</b></h1>
				<h3><i>Keep Developing </h3></i>
        		<img src="<?php echo base_url('assets/img/log.png') ?>" width="250px" height="250px">
					<h5>life without work is empty, so let's Learn</h5>
					<p><a class="btn btn-primary btn-lg" href="<?php echo site_url('admin/products/profile')?> " role="button" class="page-scroll">Learn more</a></p>
					<i class="fa fa-camera fa-2x"></i>
					<i class="fa fa-book fa-2x"></i>
					<i class="fa fa-code fa-2x"></i>
				 </div>
			 <!-- akhir jumbotron1 -->
			 
			 <!-- jum 2 -->
			  <div class="jumbotron" id="Jumb">
				 <div class="container">
					 <div class="row">
						 <div class="col-sm-12 ">
							 
		 <div class="blog-post">
		 	<h4><i class="fa fa-info fa-1x"></i> New Post</h4>
            <h2 class="blog-post-title"></h2>
            <p class="blog-post-meta">January 22, 2020 by <a href="#">Antroy</a></p>
           
              <a href="#" class="thumbnail">
              	 <img src="<?php echo base_url('assets/img/3.jpg') ?>" width="250px" height="200px">
       
            <p><i>Berkerja dengan kemampuan kami yang kami miliki <a href="#">dalam pengembang Ilmu ITC</a>, 
				adapun perkembang yang kami lakukan delam setiap proses perkerjaan kami ialah memberikan yang terbaik kepada yang membutuhkan.</p></i>
				<hr>
             </div>
          </div>
          <br>

          <div class="blog-post">
		  <h4><i class="fa fa-circle fa-1x"></i> New Blog Post</h4> 
            <h2 class="blog-post-title"></h2>
            <p class="blog-post-meta">January 20, 2020 by <a href="#">Antroy</a></p>
            
              <a href="#" class="thumbnail">
            <img src="<?php echo base_url('assets/img/4.jpg') ?>" width="250px" height="200px">
            <p><i>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam.
			 Menganalisi perkembang yang berjalan di dalam tim kami untuk mengatahui perkembang kami sudah sejauh mana berjalan dan berkembang</p></i>
			 <hr>
          </div>

		  <br>

          <div class="blog-post">
		  <h4><i class="fa fa-circle fa-1x"></i> Another blog post</h4>
            <h2 class="blog-post-title"></h2>
            <p class="blog-post-meta">January 22, 2030 by <a href="#">Antroy</a></p>
              <a href="#" class="thumbnail">
            <img src="<?php echo base_url('assets/img/5.jpg') ?>" width="250px" height="200px">
            <p><i>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, Membentuk sebuat komunitas yang  di dalam nya pempunyai kemampuan masing-masing, 
			 untuk menangani setiap perkerjaan yang kami dalam komunitas kami, karna itu komunitas dan relasi itu sangatlah peting untuk di jaga.</p></i>
			 <hr>
         	 </div>

       						 </div>
						 </div> 
					 </div>
				 </div>
			 </div>
	 
		 </div>
	 </div>
	 		
	 

<!-- Akhir Jumbotron  2-->



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
