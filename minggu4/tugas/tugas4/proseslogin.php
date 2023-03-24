18 lines (18 sloc) 540 Bytes

<?php
session_start();
$username = 'admin@gmail.com';
$password = 'admin';
if (isset($_POST['submit'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        //Membuat Session
        $_SESSION["username"] = $username;
        echo "Anda Berhasil Login $username";
        /*Jika Ingin Pindah Ke Halaman Lain*/
        header("Location: adminlte.php"); //Pindahkan Kehalaman Admin
    } else {
        // Tampilkan Pesan Error
        echo '<p>Username atau password anda INVALID. Try again</p>';
    }
} else {
    echo 'gagal';
}
