<?php
    $nama = "";
    if(isset($_POST['nama'])) {
        $nama = htmlspecialchars($_POST['nama']);
    }
    $email = "";
    if(isset($_POST['email'])) {
        $email = $_POST['email'];

        // validasi form email
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Format email tidak valid<br>";
            $email = "";
        }
    }
    echo "Nama: $nama<br>";
    echo "Email: $email<br>";
?>