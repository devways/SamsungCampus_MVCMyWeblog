<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
 
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	Router::connect('/homes', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/logout', array('controller' => 'users', 'action' => 'logout'));
	Router::connect('/inscription', array('controller' => 'users', 'action' => 'subscribe'));
	Router::connect('/contact', array('controller' => 'users', 'action' => 'contact'));

	Router::connect('/billet', array('controller' => 'billets', 'action' => 'read'));
	Router::connect('/billet/:id', array('controller' => 'billets', 'action' => 'readAndComment'), array('id' => '[0-9]+'));
	Router::connect('/billet/:id/search/:keywords', array('controller' => 'billets', 'action' => 'readAndComment'), array('id' => '[0-9]+', 'keywords' => '[0-9a-zA-Z]+'));
	Router::connect('/billet/page/:page', array('controller' => 'billets', 'action' => 'read'), array('page' => '[0-9]+'));
	Router::connect('/billet/new', array('controller' => 'billets', 'action' => 'news'));
	Router::connect('/billet/:id/edit', array('controller' => 'billets', 'action' => 'edit'), array('id' => '[0-9]+'));
	Router::connect('/billet/:id/delete', array('controller' => 'billets', 'action' => 'delete'), array('id' => '[0-9]+'));
	
	Router::connect('/admin', array('controller' => 'admins', 'action' => 'index'));
	Router::connect('/admin/users', array('controller' => 'admins', 'action' => 'users'));
	Router::connect('/admin/billets', array('controller' => 'admins', 'action' => 'billets'));
	Router::connect('/admin/comments', array('controller' => 'admins', 'action' => 'comments'));
	Router::connect('/admin/status/:id', array('controller' => 'admins', 'action' => 'status'), array('id' => '[0-9]+'));

	Router::connect('/search', array('controller' => 'searches', 'action' => 'index'));
	Router::connect('/search/:keywords', array('controller' => 'searches', 'action' => 'keywords'), array('keywords' => '[0-9a-zA-Z]+'));
/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
