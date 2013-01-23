<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Performs install/uninstall methods for the Custom Baselayer Plugin
 *
 * @package    Ushahidi
 * @author     Ushahidi Team
 * @copyright  (c) 2008 Ushahidi Team
 * @license    http://www.ushahidi.com/license.html
 */
class custombaselayer_Install {

	/**
	 * Constructor to load the shared database library
	 */
	public function __construct()
	{
		$this->db =  new Database();
	}

	/**
	 * Creates the required columns for the Clickatell Plugin
	 */
	public function run_install()
	{
		// ****************************************
		// DATABASE STUFF
		$this->db->query("
			CREATE TABLE `".Kohana::config('database.default.table_prefix')."custombaselayer` (
				`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
				`openlayers` varchar(50) DEFAULT NULL,
				`title` varchar(100) DEFAULT NULL,
				`description` text,
				`attribution` text,
				`url` varchar(255) DEFAULT NULL,
				PRIMARY KEY (`id`)
			) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
		");

		$this->db->query("
			INSERT INTO `".Kohana::config('database.default.table_prefix')."custombaselayer` (`id`, `openlayers`, `title`, `description`, `attribution`, `url`)
				VALUES (1, 'XYZ', 'Custom Baselayer', 'This is a baselayer custom configured by the Custom Baselayer plugin.', NULL, NULL);
		");
		// ****************************************
	}

	/**
	 * Drops the plugin table
	 */
	public function uninstall()
	{
		$this->db->query("
			DROP TABLE ".Kohana::config('database.default.table_prefix')."custombaselayer;");
	}
}