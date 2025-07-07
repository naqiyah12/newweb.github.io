<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "toko pesanan"); // tanpa spasi pada nama database

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Ambil data dari form
$nama     = $_POST['nama'];
$telepon  = $_POST['telepon'];
$produk   = $_POST['produk'];
$jumlah   = $_POST['jumlah'];

// Tentukan keterangan
if (strtolower($produk) == "laptop" && $jumlah >= 5) {
    $keterangan = "Butuh konfirmasi";
} else {
    $keterangan = "Langsung diproses";
}

// Simpan ke database
$sql = "INSERT INTO pesanan (nama, telepon, produk, jumlah, keterangan)
        VALUES ('$nama', '$telepon', '$produk', '$jumlah', '$keterangan')";

if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil disimpan.<br><br>";
    echo "<a href='tabel.php'>Lihat Hasil Pesanan</a>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>