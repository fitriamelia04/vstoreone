<?php 
 include("koneksi.php");
 if(!isset($_GET['id'])){
    header("location: index.php");
 }
 $id =$_GET['id'];
 $query= mysqli_query($koneksi, "select * from produk where id=$id");
 $data =mysqli_fetch_array($query);
 $dataproduk=mysqli_num_rows($query);
 if($dataproduk == 0){
    echo "<h1>Data Produk Tidak Ditemukan</h1>";
    die();
 }
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
            background-size: cover;
            background-repeat: no-repeat;
        
        }
        img{
            width: 40%;
        }
        h1{
            color: white;
        }
        h2{
            color: white;
        }
        p{
            color: white;
        }
    </style>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <img src="foto/<?= $data['foto']?>" alt="">
    <h1><?=$data['nama']?></h1>
    <h2>Rp.<?=$data['harga']?></h2>
    <p><?=$data['deskripsi']?></p>
    
    <form action="proses_keranjang.php" method="post">
     <input type="hidden" name="product_id" value="<?$id?>">
    <button type="submit" class="btn btn-light">KERANJANG</button>
    </form>

</body>
</html>