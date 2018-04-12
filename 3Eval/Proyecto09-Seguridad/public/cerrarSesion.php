<?php

require __DIR__.'/../vendor/autoload.php';
use Daw\models\Db;
use Daw\models\Consulta;
use Daw\models\Sesion;

Sesion::destroy();

header("Location: Index.php");
?>
