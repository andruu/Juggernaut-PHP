<?php
/**
 * Simple class to publish to Juggernaut
 *
 * @author Andrew Weir
 */
class Juggernaut {
	
	static $Redis;
	
	/**
	 * Initialize method excepts optional host
	 *
	 * @param $host string
	 * @return null
	 */
	public static function init ($host = '127.0.0.1') {
		self::$Redis = new Redis();
		self::$Redis->connect($host);
	}
	
	/**
	 * Publish data to Juggernaut
	 *
	 * @param $channels string
	 * @param $data array
	 * @return null
	 */
	public static function publish ($channels, $data) {
		if (!is_array($channels)) {
			$channels = array($channels);
		}
		
		$message = array(
			'channels' => $channels,
			'data' => $data
		);
		
		self::$Redis->publish('juggernaut', json_encode($message));
	}
}
?>