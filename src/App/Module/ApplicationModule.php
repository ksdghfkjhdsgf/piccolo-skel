<?php


namespace AcmeCorp\App\Module;

use Piccolo\Module\AbstractModule;
use Piccolo\Web\Processor\Controller\View\Templating\TemplatingViewModule;

class ApplicationModule extends AbstractModule {
	public function getRequiredModules() : array {
		return [
			TemplatingViewModule::class,
		];
	}

	public function loadConfiguration(array &$moduleConfig, array &$globalConfig) {
		TemplatingViewModule::addTemplateRoot($globalConfig, __DIR__ . '/../Web/Views', 'AcmeCorp\\App\\Web\\');
	}
}
