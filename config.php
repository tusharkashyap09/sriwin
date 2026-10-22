<?php

function sriwin_required_env($name)
{
	$value = getenv($name);
	if ($value === false || $value === '') {
		throw new RuntimeException("Required environment variable {$name} is not set.");
	}

	return $value;
}

define('DB_SERVER', getenv('SRIWIN_DB_HOST') ?: 'localhost');
define('DB_USERNAME', sriwin_required_env('SRIWIN_DB_USERNAME'));
define('DB_PASSWORD', sriwin_required_env('SRIWIN_DB_PASSWORD'));
define('DB_NAME', sriwin_required_env('SRIWIN_DB_NAME'));
