<!-- BARU -->
<link rel="stylesheet" href="<?= base_url('import/template.css') ?>"
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?= site_url('welcome')?>">HOME</a></li>
      <li><a href="<?= site_url('mahasiswa')?>">Mahasiswa</a></li>
      <li><a href="<?= site_url('dosen')?>">Dosen</a></li>
      <li><a href="<?= site_url('matkul')?>">Mata Kuliah</a></li>
      <li><a href="<?= site_url('kelas')?>">Kelas</a></li>
    </ul>
  </div>
</nav>

<style>
	th, td{
		text-align: center;
	}
</style>

<h1><center>DATA MAHASISWA</h1></center>
<a class="btn btn-success" href="<?= site_url('mahasiswa/tambah') ?>">TAMBAH</a>
<hr>

<table class="table table-bordered table-hover">
	<tr class="active">
		<th>No</th>
		<th>NIM</th>
		<th>NAMA</th>
		<th>PRODI</th>
		<th>JENIS KELAMIN</th>
		<th>AGAMA</th>
		<th>AKSI</th>
	</tr>
	<!-- di ulang sebanyak DB -->
	<?php
	$no = 1;
	foreach($mhs as $value){
	?>
	<tr>
		<td><?= $no ?></td>
		<td><?= $value['nim'] ?></td>
		<td><?= $value['nama_mhs'] ?></td>
		<td><?= $value['prodi'] ?></td>
		<td><?= $value['jk_mhs'] ?></td>
		<td><?= $value['agama_mhs'] ?></td>
		<td>
			<a class="btn btn-warning btn-sm" href="<?= site_url('mahasiswa/ubah/' . $value['id_mhs']) ?>">UBAH</a>
			<a class="btn btn-danger btn-sm" href="<?= site_url('mahasiswa/hapus/' . $value['id_mhs']) ?>"
				onclick="return confirm('Ko yakinkah mau hapus ?')">HAPUS</a>
		</td>
	</tr>
	<?php
		$no = $no + 1;
	}
	?>
</table>