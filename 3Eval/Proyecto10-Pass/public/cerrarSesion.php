<?php

require __DIR__.'/../vendor/autoload.php';
use Daw\models\Sesion;

Sesion::start();

Sesion::destroy();

header("Location: Index.php");
?>
