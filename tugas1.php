<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Student Value Form</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="tugas1.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="nama" value="" class="form-control">
                </div>

                
            <div class="form-group">
                    <label for="">Nim</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="">Lesson</label>
                <select class="form-select form-control" class="form-control" name="lesson">
                    <option>Web Programming</option>
                    <option>Database</option>
                    <option>Statiska</option>
                    <option>PKN</option>
                    <option>UI/UX</option>
                </select>
                <div class="form-group">
                    <label for=""> UTS Value</label>
                    <input type="text" name="nilai_uts" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">UAS Value</label>
                    <input type="text" name="nilai_uas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Assignment Value</label>
                    <input type="text" name="nilai_tugas" value="" class="form-control">
                </div>
                <input type="submit" value="Save" name="proses" class="btn btn-primary btn-sm btn-block">

            </form>
            <?php
            $Nama=$_GET['nama'];
            $Nim=$_GET['nim'];
            $lesson=$_GET['lesson'];
            $nilai_uts=$_GET['nilai_uts'];
            $nilai_uas=$_GET['nilai_uas'];
            $nilai_tugas=$_GET['nilai_tugas'];
            $total=($nilai_uts*0.3)+($nilai_uas*0.4)+($nilai_tugas*0.2);

            if($total<40){
            $grade="E";
            }elseif($total<=59){
            $grade="D";
            }elseif($total<=69){
            $grade="C";
            }elseif($total<=84){
            $grade="B";
            }else{
            $grade="A";
            }
            $simpan=$_GET['proses'];
            ?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Name : <?php echo $Nama ?></li>
                    <li class="list-group-item">Nim :<?php echo $Nim ?> </li>
                    <li class="list-group-item">Lesson:<?php echo $lesson ?></li>
                    <li class="list-group-item"> UTS Value :<?php echo $nilai_uts ?> </li>
                    <li class="list-group-item">UAS Value:<?php echo  $nilai_uas ?></li>
                    <li class="list-group-item">Assignment Value : <?php echo $nilai_tugas ?> </li>
                    <li class="list-group-item">Value Total:<?php echo $total?></li>
                    <li class="list-group-item">Value in Alphabet:<?php echo $grade ?></li>
                </ul>
                </div>

            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 84-70</li>
                    <li class="list-group-item">C: 69-60</li>
                    <li class="list-group-item">D : 59-40 </li>
                    <li class="list-group-item">E : Less than 40 </li>
                                        
                </ul>
                </div>
        </div>
    </div>
</body>
</html>