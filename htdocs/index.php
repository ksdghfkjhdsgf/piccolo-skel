<?php

use Piccolo\DependencyInjection\Auryn\AurynDependencyInjectionContainer;

require_once (__DIR__ . '/../vendor/autoload.php');

$dic         = new AurynDependencyInjectionContainer();
$config      = require(__DIR__ . '/../config/config.php');
$application = new \Piccolo\Application\Web\WebApplication($dic, $config);
$result      = $application->execute($_SERVER, $_GET, $_POST, $_COOKIE, $_FILES, 'php://input');

foreach ($result['headers'] as $header) {
	header($header);
}
echo($result['body']);
