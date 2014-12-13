<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'MoraLit',
    'theme' => 'bootstrap',
// preloading 'log' component
    'preload' => array('log', 'bootstrap'),
// autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
        'application.extensions.CAdvancedArFindBehavior',
        'application.extensions.*',
    ),
    'modules' => array(
        'admin',
// uncomment the following to enable the Gii tool
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'aaa',
            'generatorPaths' => array(
                'bootstrap.gii',
            ),
// If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
    ),
// application components
    'components' => array(
        'bootstrap' => array(
            'class' => 'bootstrap.components.Bootstrap',
        ),
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin'=>true,
            'class' => 'admin.components.EWebUser', //adding web user class in the components
        ),
// uncomment the following to enable URLs in path-format
        /*
          'urlManager'=>array(
          'urlFormat'=>'path',
          'rules'=>array(
          '<controller:\w+>/<id:\d+>'=>'<controller>/view',
          '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
          '<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
          ),
          ),
         */
        'db' => array(
            'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
        ),
// uncomment the following to use a MySQL database
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=moralit',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        'errorHandler' => array(
// use 'site/error' action to display errors
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
// uncomment the following to show log messages on web pages
            /*
              array(
              'class'=>'CWebLogRoute',
              ),
             */
            ),
        ),
    ),
// application-level parameters that can be accessed
// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
                'payment'=>array(
                    'pgdomain' => 'www.paystage.com',
                    'pgInstanceId' => '91941126',
                    'merchantId' => '37048300',
                    'hashKey' => 'E6F15053277BEEC3',
                    'currencyCode' => '826',
                    'perform' => 'initiatePaymentCapture#sale',
                ),
	),
);
