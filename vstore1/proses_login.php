<?php
include("koneksi.php");
 echo "<h1>LOGIN</h1>";
 $username = $_POST["username"];
 $password = $_POST["password"];

 $query = mysqli_query($koneksi,"select * from user where username= '$username'");
 
 $jumlah_data = mysqli_num_rows($query);

if($jumlah_data > 0){
    $data = mysqli_fetch_array($query);
    
    // if($data['password'] == $password){
    // echo"username dan password benar";
    if(password_verify($password, $data['password'])){
        session_start();
        $_SESSION["id"] = $data["id"];
        $_SESSION["username"] = $data["username"];
        $_SESSION["role"] = $data["role"];

        if(($data['role'] =="admin")){
            header("Location:admin/halamanadmin.php");
        }
        if($data['role'] =="customer"){
            header("Location: index.php");
        }
       
    }else{
        // echo "username atau password salah";
        header("Location: login.php?error=username atau password salah");
    }

}else{
//    echo "username salah atau tidak ada";
   header("Location: login.php?error=username atau password salah");
}
?>
