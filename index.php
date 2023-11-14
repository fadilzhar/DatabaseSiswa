<?php
include 'koneksi.php';
//-3 menjalankan query
$query="SELECT * FROM `tb_siswa`";
$sql=mysqli_query($conn,$query);
$no =0;

// var_dump($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <!-- css -->
    <style>
        img{
            width: 5rem;
        }
    </style>
    <!-- link bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                CRUD Beginner
            </a>
        </div>
    </nav>

    <div class="container">
        <figure>
            <blockquote class="blockquote">
                <h1 class="mt-3">DATA SISWA</h1>
                <p>menampilkan data yang disimpan di database</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CREATE READ UPDATE DELETE
            </figcaption>
        </figure>
        <a href="kelola.php" type="button" class="btn btn-primary mt-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>
            Add
        </a>
        <div class="table-responsive mt-3">
            <table class="table align-middle table-bordered table-hover">
                <thead>
                        <tr>
                            <th>ID</th>
                            <th>NISN</th>
                            <th>Nama Siswa</th>
                            <th>Foto Siswa</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                </thead>
                <tbody>
                            <?php
                            while($result=mysqli_fetch_assoc($sql)){
                            ?>
                        <tr>
                            <td><?php echo ++$no ?></td>
                            <td><?php echo $result ['nisn']?></td>
                            <td><?php echo $result ['nama_siswa']?></td>
                            <td><img src="img/<?php echo $result ['foto_siswa']?>" wdith="1000px" alt="foto_siswa"></td>
                            <td><?php echo $result ['jenis_kelamin']?></td>
                            <td><?php echo $result ['alamat']?></td>
                            <td>
                                <a href="kelola.php?edit=<?php echo $result ['id_siswa']?>" type="button" class="btn btn-success btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                    </svg>
                                </a>
                                <a href="proses.php?delete=<?php echo $result ['id_siswa']?>" type="button" class="btn btn-danger btn-sm" onclick='return confirm("Yakin ingin Menghapus?")'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                    </svg>
                                </a>
                            </td>
                            <?php
                            }
                            ?>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- script bs -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>