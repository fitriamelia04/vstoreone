<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<h1>TAMBAH PRODUK</h1>
    <form action="prosestambah.php" method="post" enctype="multipart/form-data">
    <div class="admin">
        Nama 
        <input type="text" name="namaproduk">
    </div>
    <div class="har"><br>
        Harga 
        <input type="text" name="harga">
    </div>
    <div class="des"><br>
        <label for="deskripsi">Deskripsi1</label>
        <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
    </div>
    <div class="fot"><br>
        Foto 
        <input type="file" name="foto" 
    </div>
    </div>
    <div class="inp"><br>
        <input type="submit" value="Simpan">
    </div>
    </form>
    </center>
</body>
</html>