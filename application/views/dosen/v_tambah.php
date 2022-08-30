<link rel="stylesheet" href="import/template.css">
<link rel="stylesheet" href= "<?=base_url('import/template.css') ?>">

<h1 class="text-success"><?= $title ?></h1>
<hr>

<form name="form" method="POST" action="<?=site_url($aksi) ?>">
<div class="container">
<div class="col-sm-10">

	NIDN :<input value="<?= $dosen['nidn'] ?>" required="" type="number" name="nidn" class="form-control" placeholder="Silahkan Input NIDN">
    <br>

	Nama:<input value="<?= $dosen['nama_dosen'] ?>" required="" type="text" name="nama" class="form-control" placeholder="Silahkan Input Nama">
	
	<br>
	JK :
	<input <?= $dosen['jk_dosen'] == 'Laki-Laki' ? 'checked' : null?> required="" type="radio" name="jenis" value="Laki-Laki">Laki-Laki
	
	<input <?= $dosen['jk_dosen'] == 'Perempuan' ? 'checked' : null?> required="" type="radio" name="jenis" value="Perempuan">Perempuan
	<br/>

	<br/><br/>
	<button type="submit" class="btn-primary" name="simpan">Simpan</button>
	<button type="submit" class="btn-default" name="reset">Reset</button>
</div>
</div>
	
</form>