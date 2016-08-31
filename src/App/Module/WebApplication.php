<?php

namespace AcmeCorp\App\Module;

use Piccolo\DependencyInjection\DependencyInjectionContainer;

class WebApplication extends \Piccolo\Web\WebApplication {
	public function __construct(DependencyInjectionContainer $dic, array $config) {
		if (!isset($config['modules'])) {
			$config['modules'] = [];
		}
		$config['modules'][] = WebModule::class;
		parent::__construct($dic, $config);
	}
}