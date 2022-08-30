<link rel="stylesheet" href="import/template.css">
<link rel="stylesheet" href= "<?=base_url('import/template.css') ?>">

<h1 class="text-success"><?= $title ?></h1>
<hr>

 
<form name="form" method="POST" action="<?=site_url($aksi) ?>">
<div class="container">
<div class="col-sm-10">

	NIM :<input value="<?= $mhs['nim'] ?>" required="" name="nim" type="number" class="form-control" placeholder="Silahkan Input NIM">
	<br/>

	Nama Lengkap : 
	<input value="<?= $mhs['nama_mhs'] ?>" required="" name="nama" type="text" class="form-control"  placeholder="Silahkan Input Nama">
	<br/>

	Jenis Kelamin : 
	<!-- nilai jk_mhs = Laki (v)
	nilai		= perempuan (v) -->
	<input <?= $mhs['jk_mhs'] == 'Laki-Laki' ? 'checked' : null ?> required="" name="jenis" type="radio" value="Laki-Laki"> Laki-Laki
	<input <?= $mhs['jk_mhs'] == 'Perempuan' ? 'checked' : null ?> required="" name="jenis" type="radio" value="Perempuan"> Perempuan
	<br></br>

	Agama : 
	<select required="" name="agama" class="form-control"  placeholder="---> Pilih Agama <---">
		<option value="">--> Pilih Agama <--</option>
		<option <?= $mhs['agama_mhs'] == 'Islam' ? 'selected' : null ?> value="Islam">Islam</option>
		<option <?= $mhs['agama_mhs'] == 'Kristen' ? 'selected' : null ?> value="Kristen">Kristen</option>
		<option <?= $mhs['agama_mhs'] == 'Katolik' ? 'selected' : null ?> value="Katolik">Katolik</option>
		<option <?= $mhs['agama_mhs'] == 'Hindu' ? 'selected' : null ?> value="Hindu">Hindu</option>
		<option <?= $mhs['agama_mhs'] == 'Budha' ? 'selected' : null ?> value="Budha">Budha</option>
	</select>

	<br></br>
	<button type="submit" class="btn-info" name="simpan">Simpan</button>
	<button type="submit" class="btn-default" name="reset">Reset</button>
</div>	
</div>
	
</form>