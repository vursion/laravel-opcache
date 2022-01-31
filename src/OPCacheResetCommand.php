<?php

namespace Vursion\LaravelOPCache;

use GuzzleHttp\Client;
use Illuminate\Console\Command;

class OPCacheResetCommand extends Command
{
	protected $signature = 'opcache:reset';

	protected $description = 'Reset OPCache';

	public function handle()
	{
		$route = (version_compare(app()->version(), '5.6.12') >= 0) ? \Illuminate\Support\Facades\URL::signedRoute('opcache-reset') : route('opcache-reset');

		$guzzle = new Client([
			'http_errors' => false,
			'verify'      => false,
		]);

		$response = $guzzle->get($route);

		if ($response->getStatusCode() === 200) {
			return json_decode($response->getBody()->getContents());
		}
	}
}
