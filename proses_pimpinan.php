<?php
session_start();

// Tangkap data dari form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pimpinan = isset($_POST['pimpinan']) ? $_POST['pimpinan'] : '';

    // Simpan nama pimpinan ke dalam sesi
    $_SESSION['pimpinan'] = $pimpinan;

    // Redirect kembali ke halaman form atau halaman laporan
    header("Location: laporan.php");
    exit();
}
?>
