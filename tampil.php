<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="tampil.css"> 
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
        .table th, .table td {
            vertical-align: middle;
        }
        .btn {
            margin-right: 5px;
        }
    </style>
</head>
<body>

<div class="container">
<h2 style="text-align: center;">User Management</h2>
    
    <form method="POST" action="tambah.php" class="mb-3">
        <button type="submit" class="btn btn-outline-primary">Tambah</button>
    </form>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include 'Koneksi.php'; // Pastikan koneksi ke database berhasil
            $no = 1;
            $data = mysqli_query($koneksi,"SELECT * FROM user"); // Mengambil data dari tabel user
            while($d = mysqli_fetch_array($data)){
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['Nama']; ?></td>
                    <td><?php echo $d['Username']; ?></td>
                    <td><?php echo $d['Password']; ?></td>
                    <td><?php echo $d['Level']; ?></td>
                    <td>
                        <a role="button" class="btn btn-info" href="ubah.php?id=<?php echo $d['ID']; ?>">Edit</a>
                        <a role="button" class="btn btn-danger" href="hapus.php?id=<?php echo $d['ID']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php 
            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>