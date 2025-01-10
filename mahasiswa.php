<?php
session_start();

if (!isset($_SESSION['login'])) {
        if ($_SESSION['login'] != true) {
            header("Location: login.php");
            exit;
        }
    }

$mysqli = new mysqli('localhost', 'root', '', 'tedc');

$result = $mysqli->query("SELECT students.nim, students.nama, study_programs.name 
                         FROM students 
                         LEFT JOIN study_programs ON students.program_studi = study_programs.study_programs_id
                         WHERE study_programs.study_programs_id = 11 OR students.program_studi IS NULL;
                         ");

$mahasiswa = [];
while ($row = $result->fetch_assoc()) {
    array_push($mahasiswa, $row);
}
?>

<!DOCTYPE html>
<html>
<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <h2 class="mb-3 text-center">Daftar Mahasiswa Politeknik TEDC Bandung</h2>
        
         <?php if (isset($_SESSION['success']) && $_SESSION['success'] == true ) { ?>
       <div class="alert alert-success" role="alert">
            <?= $_SESSION['message'] ?>
       </div>
       <?php } ?>
        <div class="mb-3">
        <a href="tambah_mahasiswa.php" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
        <a href="logout.php" style="color: white;" class="btn btn-warning mb-3">Logout</a>
        </div>

        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Program Studi</th>
                    <th>Aksi</th> <!-- Kolom Aksi ditambahkan di sini -->
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; foreach ($mahasiswa as $value) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $value['nim']; ?></td>
                        <td><?= $value['nama']; ?></td>
                        <td><?= $value['name'] === null ? 'NULL' : $value['name']; ?></td>
                        <td>
                            <a href="edit_mahasiswa.php?nim=<?= $value['nim'] ?>" class="btn btn-success">Edit</a>
                            <a href="hapus_mahasiswa.php?nim=<?= $value['nim'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin akan Menghapus Data ini?')";>Hapus</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
unset($_SESSION['success']);
unset($_SESSION['message']);

?>