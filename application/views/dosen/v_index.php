<link rel="stylesheet" href="import/template.css">
<link rel="stylesheet" href= "<?=base_url('import/template.css') ?>">

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

<h1><center>DATA DOSEN</h1></center>
<hr>


<a class="btn btn-success" href="<?= site_url('dosen/tambah') ?>">TAMBAH</a>
<hr>

<table class="table table-bordered table-hover">
	<tr  class="active">
		<th>NO</th>
		<th>NIDN</th>
		<th>NAMA</th>
		<th>JK</th>
		<th>Prodi</th>
		<th>Aksi</th>
	</tr>

	<?php 
	$no = 1;
	foreach($dosen as $value) {
	 ?>

	<tr>
		<td><?= $no ?></td>
		<td><?= $value ['nidn'] ?></td>
		<td><?= $value ['nama_dosen'] ?></td>
		<td><?= $value ['jk_dosen'] ?></td>
		<td><?= $value ['prodi'] ?></td>
		<td>
			<a class="btn btn-warning" href="<?= site_url('dosen/ubah/' . $value['id_dosen']) ?>">UBAH</a>
			<a onclick="return confirm('apakah anda yakin?')" class="btn btn-danger" href="<?= site_url('dosen/hapus/' . $value['id_dosen']) ?>">HAPUS</a>
		</td>
	</tr>
	<?php 
	$no = $no + 1;

	}
	 ?>
	
</table>
	
