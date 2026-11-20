<?php
include "koneksi.php";

$page = $_GET['page'] ?? 'dashboard';

$allowedPages = [
    'dashboard',
    'karyawan',
    'monitoring',
    'riwayat',
    'laporan',
    'evaluasi'
];

if (!in_array($page, $allowedPages, true)) {
    $page = 'dashboard';
}

$file = __DIR__ . "/pages/" . $page . ".php";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Monitoring Kerja NICESO</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="sidebar">

    <div class="logo">NICESO MONITOR</div>

    <div class="menu">
        <a href="index.php" class="<?= $page == 'dashboard' ? 'active' : '' ?>">Dashboard</a>

        <a href="index.php?page=karyawan" class="<?= $page == 'karyawan' ? 'active' : '' ?>">Data Karyawan</a>

        <a href="index.php?page=monitoring" class="<?= $page == 'monitoring' ? 'active' : '' ?>">Monitoring Kerja</a>

        <a href="index.php?page=riwayat" class="<?= $page == 'riwayat' ? 'active' : '' ?>">Riwayat Monitoring</a>

        <a href="index.php?page=laporan" class="<?= $page == 'laporan' ? 'active' : '' ?>">Laporan</a>

        <a href="index.php?page=evaluasi" class="<?= $page == 'evaluasi' ? 'active' : '' ?>">Evaluasi</a>
    </div>

</div>

<div class="main">

    <?php
    if (file_exists($file)) {
        include $file;
    } else {
        echo "<h2>Halaman sedang disiapkan.</h2>";
    }
    ?>

</div>

</body>
</html>