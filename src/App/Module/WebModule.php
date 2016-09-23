<?php

namespace AcmeCorp\App\Module;

use AcmeCorp\App\Web\ErrorController;
use Piccolo\DependencyInjection\DependencyInjectionContainer;
use Piccolo\Module\AbstractModule;
use Piccolo\Templating\Engine\Twig\TwigTemplatingModule;
use Piccolo\Templating\TemplatingModule;
use Piccolo\Web\HTTP\Guzzle\GuzzleHTTPModule;
use Piccolo\Web\IO\Standard\StandardWebIOModule;
use Piccolo\Web\Processor\Controller\ControllerProcessorWebModule;
use Piccolo\Web\Processor\Controller\View\Templating\TemplatingViewModule;
use Piccolo\Web\Routing\FastRoute\FastRouteModule;

class WebModule extends AbstractModule {
	public function getModulesBefore() : array {
		return [
			/**
			 * Use Guzzle for HTTP request and response constructions
			 */
			GuzzleHTTPModule::class,
			/**
			 * Standard PHP input and output mechanisms
			 */
			StandardWebIOModule::class,
			/**
			 * Use FastRoute for routing
			 */
			FastRouteModule::class,
			/**
			 * Use Twig as the templating engine
			 */
			TwigTemplatingModule::class,
			/**
			 * We want to use templating
			 */
			TemplatingModule::class,
			/**
			 * Use templating for the view
			 */
			TemplatingViewModule::class,
			/**
			 * Routing and controller handling
			 */
			ControllerProcessorWebModule::class,
		];
	}

	public function getModulesAfter() : array {
		return [
			ApplicationModule::class
		];
	}

	public function loadConfiguration(array &$moduleConfig, array &$globalConfig) {
		/**
		 * @var TemplatingViewModule $templatingViewModule
		 */
		$templatingViewModule = $this->getRequiredModule(TemplatingViewModule::class);
		$templatingViewModule->addTemplateRoot($globalConfig, __DIR__ . '/../Web/Views','AcmeCorp\\App\\Web\\','App');

		/**
		 * Routing information via FastRoute. (This can be easily replaced.)
		 *
		 * @see https://github.com/nikic/FastRoute
		 */
		$globalConfig['fastroute'] = [
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
		];
	}
}
