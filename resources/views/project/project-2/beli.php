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
    <title>Beli</title>
</head>
<body>
    <div class="container text-center">
        <h1>BAYAR SEKARANG</h1>
        <p class="text-start">masukan nominal uang</p>
        <form action="" method="post" class="">
            <input type="number" class="form-control" name="uang" placeholder="Silahkan Masukan Nominal Uang"
                required>
            <div class="fw-bold text-start mt-3">
                <?php
                $_SESSION['totalHarga'] = 0;
                if ($_SESSION['dataBarang'] && !empty($_SESSION['dataBarang'])) 
                {
                    foreach ($_SESSION['dataBarang'] as $key) 
                    {
                    $_SESSION['totalHarga'] += $key['total'];
                    }
                    echo "<p>Total yang harus dibayarkan adalah : Rp. " . number_format($_SESSION['totalHarga'], 0, ',', '.') . "</p>";
                }

                if (isset($_POST['beli'])) {
                    $_SESSION['uang'] = $_POST['uang'];
                    $_SESSION['kembalian'] = $_SESSION['uang'] - $_SESSION['totalHarga'];

                    if ($_SESSION['uang'] < $_SESSION['totalHarga']) 
                    {
                    $kurang = $_SESSION['totalHarga'] - $_SESSION['uang'];
                    echo "uang kamu kurang sebesar :" .  number_format($kurang, 0, ',', '.');
                    } else 
                    {
                    $_SESSION['uangBeli'] = $uangBeli;
                    header("location: struk.php");
                    }
                }
                ?>
            </div>
            <div class="mt-3">
                <a href="index.php" class="btn btn-warning">kembali</a>
                <button type="submit" name="beli" class="btn btn-success">Bayar</button>
            </div>
        </form>
    </div>
</body>
</html>