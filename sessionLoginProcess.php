<?php
$Username = $_POST['Username'];
$Password = $_POST['Password'];
if($Username=="admin" && $Password=="1234"){
    session_start();
    $_SESSION["Username"] = $Username;
    $_SESSION["Status"] = 'login';
    echo "Anda berhasil login. Silahkan menuju <a href='homeSession.php'>Halaman Home</a>";
}else{
    echo "Gagal login. Silahkan login lagi <a href='sessionLoginForm.html'>Halaman Login</a>";
}
?>