<!DOCTYPE html>
<html lang="en" id="home">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="{{ asset('assets_frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_frontend/fontawesome/css/all.min.css') }}">
    <!-- jquery -->
    <script src="{{ asset('assets_frontend/js/jquery-3.4.1.min.js') }}"></script>
</head>

<body class="">
    @include('layouts.frontendnavbar')
    <!-- konten-->
    <!-- /* ====================Konfirmasi Pembayaran====================*/ -->
    <div class="box-pembayaran" id="box-pemby">
        <h2>KONFIRMASI PEMBAYARAN</h2>
        <div class="ket-pembayaran">
            Untuk melakukan konfirmasi pembayaran, silahkan cek email dari kami dan masukkan nomor invoice pada input dibawah, kemudian klik tombol Cari Data
        </div>
        <form class="serach-box">
            <div class="ket-serch">
                Input No Invoice
            </div>
            <input type="search" name="no_invoice" id="no_invoice">
            <button type="button" class="btn btn-success button">
                <a href="#poppembayaran" onclick="loadInvoice()"> Cari </a>
            </button>
        </form>
    </div>
    <!-- /* ====================Konfirmasi Pembayaran Akhir====================*/ -->


    <!-- ====== pop up ======= -->
    <div id="popuptambah">
        <form action="" class="popup-tambah" id="tambah">
            <div class="no-atlit">Nomor Lomba Atlit Aktif (ID: <span>123)</span></div>

            <div class="aksi-popup">
                <button type="submit" style="background-color: #90e98b;">Tambah Lomba</button>
                <button type="submit" style="background-color: #2980b9;">Simpan Perubahan</button>
                <a href="#poppembayaran" style="background-color: #e74c3c;">Kembali</a>
            </div>

            <div class="tabel-tambah">
                <table border="0" cellpadding="5" cellspacing="0">
                    <tr>
                        <th style="min-width: 100px;">Nama Atlit</th>
                        <th style="min-width: 100px;">Tanggal Lahir</th>
                        <th style="min-width: 80px;">Jenis Kelamin</th>
                        <th style="min-width: 100px;">Kelas</th>
                        <th style="min-width: 100px;">Kategori</th>
                        <th style="min-width: 100px;">Pilih Lomba</th>
                    </tr>
                    <tr>
                        <td>inemmmama</td>
                        <td>28 Desember 1999</td>
                        <td>laki-laki</td>
                        <td>kelas 4 sd</td>
                        <td>veteran</td>
                        <td>
                            <select name="lomba" id="lomba">
                                <option value="">--pilih--</option>
                                <option value=""> </option>
                            </select>
                            <button href="#" style="background-color: #e74c3c; color:white;">X</button>
                        <td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
    <!-- =================================================================== -->
    <div class="bg-popup" id="poppembayaran">
        <form class="popup-pembayaran" action="" id="">
            <div class="keterangan-popup">
                Konfirmasi pembayaran No Invoice <span>?</span>
            </div>

            <div class="input">
                <label for="">nama lengkap</label>
                <div class="ket"> - </div>
            </div>

            <div class="input-boxpopup">
                <div class="input">
                    <label for="">No Telepon</label>
                    <div class="ket"> -</div>
                </div>

                <div class="input">
                    <label for="">Email</label>
                    <div class="ket"> -</div>
                </div>
            </div>

            <div class="input-boxpopup">
                <div class="input">
                    <label for="">Nama Komunitas</label>
                    <div class="ket"> -</div>
                </div>

                <div class="input">
                    <label for="">Jumlah Atlit</label>
                    <div class="ket"> 0</div>
                </div>
            </div>

            <div class="input">
                <table border="1" cellpadding="5" cellspacing="0">
                    <tr>
                        <th style="min-width: 100px;">Nama Atlit</th>
                        <th style="min-width: 100px;">Tanggal Lahir</th>
                        <th style="min-width: 80px;">Jenis Kelamin</th>
                        <th style="min-width: 100px;">Kelas</th>
                        <th style="min-width: 200px;">Kategori</th>
                    </tr>
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td style="padding-right: 110px;">- <div class="tambah-nolomba"><a href="#popuptambah">tambah no lomba</a></div>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="input-boxpopup">
                <div class="input">
                    <label for="">Nama Bank</label>
                    <input type="text" name="nama_bank" id="nama_bank" placeholder="Masukan Nama Bank" required>

                </div>

                <div class="input">
                    <label for="">No Rekening</label>
                    <input type="text" name="no_rek" id="no_rek" placeholder="Masukan Nomor Rekening" required>
                </div>

                <div class="input">
                    <label for="">Nama Pemilik Rekening</label>
                    <input type="text" name="nama_pemilik" id="nama_pemilik" placeholder="Masukan Nama Pemilik Rekening" required>
                </div>
            </div>

            <div class="input-boxpopup">
                <div class="input">
                    <label for="">Total yang harus dibayar</label>
                    <div class="ket"> 0 </div>
                </div>

                <div class="input">
                    <label for="">upload bukti pembayaran</label>
                    <div class="upload-box">
                        <input type="file" name="" id="upload">
                    </div>
                </div>
            </div>

            <p>
                Pembayaran dapat dilakukan melalui: <br>
                *Nama bank: BCA <br>
                *Nomor Rekening: 8950299399 <br>
                *Atas Nama: Agus Prasetyo
            </p>

            <div class="input">
                <label for="">Status Pembayaran</label>
                <div class="ket"> Silakhan Upload bukti pembayaran dulu</div>
            </div>

            <div class="submit-pembayran">
                <a href="#box-pemby"><button type="button" style="background-color: #e74c3c; color:white;">keluar</button></a>
                <button type="submit" class="" style="background-color: #2980b9; color:white;">Simpan Perubahan</button>
            </div>
        </form>
    </div>
    <!-- ====== pop up akhir ======= -->
    </form>
    <!-- Akhir konten-->


    <footer>
        <div class="copyright">
            <h4><a href="#">Sistem Informasi Lomba</a></h4>
            <i class="fa fa-copyright" aria-hidden="true"> Template by: <a href="#">Kelompok 4</a></i>
        </div>
    </footer>

    <script src="{{ asset('assets_frontend/js/style.js') }}"></script>
    <script type="text/javascript">
        function loadInvoice() {
            var no_invoice = $('#no_invoice').val();
            $.ajax({
                url: "{{ url('konfirmasi/form') }}/" + no_invoice,
                type: "GET",
                success: function(data) {
                    $('#poppembayaran').html(data);
                }
            });
        }

        function loadLomba(nik_id) {
            $.ajax({
                url: "{{ url('konfirmasi/form2') }}/" + nik_id,
                type: "GET",
                success: function(data) {
                    $('#popuptambah').html(data);
                }
            });
        }

        function addRow() {
            $('#table_lomba').append("<tr>" + $('#trlomba').html() + "</tr>");
        }

        function deleteRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("table_lomba").deleteRow(i);
        }

        function saveData() {
            var id = $('#id').val();
            // alert("{{ url('konfirmasi/save') }}/" + id);
            console.log($('#tambah').serialize());
            $.ajax({
                url: "{{ url('konfirmasi/save') }}/" + id,
                type: "PUT",
                data: $('#tambah').serialize(),
                success: function(response) {
                    alert("Data Disimpan!");
                    $('#buttonback').click();
                },
                error: function(error) {
                    alert("Gagal menyimpan data");
                    console.error();
                }
            });
        }
    </script>
</body>

<script>
    $(document).ready(function(){      
        $('.eventt').hide();
    });
  </script>