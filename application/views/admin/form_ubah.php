<div class="container">
    <form id="daftar" method="post" action="<?php echo base_url('admin/editAction'); ?>" class="form-horizontal">
        <div class="row row-cols-2 mt-3">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="hidden" class="form-control" name="idSiswa" id="idSiswa" value="<?php echo $pendaftar->idSiswa;?>">
                    <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $pendaftar->namaSiswa;?>">
                </div>
                <div class="form-group">
                    <label for="tmptLahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tmptLahir" id="tmptLahir" value="<?php echo $pendaftar->tmptLahir;?>">
                </div>
                <div class="form-group">
                    <label for="tglLahir">Tanggal Lahir</label>
                    <input type="text" name="tglLahir" class="form-control datepicker" value="<?php echo $pendaftar->tglLahir;?>"/>
                </div>
                <div class="form-group">
                    <label for="wargaNegara">Warga negara</label>
                    <select class="form-select" name="wargaNegara">
                        <option value="WNI">WNI</option>
                        <option value="WNA">WNA</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="alamatTinggal">Alamat Tinggal</label>
                    <input class="form-control" name="alamatTinggal" value="<?php echo $pendaftar->alamatTinggal;?>">
                </div>
                <div class="form-group">
                    <label for="emailSiswa">Email</label>
                    <input type="text" class="form-control" name="emailSiswa" id="email" value="<?php echo $pendaftar->email;?>">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="noHp">Nomor HP</label>
                    <input type="text" class="form-control" name="noHp" id="noHp" value="<?php echo $pendaftar->noHp;?>">
                </div>
                <div class="form-group">
                    <label for="asalSmp">Asal SMP</label>
                    <input type="text" class="form-control" name="asalSmp" id="asalSmp" value="<?php echo $pendaftar->asalSmp;?>">
                </div>
                <div class="form-group">
                    <label for="namaAyah">Nama Ayah</label>
                    <input type="text" class="form-control" name="namaAyah" id="namaAyah" value="<?php echo $pendaftar->namaAyah;?>">
                </div>
                <div class="form-group">
                    <label for="namaIbu">Nama Ibu</label>
                    <input type="text" class="form-control" name="namaIbu" id="namaIbu" value="<?php echo $pendaftar->namaIbu;?>">
                </div>
                <div class="form-group">
                    <label for="penghasilanOrtu">Penghasilan Orang Tua</label><br>
                    <input class="form-check-input" type="radio" name="penghasilanOrtu" id="penghasilanOrtu" value="500000">Rp. 500.000,-<br>
                    <input class="form-check-input" type="radio" name="penghasilanOrtu" id="penghasilanOrtu" value="1000000">Rp. 1.000.000,-<br>
                    <input class="form-check-input" type="radio" name="penghasilanOrtu" id="penghasilanOrtu" value="5000000">Rp. 5.000.000,-<br>
                    <input class="form-check-input" type="radio" name="penghasilanOrtu" id="penghasilanOrtu" value="10000000">Rp. 10.000.000,-<br>
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="fotoSiswa">
                    <label class="input-group-text" for="fotoSiswa">Upload</label>
                </div>
                <div class="text-center mb-2">
                    <button type="simpan" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url() . 'admin'; ?>" type="batal" class="btn btn-primary ms-5">Batal</a>
                </div>

            </div>
    </form>
</div>
</div>
<script type="text/javascript">
    $(function() {
        $(".datepicker").datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true,
        });
    });
</script>