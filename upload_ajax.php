<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $extensions = array("pdf", "jpeg", "png");
    $maxFileSize = 2097152; 
    $uploadDirectory = "documents/";
    if (!file_exists($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }
    $totalFiles = count($_FILES['files']['name']);
    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $fileSize = $_FILES['files']['size'][$i];
        $fileTmp = $_FILES['files']['tmp_name'][$i];
        $fileType = $_FILES['files']['type'][$i];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if (!in_array($fileExt, $extensions)) {
            $errors[] = "Ekstensi file yang diizinkan adalah PDF, JPEG, atau PNG untuk file $fileName.";
        }
        if ($fileSize > $maxFileSize) {
            $errors[] = "Ukuran file $fileName tidak boleh lebih dari 2 MB.";
        }
        if (empty($errors)) {
            if (move_uploaded_file($fileTmp, $uploadDirectory . $fileName)) {
                echo "File $fileName berhasil diunggah.<br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        }
    }
    if (!empty($errors)) {
        echo implode("<br>", $errors);
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
?>
