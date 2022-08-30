<link rel="stylesheet" href="import/template.css">
<link rel="stylesheet" href= "<?=base_url('import/template.css') ?>">

<h1 class="text-success"><?= $title ?></h1>
<hr>

<form name="form" method="POST" action="<?=site_url($aksi) ?>">

<div class="container">
<div class="col-sm-10">

	Nama Kelas :<input value="<?= $kelas['nama_kelas'] ?>" required="" type="text" name="nama" class="form-control" placeholder="Input nama kelas">
    <br>

	Jadwal Kelas :<input value="<?= $kelas['jadwal_kelas'] ?>" required="" type="text" name="jadwal" class="form-control" placeholder="Input jadwal kelas">
	<br>

	Ruangan :<input value="<?= $kelas['ruangan_kelas'] ?>" required="" type="text" name="ruangan" class="form-control" placeholder="Input ruang kelas">
	<br>

	Matkul :<input value="<?= $kelas['matkul_id'] ?>" required="" type="text" name="matkul" class="form-control" placeholder="Input mata kuliah">
	<br>

	Dosen :<input value="<?= $kelas['dosen_id'] ?>" required="" type="text" name="dosen" class="form-control" placeholder="Input Dosen">

	<br/><br/>
	<button type="submit" class="btn-primary" name="simpan">Simpan</button>
	<button type="submit" class="btn-default" name="reset">Reset</button>

</div>
</div>
	
</form>