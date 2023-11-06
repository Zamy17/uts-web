<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid black;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Tabel Harga Barang</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>

        <?php
        // Data barang dalam bentuk array multidimensi
        $data_barang = [
            ['Minyak Telon', 30, 15000],
            ['Diapers', 20, 15000],
            ['Baby Oil', 10, 16000],
            ['Shampo Baby', 18, 20000],
            ['Bedak', 15, 15000],
            ['Baju Bayi', 20, 35500],
            ['Jumper', 25, 50000],
        ];

        // Mengurutkan data berdasarkan nama produk
        usort($data_barang, function ($a, $b) {
            return strcmp($a[0], $b[0]);
        });

        $id = 1;

        // Menampilkan data ke dalam tabel
        foreach ($data_barang as $barang) {
            echo '<tr>';
            echo '<td>' . $id . '</td>';
            echo '<td>' . $barang[0] . '</td>';
            echo '<td>' . $barang[1] . '</td>';
            echo '<td>' . $barang[2] . '</td>';
            echo '<td>' . ($barang[1] * $barang[2]) . '</td>';
            echo '</tr>';
            $id++;
        }
        ?>
    </table>
</body>
</html>
