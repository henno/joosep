<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-01-12 03:47:20 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH/classes/Kohana/Cookie.php [ 152 ] in /var/www/joosep/system/classes/Kohana/Cookie.php:67
2013-01-12 03:47:20 --- DEBUG: #0 /var/www/joosep/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 /var/www/joosep/system/classes/Kohana/Request.php(155): Kohana_Cookie::get('session')
#2 /var/www/joosep/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /var/www/joosep/system/classes/Kohana/Cookie.php:67
2013-01-12 04:14:59 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/joosep/system/classes/Kohana/View.php:137
2013-01-12 04:14:59 --- DEBUG: #0 /var/www/joosep/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/joosep/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/joosep/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/joosep/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/joosep/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/joosep/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/joosep/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/joosep/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/joosep/system/classes/Kohana/View.php:137
2013-01-12 04:16:22 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/joosep/system/classes/Kohana/View.php:137
2013-01-12 04:16:22 --- DEBUG: #0 /var/www/joosep/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/joosep/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/joosep/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/joosep/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/joosep/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/joosep/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/joosep/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/joosep/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/joosep/system/classes/Kohana/View.php:137
2013-01-12 05:42:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Auth.php [ 20 ] in :
2013-01-12 05:42:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-01-12 05:48:44 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in /var/www/joosep/modules/auth/classes/Kohana/Auth/File.php:40
2013-01-12 05:48:44 --- DEBUG: #0 /var/www/joosep/modules/auth/classes/Kohana/Auth/File.php(40): Kohana_Auth->hash('fdas')
#1 /var/www/joosep/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_File->_login('asd', 'fdas', false)
#2 /var/www/joosep/application/classes/Controller/Auth.php(12): Kohana_Auth->login('asd', 'fdas')
#3 /var/www/joosep/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/joosep/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /var/www/joosep/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/joosep/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/joosep/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/joosep/modules/auth/classes/Kohana/Auth/File.php:40
2013-01-12 06:13:35 --- EMERGENCY: View_Exception [ 0 ]: The requested view welcome/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/joosep/system/classes/Kohana/View.php:137
2013-01-12 06:13:35 --- DEBUG: #0 /var/www/joosep/system/classes/Kohana/View.php(137): Kohana_View->set_filename('welcome/index')
#1 /var/www/joosep/system/classes/Kohana/View.php(30): Kohana_View->__construct('welcome/index', NULL)
#2 /var/www/joosep/application/classes/Controller/Welcome.php(7): Kohana_View::factory('welcome/index')
#3 /var/www/joosep/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/joosep/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 /var/www/joosep/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/joosep/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/joosep/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/joosep/system/classes/Kohana/View.php:137