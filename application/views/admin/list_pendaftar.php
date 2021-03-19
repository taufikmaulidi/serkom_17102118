<div class="container">
    <div class="row row-cols-2">
        <div class="col-md-6">
            <div class="table-responsive-sm mt-2">
                <caption>Peringkat Pendaftar</caption>
                <table id="examplae" class="table table-hover caption-top mt-3">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Tanggal Daftar</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <?php if( ! empty($pendaftar)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada        
                        $no =1;
                        foreach($pendaftar as $data){
                            echo "<tr><td>".$no."</td>
                            <td>".$data->namaSiswa."</td>
                            <td>".$data->tglDaftar."</td>
                            <td><a href='".base_url("admin/edit/".$data->idSiswa)."'>Ubah</a></td>
                            <td><a href='".base_url("admin/delete/".$data->idSiswa)."'>Hapus</a></td>
                            <td><a href='".base_url("admin/lulus/".$data->idSiswa)."'>Luluskan</a></td>
                            </tr>";
                        $no++;}
                        }else{ // Jika data siswa kosong        
                        echo "<tr><td align='center' colspan='7'>Data Tidak Ada</td></tr>";}?>
                </table>
            </div>
        </div>
        <div class="col-md-6">

        </div>
    </div>
</div>
