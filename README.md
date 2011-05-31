# Juggernaut for PHP #

Simple PHP class to publish messages to [Juggernaut](https://github.com/maccman/juggernaut/) server.

## Usages ##

Make sure that you have the [PHP Redis extension](https://github.com/owlient/phpredis) installed and working correctly. You can send a simple message to a single channel or send an array to multiple channels as in the second example.

	require 'Juggernaut.php';
	Juggernaut::init('127.0.0.1');
	// Simple message to one channel
	Juggernaut::publish('channel1', 'this is my message');
	// Send an object to multiple channels
	Juggernaut::publish(array('channel1', 'channel2'), array('this' => array('is' => 'data')));