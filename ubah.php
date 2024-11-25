<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
        .form-group label {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Update Data User</h2>
    <a href="tampil.php" class="btn btn-secondary mb-3">KEMBALI</a>
    
    <h3>Data User</h3>
    
    <?php
    include 'Koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from user where ID='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update2.php">
            <div class="form-group">
                <label for="Nama">Nama</label>
                <input type="hidden" name="iduser" value="<?php echo $d['Nama']; ?>">
                <input type="text" class="form-control" name="Nama" value="<?php echo $d['Nama']; ?>" required>
            </div>
            <div class="form-group">
                <label for="Username">Username</label>
                <input type="hidden" name="ID" value="<?php echo $d['ID']; ?>">
                <input type="text" class="form-control" name="Username" value="<?php echo $d['Username']; ?>" required>
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" name="Password" value="<?php echo $d['Password']; ?>" required>
            </div>
            <div class="form-group">
                <label for="Level">Level</label>
                <input type="text" class="form-control" name="Level" value="<?php echo $d['Level']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
        <?php 
    }
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>