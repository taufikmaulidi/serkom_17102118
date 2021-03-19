<div class="container" style="">
    <h2 class="text-center mb-4">Keterangan Lulus</h2>
    <div class="col-md-12 mb-4">
        <h4 class="text-center">
        <?php echo $this->session->userdata('nama_siswa');?>, Anda dinyatakan <?php if($pendaftar[0]['isLulus']==0){
                echo "Tidak Lulus";
            }else{
                echo "Lulus";
            }
            ?>
        </h4>
    </div>
</div>