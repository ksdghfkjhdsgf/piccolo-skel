<?php

use AcmeCorp\App\Module\ApplicationModule;
use AcmeCorp\App\Web\ErrorController;

$localConfig = [];
if (\file_exists(__DIR__ . '/local.config.php')) {
	$localConfig = include(__DIR__ . '/local.config.php');
}

return \array_merge([
	'twig' => [
		'debug' => false
	],
], $localConfig);
