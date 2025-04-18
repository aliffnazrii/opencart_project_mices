<?php
/**
 * @package		OpenCart
 * @author		Daniel Kerr
 * @copyright	Copyright (c) 2005 - 2017, OpenCart, Ltd. (https://www.opencart.com/)
 * @license		https://opensource.org/licenses/GPL-3.0
 * @link		https://www.opencart.com
*/

/**
* Config class
*/
class Config {
	private $data = array();
    
	/**
     * 
     *
     * @param	string	$key
	 * 
	 * @return	mixed
     */
	public function get($key) {

		if (getenv('QUEUE_CRON') && $key == 'action_pre_action') {
			$skip_pre_action = array(
				'startup/error',
				'startup/event',
				'startup/sass',
				'startup/login',
				'startup/permission'
			);
			$actions = isset($this->data[$key]) ? $this->data[$key] : array();
			foreach ($actions as $index => $action) {
				if (in_array($action, $skip_pre_action)) {
					unset($actions[$index]);
				}
			}
			return $actions;
		}
			
		return (isset($this->data[$key]) ? $this->data[$key] : null);
	}
	
    /**
     * 
     *
     * @param	string	$key
	 * @param	string	$value
     */
	public function set($key, $value) {
		$this->data[$key] = $value;
	}

    /**
     * 
     *
     * @param	string	$key
	 *
	 * @return	mixed
     */
	public function has($key) {
		return isset($this->data[$key]);
	}
	
    /**
     * 
     *
     * @param	string	$filename
     */
	public function load($filename) {
		$file = DIR_CONFIG . $filename . '.php';

		if (file_exists($file)) {
			$_ = array();

			require(modification($file));

			$this->data = array_merge($this->data, $_);
		} else {
			trigger_error('Error: Could not load config ' . $filename . '!');
			exit();
		}
	}
}