<!DOCTYPE html>
<html>
<head>
    <title>Form Pesanan</title>
</head>
<body>
    <h2>Daftar Pesanan</h2>
    <form action="proses.php" method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama"><br><br>

        <label>Nomor Telepon:</label><br>
        <input type="text" name="telepon" ><br><br>


        <label>Produk:</label><br>
        <input type="text" name="produk"><br><br>

        <label>Jumlah:</label><br>
        <input type="number" name="jumlah"><br><br>

        <input type="submit" value="Kirim">
    </form>
</body>
</html>