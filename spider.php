<?php
try {

    include __DIR__ . '/classes/Autoload.php';
    spl_autoload_register(['classes\Autoload', 'loadClass']);

    $worker = new \spider\Worker(2);

} catch (Exception $e) {
    echo $e->getMessage();
}