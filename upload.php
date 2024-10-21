<?php
// soal no 2
//if(isset($_POST["submit"])){
    //$targetdir = "uploads/";
    //$targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    
    //if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)){
        //echo "File berhasil diunggah";
    //}else{
        //echo "Gagal mengunggah file";
    //}
//}
if(isset($_POST["submit"])){
    $targetdir = "uploads/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    //$allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $allowedExtensions = array("txt", "pdf", "doc", "dock");
    $maxsize = 5*1024*1024;
    
    if(in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"]<=$maxsize){
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)){
            echo "File berhasil diunggah";
        }else{
            echo "Gagal mengunggah file";
        }
    }else{
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
    //if (!empty($targetfile)){
        //echo '<h3>thumbnail:</h3>';
        //echo "<img src='" . $targetfile . " ' width='200'/>";
    //}
        ?>