<?php
define('BASE_URI', str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']));

$app = new Core\Core();
$app->run();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>

<div>
    <pre>
        <?php
        //print_r($_REQUEST);
        //var_dump($_REQUEST);
        var_dump($_POST);
        var_dump($_GET);
        var_dump($_SERVER);
        ?>
    </pre>
</div>

</body>
</html>
