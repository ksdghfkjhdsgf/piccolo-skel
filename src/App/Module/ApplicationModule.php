<?php


namespace AcmeCorp\App\Module;

use Piccolo\DependencyInjection\DependencyInjectionContainer;
use Piccolo\Module\AbstractModule;
use Piccolo\Templating\Engine\Twig\TwigTemplateEngine;
use Piccolo\Templating\Engine\Twig\TwigTemplatingModule;
use Piccolo\Templating\TemplatingModule;
use Piccolo\Web\HTTP\Guzzle\GuzzleHTTPModule;
use Piccolo\Web\IO\Standard\StandardWebIOModule;
use Piccolo\Web\Processor\Controller\ControllerProcessorWebModule;
use Piccolo\Web\Processor\Controller\View\Templating\TemplatingViewModule;
use Piccolo\Web\Routing\FastRoute\FastRouteModule;

class ApplicationModule extends AbstractModule {

}
