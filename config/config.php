<?php

use AcmeCorp\App\Module\ApplicationModule;
use AcmeCorp\App\Web\ErrorController;

use Piccolo\Web\HTTP\Guzzle\GuzzleHTTPModule;
use Piccolo\Templating\Engine\Twig\TwigTemplatingModule;
use Piccolo\Web\IO\Standard\StandardWebIOModule;
use Piccolo\Web\Processor\Controller\ControllerProcessorWebModule;
use Piccolo\Web\Processor\Controller\View\Templating\TemplatingViewModule;
use Piccolo\Web\Routing\FastRoute\FastRouteModule;

return [
	/**
	 * Piccolo modules to load. These modules will consume the configuration below.
	 */
	'modules' => [
		/**
		 * Use Guzzle for HTTP request and response constructions
		 */
		GuzzleHTTPModule::class,
		/**
		 * Routing and controller handling
		 */
		ControllerProcessorWebModule::class,
		/**
		 * Standard PHP input and output mechanisms
		 */
		StandardWebIOModule::class,
		/**
		 * Use FastRoute for routing
		 */
		FastRouteModule::class,
		/**
		 * Use templating for the view
		 */
		TemplatingViewModule::class,
		/**
		 * Use Twig as the templating engine
		 */
		TwigTemplatingModule::class,
		/**
		 * Our application here
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
];
