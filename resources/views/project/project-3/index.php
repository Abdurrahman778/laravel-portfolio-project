<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rental | Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12 col-sm-8 col-md-6 m-auto">
                <div class="card">
                    <form action="" method="post" class="align-items-center">
                        <div class="card bg-dark text-white text-start">
                            <h3 class="pt-3 text-center">Rental Motor</h3>
                            <hr>
                            <div class="card-body">
                                <div class="">
                                    <label for="member">Nama : </label>
                                    <input type="text" name="member" id="member" class="form-control my-3 py-1"
                                        placeholder="Masukan Nama Anda" required>
                                </div>
                                <div>
                                    <label for="lamaRental">Lama Sewa : </label>
                                    <input type="number" name="lamaRental" id="lamaRental"
                                        class="form-control my-3 py-1" placeholder="Masukan Jumlah Hari Sewa" required>
                                </div>
                                <div>
                                    <label for="jenis">Jenis Motor :</label>
                                    <select name="jenis" class="form-select mb-3" aria-label="Default select example"
                                        placeholder="Masukan Jenis Motor" required>
                                        <option value="scooter">Scooter</option>
                                        <option value="sport">Sport</option>
                                        <option value="SportTouring">Sport Touring</option>
                                        <option value="Cross">Cross</option>
                                    </select>
                                </div>
                                <div class="d-grid gap-2">
                                    <button type="submit" name="submit" class="btn btn-secondary">Submit</button>
                                </div>
                                <hr>
                                <div class="bg-light text-dark p-3 rounded">
                                    <?php
                                    require 'logic.php';

                                    $proses = new rental();
                                    $proses->setHarga(70000, 90000, 90000, 100000);
                                    if (isset($_POST['submit'])) {
                                        $proses->member = $_POST['member'];
                                        $proses->jenis = $_POST['jenis'];
                                        $proses->waktu = $_POST['lamaRental'];

                                        $proses->pembayaran();
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>