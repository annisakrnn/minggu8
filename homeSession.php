<html>
    <head>
        <title>Halaman Home</title>
</head>
<body>
    <?php
    session_start();
    if ($_SESSION['Status']== 'login'){
        echo "Selamat Datang " . $_SESSION['Username'];
    ?>
        <br><a href="sessionLogout.php">Logout</a>
    <?php
    }else{
        echo "Anda belum lgin, silahkan";
    ?>
        <a href="sessionLoginForm.html"><Login></a>
    <?php
    }
    ?>
</body>
    </html>