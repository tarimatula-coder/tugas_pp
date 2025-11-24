<?php
include '../../../config/connection.php';
include '../../../config/escapeString.php';

if (!isset($_GET['id'])) {
    echo "
    <script>    
        alert('Tidak bisa memilih ID ini');
        window.location.href='../../../index.php';
        </script>
    ";
}

$id = $_GET['id'];

$qSelect = "SELECT * FROM resumes WHERE id='$id'";
$result = mysqli_query($connect, $qSelect) or die(mysqli_error($connect));

$resume = $result->fetch_object();
if (!$resume) {
    die("Data tidak di temukan");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Detail Resume</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2><?= $resume->place ?></h2>
        <h5><?= $resume->date ?> - <?= $resume->job ?></h5>
        <p style="margin-top: 20px;">
            <?= $resume->description ?>
        </p>
        <a href="../../../index.php" class="btn btn-secondary mt-3">Kembali</a>
    </div>
</body>

</html>