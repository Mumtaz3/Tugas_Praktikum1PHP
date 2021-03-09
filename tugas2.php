
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas2.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for=""> Customer</label>
                    <input type="text" name="customer" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Item</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="nama_barang" id="inlineRadio1" value="tv">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nama_barang" id="inlineRadio2" value="kulkas">
                    <label class="form-check-label" for="inlineRadio2">Refrigator</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="nama_barang" id="inlineRadio3" value="mesincuci">
                    <label class="form-check-label" for="inlineRadio3">Washing Machine</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Total Item</label>
                    <input type="text" name="total_barang" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for=""></label>
                    <input type="date" name="tanggal_pengiriman" value="" class="form-control">
                </div>

                <label for="">Courier Type</label>
                <select class="form-select form-control" class="form-control" name="pilih_kurir">
                    <option>Choose Courier Type :</option>
                    <option>Tiki</option>
                    <option>Si Cepat</option>
                    <option>Pos</option>
                    <option>Grab</option>
                    <option>Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Shipping Address</label>
                    <textarea class="form-control" name="alamat_pengiriman" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Courier Cost</label>
                    <input type="text" name="biaya_kurir" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Assurance Cost</label>
                    <input type="text" name="biaya_asuransi" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-success btn-sm btn-block">

            </form>
            <?php
            $custumer=$_POST['customer'];
            $nama_barang=$_POST['nama_barang'];
            $total_barang=$_POST['total_barang'];
            $tanggal=$_POST['tanggal_pengiriman'];
            $pilih_kurir=$_POST['pilih_kurir'];
            $alamat=$_POST['alamat_pengiriman'];
            $biaya=$_POST['biaya_kurir'];
            if($nama_barang=="tv"){
                $harga=$total_barang*3000000;
            }elseif($nama_barang=="kulkas"){
                $harga=$total_barang*6000000;
            }elseif($nama_barang=="mesincuci"){
                $harga=$total_barang*4000000;
            }
            $asuransi=$_POST['biaya_asuransi'];
            $simpan=$_POST['simpan'];
            $total=$biaya+$asuransi+$harga;
            ?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Customer :<?php echo $custumer ?></li>
                    <li class="list-group-item">Item : <?php  echo $nama_barang?> </li>
                    <li class="list-group-item">Date Shipping :<?php echo $tanggal ?></li>
                    <li class="list-group-item">Courier Type : <?php echo $pilih_kurir ?></li>
                    <li class="list-group-item">Shipping Address :<?php echo $alamat ?></li>
                    <li class="list-group-item">Courier Cost :  <?php echo $biaya ?></li>
                    <li class="list-group-item">Assurance Cost : <?php echo $asuransi ?></li>
                    <li class="list-group-item">Total Cost :<?php echo $total ?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Cost List
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"  name="">TV : Rp.3000.000</li>
                    <li class="list-group-item"  name="">Refrigator : Rp.6000.000</li>
                    <li class="list-group-item"  name="">Washing Machine : Rp. 4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>
