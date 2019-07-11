<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/bootstrap/css/bootstrap.min.css">
</head>
<body>
	
	<!-- navbar -->
	<?php $this->load->view('template_admin/navbar'); ?>

	
	<div class="row">
		<div class="col-md-3">

			<!-- sidemenu -->
			<?php $this->load->view('template_admin/side-menu'); ?>

		</div>
  		<div class="col-md-9">
			<!-- content -->
			<h4><?php echo $judul; ?></h4>
			<?php $this->load->view($content); ?>

  		</div>
	</div>


	<!-- footer -->
	<?php $this->load->view('template_admin/footer'); ?>


	<script src="<?php echo base_url(); ?>asset/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>