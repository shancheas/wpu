
<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div class="alert alert-success" role="alert"> <i class="fas fa-users"></i> Form Input Pinjaman</div>

	<form method="post" action="<?php echo base_url('user/input_aksi') ?>" >
		<div class="form-group">
			<label>Gaji</label>
			<input type="varchar" name="gaji" placeholder="Masukan Gaji Anda" class="form-control">
			<?php echo form_error('gaji','<div class="text_danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>Jumlah Pinjaman</label>
			<input type="varchar" name="loan" placeholder="Masukan Jumlah Pinjaman" class="form-control">
			<?php echo form_error('loan','<div class="text_danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>Usia</label>
			<input type="varchar" name="age" placeholder="Masukan Usia anda" class="form-control">
			<?php echo form_error('age','<div class="text_danger small" ml-3>') ?>
		</div>

		<div class="form-group">
			<label>Jangka Waktu</label>
			<input type="varchar" name="duration" placeholder="Masukan Jangka Waktu dalam tahun" class="form-control">
			<?php echo form_error('duration','<div class="text_danger small" ml-3>') ?>
		</div>

		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

