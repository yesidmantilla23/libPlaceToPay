<?php
	$config = [
	    'login' => '6dd490faf9cb87a9862245da41170ff2',
	    'tranKey' => '024h1IlD',
	    'pse.wsdl' => 'https://test.placetopay.com/soap/pse/?wsdl',    
	    'test' => true,
	    'adittional' => ''
	];
	if (file_exists(__DIR__.'/main-local.php')) {
	    $config = array_merge($config, (array) require __DIR__.'/main-local.php');
	}
	return $config;
?>
