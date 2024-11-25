<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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
        h3 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container">
<h3 style="text-align: center;">Tambah Data User</h3>
    
    <form method="POST" action="tampil.php" class="mb-3">
        <button type="submit" class="btn btn-outline-primary">Tampil</button>
    </form>
    
    <form method="post" action="inputuser.php">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input class="form-control form-control-lg" type="text" name="nama" id="nama" required>
        </div>
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input class="form-control form-control-lg" type="text" name="username" id="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input class="form-control form-control-lg" type="password" name="password" id="password" required>
        </div>
        <div class="mb-3">
            <label for="level" class="form-label">Level</label>
            <input class="form-control form-control-lg" type="text" name="level" id="level" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>