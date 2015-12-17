<?php 

include '../../Koneksi/koneksi.php';

mysqli_query($con,"INSERT INTO anggota SET id_buku = '$_POST[idbuku]',ID_Anggota= '$_POST[idanggota]',Nama_Anggota= '$_POST[namaanggota]',Alamat_Anggota= '$_POST[alamatanggota]',no_telepon = '$_POST[notelepon]',kode_pinjam= '$_POST[kodepinjam]',lama_pinjam = '$_POST[lamapinjam]',tanggal_peminjaman = '$_POST[tanggalpeminjaman]',tanggal_pengembalian = '$_POST[tanggalpengembalian]'");
echo "Data telah tersimpan";
 ?>
 <a href="Peminjaman.php">Tampil artikel</a>