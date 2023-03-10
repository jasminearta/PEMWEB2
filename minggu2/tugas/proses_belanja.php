<?php
$tv = 4200000;
$kulkas = 3100000;
$mesin_cuci = 3800000;

if (isset($_GET['submit'])) {
    $customer = $_GET['customer'];
    $produk = $_GET['produk'];
    $amount = $_GET['amount'];
    if ($produk == "TV") {
        $total = $tv * $amount;
    } elseif ($produk == "Kulkas") {
        $total = $kulkas * $amount;
    } elseif ($produk == "MesinCuci") {
        $total = $mesin_cuci * $amount;
    }
}

echo "Customer Name: $customer <br>";
echo "Produk Pilihan: $produk <br>";
echo "Jumlah Beli: $amount <br>";
echo "Total Belanja: $total <br>";
