<?php for ($i = 1; $i <= $jumlah ; $i++){ ?>
        <div class="box">
        <div class="keterangan"><h1>Identitas Anggota <?php echo $i; ?> </h1></div>                       
            <div class="input">
                <label for="namaanggota">nama anggota</label>
                <input type="text" id="namaanggota" placeholder="masukan nama anggota komunitas">
            </div>            
            <div class="input">
                <label for="namakom">Tanggal lahir</label>
                <input type="date" id="namakom">
            </div>                          
            <div class="input">
                <label for="">jenis kelamin</label>
                <select name="" id="">
                    <option value="">--pilih--</option>
                    <option value="">laki - laki</option>
                    <option value="">perempuan</option>
                </select>
            </div>                          
            <div class="input">
                <label for="">Status kewarganegaraan</label>
                <select name="" id="">
                    <option value="">--pilih--</option>
                    <option value="">Warga negara indonesia</option>
                    <option value="">Warga negara asing</option>
                </select>
            </div>
        </div>
        <?php }?>
       