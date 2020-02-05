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
			<!-- About -->

<section class="jumbotron" id="jumbotron" >
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="text-center"> Our Profile Maribu Valley</h2>
                 <hr>
         </div>
    </div>
     
    <div class="row">
       <div class="col-sm-5 col-sm-offset-1 text-justify">
           <p><b>I created this website to provide website services and also how to provide temples 
               for other people to access them and even I provide clothes, photos, videos and other design services 
               that you can need for design.I can also help you how to make the XB design that we usually use to design
                our website pages.</p></b>
            <br>
       </div> 
       <div class="col-sm-5 col-sm-offset-1 text-justify">
           <p><b>here also I provide various applications that can help you for example; Adobe, Microsoft,
                and many more that you can find on this website.
                I hope this website is useful for you and good luck.
                greetings pace developer.</p></b>

                <br>
                
 </div>
 <div class="col-md-10 col-ms-1 text-center">
 <a href="" class="tumbnail" >
 <img src="<?php echo base_url('/assets/img/profile/1.jpg')?>" width="100px" height="100px">
 <img src="<?php echo base_url('/assets/img/profile/2.jpg')?>" width="100px" height="100px">
 <img src="<?php echo base_url('/assets/img/profile/3.jpg')?>" width="100px" height="100px">
 <img src="<?php echo base_url('/assets/img/profile/4.jpg')?>" width="100px" height="100px">
 </div>
 </div>
</section>

<!-- Akhir About -->



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
