<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Struk</title>
</head>

<body>
    <div class="container text-center">
        <h1>Bukti Pembayaran</h1>
        <p class="text-start">No Pembayaran <?php echo uniqid() ?>
        </p>
        <p class="text-start"> <?php
        echo date("l j F Y h:i:s A") ?>
        </p>
        <h6 class="text-start">Daftar Barang</h6>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_SESSION['dataBarang']) && is_array($_SESSION['dataBarang']) && !empty($_SESSION['dataBarang'])) {
                    $no = 1;

                    foreach ($_SESSION['dataBarang'] as $key => $value) {
                        $total = $value['harga'] * $value['jumlah'];
                        $formattedTotal = "Rp " . number_format($total, 2, ',', '.');
                        $harga = $value['harga'];
                        echo "<tr class='text-center'>";
                        echo "<td>$no</td>";
                        echo "<td>" . ucfirst($value['nama']) . "</td>";
                        echo "<td>" . $value['jumlah'] . "</td>";
                        echo "<td>" . $harga . "</td>";
                        echo "<td>" . $formattedTotal . "</td>";
                        $no++;
                    }
                }
                ?>
            </tbody>
        </table>
        <?php
        echo "<p>Kamu Membayar : Rp. " . number_format($_SESSION['uang'], 0, ',', '.') . "</p>";
        ?>

        <?php
        if ($_SESSION['uang'] > $_SESSION['totalHarga']) {
            $kembalian = $_SESSION['uang'] - $_SESSION['totalHarga'];
            echo 'Kamu Punya Kembalian Sebesar : Rp. ' . number_format($kembalian, 0, ',', '.') . '<br>';
        }
        ?>

        <div class="mt-2">
            <a href="index.php" class="btn btn-danger d-print-none">kembali</a>
            <button onclick="window.print()" class="btn btn-success ms-2 d-print-none">Cetak Struk</button>
        </div>
    </div>
</body>

</html>