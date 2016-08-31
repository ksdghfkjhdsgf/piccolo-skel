<?php

use AcmeCorp\App\Module\WebApplication;
use Piccolo\DependencyInjection\Auryn\AurynDependencyInjectionContainer;

require_once (__DIR__ . '/../vendor/autoload.php');

$dic         = new AurynDependencyInjectionContainer();
$config      = require(__DIR__ . '/../config/config.php');

$application = new WebApplication($dic, $config);
$application->execute();
