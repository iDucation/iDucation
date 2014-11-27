<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$theme='iducational';
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'IDucation',
	'defaultController' => 'Login',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'12345',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
<<<<<<< HEAD
		'admin'=>array('layoutPath' => "themes/$theme/views/layouts"),
		'sosmed'=>array('layoutPath' => "themes/$theme/views/layouts"),
=======
		'admin'=>array(
			'layoutPath' => "themes/$theme/views/layouts",
			'defaultController' => 'login'
		),
		'sosmed'=>array('layoutPath' => "themes/$theme/views/layouts"),
		'forum'=>array('layoutPath' => "themes/$theme/views/layouts"),
>>>>>>> f4ff53e7f321466026cd3192fd0bc83b95c371d7
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
<<<<<<< HEAD
                    'urlSuffix'=>'.html',
=======
                    'urlSuffix'=>'.3gp',
>>>>>>> f4ff53e7f321466026cd3192fd0bc83b95c371d7
                    'urlFormat'=>'path',
                    'showScriptName'=>false,
                    'rules'=>array(
                            '<controller:\w+>/<id:\d+>'=>'<controller>/view',
                            '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                            '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
                    ),
<<<<<<< HEAD
                ),
=======
        ),
        'session' => array (
		    'autoStart' => true,
		),
>>>>>>> f4ff53e7f321466026cd3192fd0bc83b95c371d7

		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=iducation',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
<<<<<<< HEAD
=======
		'authManager'=>array(
            'class'=>'CDbAuthManager',
            'connectionID'=>'db',
            'itemTable'=>'authitem',        
            'assignmentTable'=>'authassignment',
            'itemChildTable'=>'authitemchild'
        ),
>>>>>>> f4ff53e7f321466026cd3192fd0bc83b95c371d7
	),
	// load theme
	'theme'=>$theme,

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'aziz.dhaifullah@gmail.com',
	),
);