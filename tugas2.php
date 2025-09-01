<?php

// nama variabel yang akan digunakan
$namapelanggan;
$judulbuku;
$jumlahbuku;
$hargasatuan;
$statusmember;
$totalawal;
$diskonmember;
$totalbayar;

// tentukan fungsi yang akan digunakan
    function hitungTotalHarga($jumlah, $hargaSatuan, $statusMember) {
        $total = $jumlah * $hargaSatuan;
        if ($statusMember) {
            $total *= 0.10; // diskon 10% untuk member
        }
        return $total;
    }
?>

<?php

// contoh script implementasinya

$namapelanggan = "Budi Santoso";
$judulbuku = "Dasar-Dasar Pemrograman Web";
$jumlahbuku = 2;
$hargasatuan = 85000;
$statusmember = true; // true jika member, false jika bukan member

// proses hitung totalnya
$totalawal = $jumlahbuku * $hargasatuan;
$diskonmember = $statusmember ? $totalawal * 0.10 : 0;
$totalbayar = $totalawal - $diskonmember;

// fungsi untuk cetak struk
echo "======= Struk Pembelian Buku =======" . PHP_EOL;
echo "Nama Pelanggan        : $namapelanggan" . PHP_EOL;
echo "Judul Buku            : $judulbuku" . PHP_EOL;
echo "Jumlah Buku           : $jumlahbuku buah" . PHP_EOL;
echo "Harga Satuan          : Rp " . number_format($hargasatuan, 0, ',', '.') . PHP_EOL;
echo "Status Member         : " . ($statusmember ? "Ya" : "Tidak") . PHP_EOL;
echo "------------------------------------" . PHP_EOL;
echo "Total Harga Awal      : Rp " . number_format($totalawal, 0, ',', '.') . PHP_EOL;
echo "Diskon Member         : Rp " . number_format($diskonmember, 0, ',', '.') . PHP_EOL;
echo "TOTAL BAYAR           : Rp " . number_format($totalbayar, 0, ',', '.') . PHP_EOL;
?>