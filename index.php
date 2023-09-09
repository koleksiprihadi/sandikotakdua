<?php
$length = isset($_POST['panjang']) ? $_POST['panjang'] : 10;
if ($length == null) {
    $length =10;
}
function generateRandomString($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$soal = generateRandomString($length);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SandarScout | Sandi Kotak 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://tekpram.sandarscout.com/sandikotakdua/assets/css/style.css">
    <link rel="icon" href="https://sandarscout.com/wp-content/uploads/2021/03/sandarscout-16x16-1.png" type="image/png" sizes="16x16"/>
</head>
<body>
    <div class="container">
    <center>
        <H1>LATIHAN SOAL SANDI KOTAK 2</H1>
        <p>All rights reserved by Sandar Scout</p> <br>
        hallo teman-teman ini adalah tool untuk membuat soal sandi kotak 2 <br>
        jika form dibawah dikosongkan maka soal secara default 10 karakter
    </center>
    <form method="post">
        <div class="input-group mb-3">
            <input type="number" class="form-control" name="panjang" placeholder="Panjang Karakter" aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Ganti Soal</button>
          </div>
    </form>
    <div class="container" >
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Soal</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Kunci Jawaban</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <!-- Soal -->
                <center>
                    Silahkan Artikan Kata Berikut
                    <h3 style="overflow-x: auto; color: red;" class="kotakdua"><?php echo strtoupper($soal) ?></h3>
                </center>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <center>
                    Kunci Jawaban Untuk Soal <br>
                    <h3 style="overflow-x: auto;" class="kotakdua"><?php echo strtoupper($soal) ?></h3> <br>
                    adalah <br>
                    <h4 style="overflow-x: auto;"><?php echo strtoupper($soal) ?></h4>
                </center>
            </div>
            
          </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>