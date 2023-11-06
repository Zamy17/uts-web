<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Harga Barang</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Produk</th>
                <th>Stok</th>
                <th>Harga</th>
                <th>Jumlah</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $data = array(
                    array(1, "Minyak Telon", 30, 30000),
                    array(2, "Diapers", 20, 51000),
                    array(3, "Baby Oil", 10, 16000),
                    array(4, "Shampo Baby", 18, 20000),
                    array(5, "Bedak",15, 15000),
                    array(6, "Baju Bayi", 20, 35500),
                    array(7, "Jumper", 25, 50000)
                );

                // Hitung jumlah
                foreach ($data as $key => $value) {
                    $data[$key][4] = $value[2] * $value[3];
                }

                // Urutkan array berdasarkan nama produk
                usort($data, function ($a, $b) {
                    return $a[0] <=> $b[0];
                });

                // Tampilkan data
                foreach ($data as $key => $value) {
                    echo "<tr>";
                    echo "<td>" . $value[0] . "</td>";
                    echo "<td>" . $value[1] . "</td>";
                    echo "<td>" . $value[2] . "</td>";
                    echo "<td>" . number_format($value[3], 2, ",", ".") . "</td>";
                    echo "<td>" . number_format($value[4], 2, ",", ".") . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
