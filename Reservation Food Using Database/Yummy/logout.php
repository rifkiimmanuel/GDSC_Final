<?php
session_start();

// Hapus semua data session
session_unset();
session_destroy();

// Tampilkan pesan konfirmasi logout
echo "<script>alert('Yakin mau log out maniez?'); window.location = 'login.php';</script>";
?>
