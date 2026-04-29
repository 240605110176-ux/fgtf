<?php
// Tentukan folder tujuan penyimpanan
$target_path = "uploads/";

// Gabungkan folder tujuan dengan nama asli file yang diunggah
$target_path = $target_path . basename($_FILES['uploadedfile']['name']);

// Proses memindahkan file dari folder sementara ke folder tujuan
if (move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file " . basename($_FILES['uploadedfile']['name']) . " has been uploaded";
} else {
    echo "There was an error uploading the file, please try again!";
}
?>