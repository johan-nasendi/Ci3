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

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/product/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $product->no_id?>" />

							<div class="form-group">
								<label for="name">Name*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Your Name name" value="<?php echo $product->nama ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Date Of Birth</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="date" name="price"  placeholder="Your Brithday" value="<?php echo $product->ttl ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

							
							<div class="form-group">
								<label for="name">Gender</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="jenis_kelamin" min="0" placeholder="Your Gender" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

							
							<div class="form-group">
								<label for="name">Religion</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="agama" min="0" placeholder="Your Religion" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

							
							<div class="form-group">
								<label for="name">Address</Address></label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="alamat"  placeholder="Your Address" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>



							<div class="form-group">
								<label for="name">Email</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="email" min="0" placeholder="Your Email" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<input type="hidden" name="old_image" value="<?php echo $product->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Description*</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Product description..."><?php echo $product->description ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('description') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
