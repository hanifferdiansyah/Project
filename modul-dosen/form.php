<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosens</title>
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
                        <h3 class="float-start"> Form Data Dosens</h3>
                    </div>
                    <div class="card-body">
                        <form action="proses.php" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NIDN</label>
                                <input type="text" name="nidn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nama Dosen</label>
                                <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                                <select name="jabatan" id="" class="form-select">
                                    <option value="">-Pilih Jabatan-</option>
                                    <option value="Full Time">Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                </select>
                            </div>
                                <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">No Handphone</label>
                                <input type="text" name="no_hp" class="form-control" id="exampleInputPassword1">
                            </div>

                            <button type="submit" class="btn btn-primary" href="index.php">Submit</button>
                        </form>

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