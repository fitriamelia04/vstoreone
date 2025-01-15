<?php
session_start();
include("koneksi.php");
$query = mysqli_query($koneksi, "select * from produk");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <style>
  body{
    background-image: url(foto/Download\ Color\,\ Cloud\,\ Smoke_\ Royalty-Free\ Stock\ Illustration\ Image.jpg);
  }
  

   .container {
   width: 100%;
   min-height: 200px;
}
 </style>
</head>

<body style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">V STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">Keranjang</a>
      
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="login.php">Login</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

  <div class="container d-flex gap-5 mt-5" style="flex-wrap: nowrap">
    <?php while ($data = mysqli_fetch_array($query)) : ?>
      <!-- <p></p> -->
      <div class="card" style="width: 18rem;">
        <img src="foto/<?php echo $data['foto'] ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $data['nama'] ?></h5>
          <h6 class="card-title">Rp.<?php echo $data['harga'] ?></h6>
          <p class="card-text"><?php echo $data['deskripsi']?></p>
          <a href="detail.php?id=<?=$data['id']?>" class="btn btn-secondary">Detail</a>
        </div>
      </div>
    <?php endwhile ?>
  </div>
</body>

</html>