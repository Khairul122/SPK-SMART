<?php
include "header.php";
$page = isset($_GET['page']) ? $_GET['page'] : "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Nama Pimpinan</title>
</head>
<body>
    <!-- Form untuk input nama pimpinan -->
    <form method="post" action="proses_pimpinan.php">
        <label for="pimpinan">Nama Pimpinan:</label>
        <input type="text" id="pimpinan" name="pimpinan" required>
        <button type="submit">Submit</button>
    </form>

    <?php
    // Jika form telah disubmit, tangkap nama pimpinan dari POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $pimpinan = isset($_POST['pimpinan']) ? $_POST['pimpinan'] : '';

        // Tampilkan nama pimpinan yang telah diinput
        if (!empty($pimpinan)) {
            echo "<p>Nama pimpinan yang diinput: " . htmlspecialchars($pimpinan) . "</p>";
        }
    }
    ?>
</body>
</html>
