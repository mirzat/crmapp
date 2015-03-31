<?php

return [
		'id' => 'crmapp',
		'basePath' => realpath(__DIR__ . '/../'),
		'components' => [
			'request' => [
				//'cookieValidationKey' 	=> '8cMvsnTdsH66WoKj3uzKH0bernXP0uS1',
				'enableCookieValidation'=> false
			],
			'urlManager' => [
					'enablePrettyUrl' => true,
					'showScriptName' => false
			],
			'db' => require(__DIR__ . '/db.php')
				
		],
];
