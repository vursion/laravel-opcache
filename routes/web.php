<?php

Route::get('opcache/reset', function () {
	if (function_exists('opcache_reset')) {
		return response()->json(opcache_reset());
	}
})->name('opcache-reset')->middleware((version_compare(app()->version(), '5.6.12') >= 0) ? 'signed' : null);
