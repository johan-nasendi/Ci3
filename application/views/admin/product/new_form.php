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

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data" >
							<div class="form-group">
								<label for="name">Name</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Your  name" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="price">Date Of Birth</label>
								<input class="form-control <?php echo form_error('address brith') ? 'is-invalid':'' ?>"
								 type="date" name="price"  placeholder="Your Data Of Brith" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>
							
							<div class="form-group">
								<label for="name">Gender</label>
								<p><input type="radio" name="name1" value="Male" />Male</p>
								<p><input type="radio" name="name1" value="Famale" />Famale</p>
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

							
							<div class="form-group">
								<label for="name">Religion</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="name2"  placeholder="Your Reogion" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Address</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="address"  placeholder="Your Address" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>

						


							<div class="form-group">
								<label for="email">Email</label>
								<input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="text" name="email"  placeholder="Your email" />
								<div class="invalid-feedback">
									<?php echo form_error('price') ?>
								</div>
							</div>


							<div class="form-group">
								<label for="name">Photo</label>
								<input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Description*</label>
								<textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
								 name="description" placeholder="Your description..."></textarea>
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
