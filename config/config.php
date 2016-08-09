<?php

use AcmeCorp\App\Module\ApplicationModule;
use AcmeCorp\App\Web\ErrorController;

$localConfig = [];
if (\file_exists(__DIR__ . '/local.config.php')) {
	$localConfig = include(__DIR__ . '/local.config.php');
}

return \array_merge([
	/**
	 * Piccolo modules to load. These modules will consume the configuration below.
	 */
	'modules' => [
		/**
		 * Our application here. This will load the other required modules.
		 */
		ApplicationModule::class,
	],
	/**
	 * Routing information via FastRoute. (This can be easily replaced.)
	 *
	 * @see https://github.com/nikic/FastRoute
	 */
	'fastroute' => [
		/**
		 * Error handlers. The fastroute module supports 404, 405 and 500 error handlers.
		 */
		'errorHandlers' => [
			404 => [ErrorController::class, 'notFound'],
			405 => [ErrorController::class, 'methodNotAllowed'],
			500 => [ErrorController::class, 'error'],
		],
		/**
		 * Routes. Examples:
		 * 
		 * ['GET',  '/{slug:[a-zA-Z\-]+}', BlogController::class, 'postAction'],
		 */
		'routes' => [
		],
	],
	'twig' => [
		'debug' => false
	],
], $localConfig);
