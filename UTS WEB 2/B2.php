<?php
// Data produk dan harga
$produk = [
    'Baju Bayi' => 35500,
    'Diapers' => 51000,
    'Bedak' => 15000,
    'Minyak Telon' => 60000
];

// Menghitung total pembelian
$total_pembelian = array_sum($produk);

// Menghitung diskon
$diskon = 0;
if ($total_pembelian >= 200000) {
    $diskon = 0.20;
} elseif ($total_pembelian >= 150000) {
    $diskon = 0.10;
}

// Menghitung total pembayaran setelah diskon
$total_pembayaran = $total_pembelian - ($total_pembelian * $diskon);

// Menampilkan hasil dalam bentuk tabel
echo "<table border='1'>";
echo "<tr><th>Produk</th><th>Harga</th></tr>";

foreach ($produk as $nama_produk => $harga) {
    echo "<tr><td>$nama_produk</td><td>" . number_format($harga, 0, ',', '.') . " IDR</td></tr>";
}

echo "<tr><th>Total</th><td>" . number_format($total_pembelian, 0, ',', '.') . " IDR</td></tr>";
echo "<tr><th>Diskon</th><td>" . ($diskon * 100) . "%</td></tr>";
echo "<tr><th>Total Pembayaran</th><td>" . number_format($total_pembayaran, 0, ',', '.') . " IDR</td></tr>";
echo "</table>";
?>
