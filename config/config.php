<?php

use AcmeCorp\App\Module\ApplicationModule;
use AcmeCorp\App\Web\ErrorController;

use Piccolo\Web\HTTP\Guzzle\GuzzleHTTPModule;
use Piccolo\Templating\Engine\Twig\TwigTemplatingModule;
use Piccolo\Templating\TemplatingModule;
use Piccolo\Web\IO\Standard\StandardWebIOModule;
use Piccolo\Web\Processor\Controller\ControllerProcessorWebModule;
use Piccolo\Web\Processor\Controller\View\Templating\TemplateViewProcessor;
use Piccolo\Web\Processor\Controller\View\Templating\TemplatingViewModule;
use Piccolo\Web\Routing\FastRoute\FastRouteModule;
use Piccolo\Web\WebModule;

return [
	/**
	 * Piccolo modules to load. These modules will consume the configuration below.
	 */
	'modules' => [
		WebModule::class,
		GuzzleHTTPModule::class,
		ControllerProcessorWebModule::class,
		StandardWebIOModule::class,
		FastRouteModule::class,
		TemplatingViewModule::class,
		TwigTemplatingModule::class,
		ApplicationModule::class,
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
