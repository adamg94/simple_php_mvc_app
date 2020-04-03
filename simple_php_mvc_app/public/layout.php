<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $Title ?></title>
    <link rel="stylesheet" href="<?= $BaseUrl ?>/css/style.css" />
</head>
<body>
    <?php require_once "../app/views/$View.php" ?>
    <p id="el"></p>
    <script src="<?= $BaseUrl ?>/js/main.js"></script>
</body>
</html>