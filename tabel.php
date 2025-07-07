<!DOCTYPE html>
<html>
<head>

    <title>Daftar Pesanan</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 30px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #eee;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Daftar Pesanan</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Keterangan</th>
        </tr>

        <?php
        $koneksi = mysqli_connect("localhost", "root", "", "toko pesanan");

        if (!$koneksi) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM pesanan";
        $result = mysqli_query($koneksi, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                        <td>{$row['nama']}</td>
                        <td>{$row['telepon']}</td>
                        <td>{$row['produk']}</td>
                        <td>{$row['jumlah']}</td>
                        <td>{$row['keterangan']}</td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Belum ada pesanan</td></tr>";
        }

        mysqli_close($koneksi);
        ?>
    </table>
</body>
</html>
