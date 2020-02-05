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
            <h1><b>Our Contact </b></h1>
            <hr>
				<h3><i>Keep Developing </h3></i>
                    <h5>life without work is empty, so let's Learn</h5>
                    <br>
                        <div class="col-sm-12">
                            <h4><img src="<?php echo base_url('assets/img/icon/f.png')?>" width="40px" height="40px" > Maribu Valley</h4>
                            <h4> <img src="<?php echo base_url('assets/img/icon/i.png')?>" width="40px" height="40px"> maribu_valley</h4>
                            <h4><img src="<?php echo base_url('assets/img/icon/y.png')?>" width="40px" height="40px">  Maribu V012</h4>
         
	 		
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
