<?php

namespace AcmeCorp\App\Module;

use Piccolo\Application\AbstractApplication;
use Piccolo\DependencyInjection\DependencyInjectionContainer;

abstract class CLIApplication extends AbstractApplication {
	public function __construct(DependencyInjectionContainer $dic, array $config) {
		$config['modules'][] = CLIModule::class;
		parent::__construct($dic, $config);
	}
}