<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
        <title>
            
        </title>
    </head>
    <body>
        <div class="container">
            <div class="row vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-7 col-lg-5">
                <div class="card shadow-lg">
                <div class="card-body">

        <h3 class="mb-5 mt-3 text-center text-primary">NEW ACCOUNT</h3>
        <form action="proses_tambah.php" method="post">
            Name :
            <input type="text" name="nama" value="" class="form-control">
            E-mail : 
            <input type="text" name="email" value="" class="form-control">
            Password : 
            <input type="password" name="password" value="" class="form-control">
            
            <div class="d-grid gap-2">
            <input type="submit" name="simpan" value="Create Account" class="btn btn-primary">
            </form>

                    </div>
                </div>
            </div>
        </div>
            
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>