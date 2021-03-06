<?php

/**
 * Created by PhpStorm.
 * User: Тарас
 * Date: 23.02.2018
 * Time: 20:16
 */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/form-validation.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<?php

    require_once '_header.php';

?>
<main>
    <?= $content ?>
</main>
<?php

require_once '_footer.php';

?>
</body>
</html>
