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