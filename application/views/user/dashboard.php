<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
	<div class="alert alert-info" role="alert"> <i class="fas fa-info"></i>&nbsp
		Pengajuan Pinjaman anda sedang ditinjau oleh admin koperasi
	</div>
	<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Ajukan Pinjaman</button>

	<table class="table table-bordered tabel-striped table-hover">
		<tr>
			<th>No</th>
			<th width="200">Gaji</th>
			<th width="200">Jumlah Pinjaman</th>
			<th width="200">Jangka waktu</th>
			<th>Status</th>
		</tr>

		<?php
		$no =1;
		foreach ($loans as $loan) : ?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $loan->sallary ?></td>
				<td><?php echo $loan->loan ?></td>
				<td><?php echo $loan->duration . ' Tahun' ?></td>
				<td><?php echo $loan->status ?></td>
			</tr>
		<?php endforeach; ?>

	</table>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
