<link rel="stylesheet" href="import/template.css">
<link rel="stylesheet" href= "<?=base_url('import/template.css') ?>">

<h1 class="text-success"><?= $title ?></h1>
<hr>

<form name="form" method="POST" method="POST" action="<?=site_url($aksi) ?>">
<div class="container">
<div class="col-sm-10">

	Nama Matkul : <input value="<?= $matkul['nama'] ?>" required="" type="text" name="nama" class="form-control" placeholder="Input Nama Matkul">
	<br/>

	Kode Matkul : <input value="<?= $matkul['kode'] ?>" required="" type="text" name="kode" class="form-control" placeholder="Input Kode Matkul">  
	<br/>

	SKS Matkul : <input value="<?= $matkul['sks'] ?>" required="" type="number" name="sks" class="form-control" placeholder="Input sks Matkul">
	<br/>

	<br/><br/>
	<button type="submit" class="btn-primary" name="simpan">Simpan</button>
	<button type="submit" class="btn-default" name="reset">Reset</button>
</div>
</div>

</form>