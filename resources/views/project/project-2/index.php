<?php
session_start();

if (!isset($_SESSION['dataBarang'])) {
    $_SESSION['dataBarang'] = array();
}

if (isset($_POST['tambah'])) {
    $total = $_POST['hargaBarang'] * $_POST['jumlahBarang'];

    $_SESSION["dataBarang"][] = array(
        "nama" => $_POST["namaBarang"],
        "harga" => $_POST["hargaBarang"],
        "jumlah" => $_POST["jumlahBarang"],
        "total" => $total
    );
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['hapus'])) {
    $daftar = $_POST['hapus'];
    unset($_SESSION['dataBarang'], $daftar);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container text-center">
        <h1>MASUKAN DATA BARANG</h1>
        <form action="" class="" method="post">
            <input type="text" placeholder="nama barang" name="namaBarang" required class="form-control ">
            <input type="number" placeholder="masukan jumlah barang" name="jumlahBarang" required
                class="form-control my-3">
            <input type="number" placeholder="harga barang" name="hargaBarang" required class="form-control" class="">

            <div class="mt-2">
                <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                <?php
                if (!empty($_SESSION['dataBarang'])) {
                    echo "<a href='beli.php' name='beli' class='btn btn-success'>Beli</a>";
                    echo '<a href="reset.php" class="btn btn-danger ms-1">Reset </a>';
                }
                ?>
            </div>

    </div>
    </form>
    <table class="table container">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah Barang</th>
                <th scope="col">Harga Barang</th>
                <th scope="col">Total</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (isset($_SESSION['dataBarang']) && is_array($_SESSION['dataBarang']) && !empty($_SESSION['dataBarang'])) {
                $no = 1;

                foreach ($_SESSION['dataBarang'] as $key => $value) {
                    $total = $value['harga'] * $value['jumlah'];
                    $formattedTotal = "Rp " . number_format($total, 0, ',', '.');
                    $harga = $value['harga'];
                    echo "<tr class='text-center'>";
                    echo "<td>$no</td>";
                    echo "<td>" . ucfirst($value['nama']) . "</td>";
                    echo "<td>" . $value['jumlah'] . "</td>";
                    echo "<td>" . number_format($harga, 0, ',', '.') . "</td>";
                    echo "<td>" . $formattedTotal . "</td>";
                    echo "<td>
                    <form method='post' class='d-inline-block'>
                        <input type='hidden' name='delete-index' value='$key'>
                        <button type='submit' class='btn btn-danger btn-sm' name='hapus'>Hapus</button>
                    </form>
                </td>";
                    $no++;
                }
            }
            ?>
        </tbody>
    </table>


    </div>
</body>

</html>