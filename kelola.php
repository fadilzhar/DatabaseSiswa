<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- css boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> CRUD </title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            CRUD Beginner 
        </a>
        </div>
      </nav>    
<!-- isi -->
      <div class="container"> 
      <form action="process.php" method="post" enctype="multipart/form-data">
      <div class="mb-3 row mt-3">
        <label for="nisn" class="col-sm-2 col-form-label"> NISN </label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nisn" name="nisn" placeholder="Ex-5xx">
        </div>
      </div>
 </div>

<div class="container"> 
    <div class="mb-3 row mt-3">
      <label for="Nama-Siswa" class="col-sm-2 col-form-label"> Nama Siswa </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="Nama-Siswa" name= "nama_siswa" placeholder="Ex-ahmad5xx">
      </div>
    </div>
</div>

<div class="container"> 
    <div class="mb-3 row mt-3">
      <label for="formFile" class="col-sm-2 col-form-label"> Foto Siswa </label>
      <div class="col-sm-10">
        <input class="form-control" type="file" id="formFile" name="foto_siswa">
      </div>
    </div>
</div>

<div class="container"> 
    <div class="mb-3 row mt-3">
      <label for="Jenis-Kelamin" class="col-sm-2 col-form-label"> Jenis Kelamin </label>
      <div class="col-sm-10">
        <select class="form-select" id="Jenis-Kelamin" name="jenis_kelamin">
            <option selected> Jenis-Kelamin </option>
            <option value="1"> Laki Laki </option>
            <option value="2"> Perempuan </option>
          </select>
      </div>
    </div>
</div>
<div class="container"> 
    <div class="mb-3 row mt-3">
      <label for="Alamat" class="col-sm-2 col-form-label"> Alamat </label>
      <div class="col-sm-10">
        <textarea class="form-control" placeholder="Your Address" id="Alamat" name="alamat"> </textarea>
      </div>
    </div>

    <?php
    if (isset ($_GET['edit'])){
       ?>
    <button type="submit" value="edit" name="aksi" class="btn btn-primary"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
          </svg>
          Save</button>
       <?php
    }else{
      ?>
       <button type="submit" value="add" name="aksi" class="btn btn-primary"> 
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
          </svg>
          Add 
        </button>
    <?php }
    ?>
        </form>
</div>


      <!-- js boostrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>