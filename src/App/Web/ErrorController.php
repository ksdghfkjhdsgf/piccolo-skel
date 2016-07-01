<?php


namespace AcmeCorp\App\Web;


class ErrorController {
	public function error() {
		return [];
	}

	public function notFound() {
		return [];
	}

	public function methodNotAllowed($allowedMethods) {
		return ['allowedMethods' => $allowedMethods];
	}
}