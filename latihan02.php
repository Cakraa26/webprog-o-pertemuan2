<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= 'Index' ?></title>
</head>

<body>
    <?php
    echo '<h3>Belajar PHP</h3>';
    echo '<ul>';
    echo '<li>Membuat script sederhana</li>';
    echo '<li>Menyisihkan script PHP pada dokumen HTML</li>';
    echo '<li>Menyisipkan external scrip PHP pada dokumen HTML</li>';
    echo '</ul>';

    include("latihan01.php");
    ?>
</body>

</html>