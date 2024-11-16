<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Jurusan</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/all.css">
</head>

<body>

    <?php
    include_once('../navbar.php');
    ?>


    <div class="container">
        <div class="row mt-5">
            <div class="col-8 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="float-start">Data Jurusan</h3>
                        <p class="float-end"><a class="btn btn-primary" href="form.php"><i class="fa-solid fa-square-plus"></i> Tambah Data</a></p>
                    </div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode</th>
                                    <th scope="col">Nama Jurusan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    #1. Koneksikan file ini
                                    include("../koneksi.php");

                                    #2. menulis query
                                    $tampil = "SELECT * FROM jurusans";

                                    #3. jalankan query
                                    $proses = mysqli_query($koneksi, $tampil);

                                    #4. looping data dari database
                                    $nomor = 1;
                                    foreach($proses as $data){
                                ?>
                                <tr>
                                    <th scope="row"><?=$nomor++?></th>
                                    <td><?=$data['kode']?></td>
                                    <td><?=$data['jurusan']?></td>
                                    <td>Otto</td>
                                    <td>
                                        <a class="btn btn-success btn-sm" href=""><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a class="btn btn-danger btn-sm" href=""><i class="fa-solid fa-trash-can"></i></a>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/all.js"></script>
</body>

</html>