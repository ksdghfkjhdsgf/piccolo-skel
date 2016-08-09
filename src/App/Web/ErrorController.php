<?php


namespace AcmeCorp\App\Web;


class ErrorController {
	public function error(\Exception $exception) {
		return [
			'exception' => $exception
		];
	}

	public function notFound() {
		return [];
	}

	public function methodNotAllowed($allowedMethods) {
		return ['allowedMethods' => $allowedMethods];
	}
}