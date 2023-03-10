<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kanal Elektronik TI10</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <form method="GET" action="proses_belanja.php">

        <div class="form-group row">
            <label for="customer" class="col-4 col-form-label">Customer </label>
            <div class="col-5">
                <input id="customer" name="customer" placeholder="Customer Name" type="text" required="required" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-4">Pilih Produk </label>
            <div class="col-5">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk0" type="radio" required="required" class="custom-control-input" value="TV">
                    <label for="produk0" class="custom-control-label">TV</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk1" type="radio" required="required" class="custom-control-input" value="Kulkas">
                    <label for="produk1" class="custom-control-label">Kulkas</label>
                </div>

                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk2" type="radio" required="required" class="custom-control-input" value="MesinCuci">
                    <label for="produk2" class="custom-control-label">Mesin Cuci</label>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <label for="amount" class="col-4 col-form-label">Amount</label>
            <div class="col-8">
                <input id="amount" name="amount" placeholder="Jumlah" type="text" required="required" class="form-control">
            </div>
        </div>

        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <ul class="list-group" style="float:right">
        <li class="list-group-item active">Daftar Harga</li>
        <li class="list-group-item">TV: 4.200.000</li>
        <li class="list-group-item">Kulkas: 3.100.000</li>
        <li class="list-group-item">Mesin Cuci: 3.800.000</li>
        <li class="list-group-item">Harga dapat berubah sewaktu-waktu!</li>
    </ul>
</body>

</html>