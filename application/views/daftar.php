<div class="container">
    <!-- <form id="daftar" method="post" action="<?php echo base_url('daftar/AddAction'); ?>" class="form-horizontal"> -->
    <?php echo form_open_multipart('daftar/AddAction');?>

        <div class="row row-cols-2 mt-3">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" >
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" name="password" id="password" >
                </div>
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Nikma">
                </div>
                <div class="form-group">
                    <label for="tmptLahir">Tempat Lahir</label>
                    <input type="text" class="form-control" name="tmptLahir" id="tmptLahir" placeholder="Banyumas">
                </div>
                <div class="form-group">
                    <label for="tglLahir">Tanggal Lahir</label>
                    <input type="text" name="tglLahir" class="form-control datepicker" />
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
                    <input class="form-control" name="alamatTinggal">
                </div>
                <div class="form-group">
                    <label for="emailSiswa">Email</label>
                    <input type="text" class="form-control" name="emailSiswa" id="email" placeholder="example@mail.com">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="noHp">Nomor HP</label>
                    <input type="text" class="form-control" name="noHp" id="noHp" placeholder="628123456789">
                </div>
                <div class="form-group">
                    <label for="asalSmp">Asal SMP</label>
                    <input type="text" class="form-control" name="asalSmp" id="asalSmp" placeholder="SMP NEGERI 2 CONTOH">
                </div>
                <div class="form-group">
                    <label for="namaAyah">Nama Ayah</label>
                    <input type="text" class="form-control" name="namaAyah" id="namaAyah" placeholder="Budi">
                </div>
                <div class="form-group">
                    <label for="namaIbu">Nama Ibu</label>
                    <input type="text" class="form-control" name="namaIbu" id="namaIbu" placeholder="Mawar">
                </div>
                <div class="form-group">
                    <label for="penghasilanOrtu">Penghasilan Orang Tua</label><br>
                    <input class="form-check-input" type="radio" name="penghasilanOrtu" id="penghasilanOrtu" value="500000">Rp. 500.000,-<br>
                    <input class="form-check-input" type="radio" name="penghasilanOrtu" id="penghasilanOrtu" value="1000000">Rp. 1.000.000,-<br>
                    <input class="form-check-input" type="radio" name="penghasilanOrtu" id="penghasilanOrtu" value="5000000">Rp. 5.000.000,-<br>
                    <input class="form-check-input" type="radio" name="penghasilanOrtu" id="penghasilanOrtu" value="10000000">Rp. 10.000.000,-<br>
                </div>
                <div class="input-group mb-3">
                    <!-- <input type="file" class="form-control" name="fotoSiswa" id="fotoSiswa"> -->
                    <input type="file" name="file" id="file" size="20" />
                    <!-- <label class="input-group-text" for="fotoSiswa">Upload</label> -->
                </div>
                <div class="text-center mb-2">
                    <button type="simpan" class="btn btn-primary">Simpan</button>
                    <a href="<?php echo base_url() . 'home'; ?>" type="batal" class="btn btn-primary ms-5">Batal</a>
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