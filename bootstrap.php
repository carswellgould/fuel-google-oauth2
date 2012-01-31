<?php

/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package		Fuel
 * @version		1.0
 * @author		Fuel Development Team
 * @license		MIT License
 * @copyright	2010 - 2011 Fuel Development Team
 * @link		http://fuelphp.com
 */

/**
 * FuelPHP Google package implementation. This namespace controls all Google
 * package functionality, including multiple sub-namespaces for the various
 * tools.
 *
 * @author     Rob McCann
 * @version    1.0
 * @package    Fuel
 * @subpackage Google
 */
Autoloader::add_core_namespace('Google');

// Define available classes into the Autoloader
Autoloader::add_classes(array(
	'Google\\Analytics'             => __DIR__.'/classes/analytics.php',
	'Google\\GoogleAPI'             => __DIR__.'/classes/googleapi.php',	
));

/* End of file bootstrap.php */
