<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			'fixture'=>array(
				'class'=>'system.test.CDbFixtureManager',
			),
		       /*	'db'=>array(
				'connectionString' => 'mysql:host=127.0.0.1;dbname=trackstar_test_2',
				'emulatePrepare' => true,
				'username' => 'root',
				'password' => '',
				'charset' => 'utf8',
		     ),*/
			 // uncomment the following to use a MySQL database

                  'db'=>array(
                        'connectionString' => 'mysql:host=localhost;dbname=trackstar_test',
                        'emulatePrepare' => true,
                        'username' => 'trackstar',
                        'password' => 'trackstar',
                        'charset' => 'utf8',
                ),

		),
	)
);
