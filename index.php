<?php require_once './vendor/autoload.php' ?>
<?php require_once './includes/functions.php'?>

<?php
use App\Controllers\AuthController;

echo AuthController::test();

debug($_GET)


?>