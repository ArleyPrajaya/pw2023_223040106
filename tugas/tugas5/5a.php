<?php
    $mahasiswa = [
        [
            "nama"      => "Arley Prajaya Gunawan",
            "nrp"       => 223040106,
            "email"     => "arley.223040106@mail.unpas.ac.id",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar1.png"
        ],
        [
            "nama"      => "Rivaldy Novyan Dwi Putra",
            "nrp"       => 223040110,
            "email"     => "Rivaldy.223040110@mail.unpas.ac.id",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar2.png"
        ],
        [
            "nama"      => "Moch Zuhdi Maulana Nabilah",
            "nrp"       => 223040101,
            "email"     => "Zuhdi.223040101@mail.unpas.ac.id",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar3.png"
        ],
        [
            "nama"      => "Muhammad Marsa Nurjaman",
            "nrp"       => 223040083,
            "email"     => "Marsa.223040083@mail.unpas.ac.id",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar4.png"
        ],
        [
            "nama"      => "Muhammad Daffa Riyadi",
            "nrp"       => 223040053,
            "email"     => "Daffa.223040120@mail.unpas.ac.id",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar5.png"
        ],
        [
            "nama"      => "Muhammad Daffa Mussyaffa",
            "nrp"       => 223040048,
            "email"     => "Daffa.223040048@mail.unpas.ac.id",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar6.png"
        ],
        [
            "nama"      => "Kaka Praditha Putra",
            "nrp"       => 223040087,
            "email"     => "Kaka.223040087@mail.unpas.ac.id",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar7.png"
        ],
        [
            "nama"      => "Muhammad Alfath Septian",
            "nrp"       => 223040014,
            "email"     => "Alfath.223040014@mail.unpas.ac.id",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar8.png"
        ],
        [
            "nama"      => "Dzikri Setiawan",
            "nrp"       => 223040072,
            "email"     => "Dzikri.223040072@mail.unpas.ac.id",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar9.png"
        ],
        [
            "nama"      => "Lisvindanu",
            "nrp"       => 223040038,
            "email"     => "lisvindanu.223040038@gmail.com",
            "jurusan"   => "Teknik Informatika",
            "gambar"    => "img/avatar10.png"
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center p-2">Daftar Mahasiswa</h1>
    <section>
        
        <div class="row p-3">
        <?php foreach($mahasiswa as $mhs): ?>
            <div class="col-lg-2">
                <div class="card mb-2">
                <div class="card-body align-self-center">
                    <img src="<?= $mhs['gambar']; ?>" alt="avatar <?= $mhs['nama']; ?>"
                    class="rounded-circle img-fluid" style="width: 150px;">
                </div>
                </div>  
            </div>

            <div class="col-lg-4 mb-4">
                <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Nama</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['nama']; ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">NRP</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['nrp']; ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['email']; ?></p>
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <p class="mb-0">Jurusan</p>
                    </div>
                    <div class="col-sm-9">
                        <p class="text-muted mb-0"><?= $mhs['jurusan']; ?></p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
    </section>
</body>
</html>