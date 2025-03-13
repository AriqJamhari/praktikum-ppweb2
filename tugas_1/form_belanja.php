<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        @media (max-width: 767px) {
            #container {
                display: flex;
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-5" id="container">
        <div class="col-12 col-md-4" style="float: right;" id="card-container">
            <div class="card">
                <div class="card-header bg-primary text-white">Daftar Harga</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-light">Laptop: Rp. 15.000.000</li>
                    <li class="list-group-item bg-light">Kipas Angin : Rp. 1.200.000</li>
                    <li class="list-group-item bg-light">AC 2PK : Rp. 4.700.000</li>
                </ul>
            </div>
            <div class="card-footer bg-primary text-white">Harga Dapat Berubah Setiap Saat</div>
        </div>

        <div class="col-8">
            <h3>Belanja Online</h3>
            <hr />
        </div>
        <div class="col-12 col-md-8 align-middle">
            <form method="POST" action="form_belanja.php">
                <div class="form-group row text-end mt-3">
                    <label for="nama" class="col-4 col-form-label font-weight-bold text-right">Customer</label>
                    <div class="col-6">
                        <input id="nama" name="customer" type="text" class="form-control" autocomplete="off" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="produk" class="col-4 text-end font-weight-bold text-right">Pilih Produk</label>
                    <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk1" type="radio" class="custom-control-input" value="Laptop" required>
                            <label for="produk1" class="custom-control-label">Laptop</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk2" type="radio" class="custom-control-input" value="Kipas Angin" required>
                            <label for="produk2" class="custom-control-label">Kipas Angin</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="produk" id="produk3" type="radio" class="custom-control-input" value="AC 2PK" required>
                            <label for="produk3" class="custom-control-label">AC 2PK</label>
                        </div>
                    </div>
                </div>

                <div class="form-group row text-end mt-3">
                    <label for="jumlah" class="col-4 col-form-label font-weight-bold text-right">Jumlah</label>
                    <div class="col-4">
                        <input id="jumlah" name="jumlah" type="number" class="form-control" required min="1">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="proses" type="submit" class="btn btn-success">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <hr />
    </div>

    <?php
    if(isset($_POST['proses'])){

        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];


    // MENGHITUNG TOTAL BELANJA MENGGUNAKAN IF ELSE ATAU SWITCH
        if ($produk == "Laptop") {
            $total_belanja = 15000000 * $jumlah;
        }elseif ($produk == "Kipas Angin") {
            $total_belanja = 1200000 * $jumlah;
        }elseif ($produk == "AC 2PK") {
            $total_belanja = 4700000 * $jumlah;
    }
    $total_belanja = Number_format($total_belanja, 0, ',', '.');

    // MENCETAK HASIL
        echo'Nama Customer : '.$customer;
        echo'<br>Produk Pilihan : '.$produk;
        echo'<br>Jumlah Beli : '.$jumlah;
        echo'<br>Total Belanja : Rp. '.$total_belanja;
    }
    ?>

    </div>
</body>

</html>