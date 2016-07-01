<?php

use AcmeCorp\App\Web\ErrorController;

use Piccolo\HTTP\Guzzle\GuzzleHTTPModule;
use Piccolo\Routing\FastRoute\FastRouteModule;

return [
	/**
	 * Piccolo modules to load. These modules will consume the configuration below.
	 */
	'modules' => [
		GuzzleHTTPModule::class,
		FastRouteModule::class,
	],
	/**
	 * Routing information via FastRoute. (This can be easily replaced.)
	 *
	 * @see https://github.com/nikic/FastRoute
	 */
	'fastroute' => [
		'errorHandlers' => [
			404 => [ErrorController::class, 'notFound'],
			405 => [ErrorController::class, 'methodNotAllowed'],
			500 => [ErrorController::class, 'error'],
		],
		'routes' => [
		],
	],
];
