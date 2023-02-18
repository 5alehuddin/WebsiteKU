<?php
session_start();
session_destroy();	

    echo "<script>alert('Anda Berhasil Keluar. Terima Kasih Sudah Berkunjung, Selamat Datang Kembali. Semoga Harimu Menyenangkan :)'); window.location = 'login.html'</script>";
?>