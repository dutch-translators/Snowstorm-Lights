<?php
/**
*
* Snowstorm & Lights extension for the phpBB Forum Software package.
* [Dutch] translated by Dutch Translators (https://github.com/dutch-translators)
*
* @copyright (c) 2014 Prosk8er <http://www.gotskillslounge.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_SNOWSTORM_LIGHTS'		=> 'Sneeuwstorm & Lichtjes',
	'ACP_SNOWSTORM_LIGHTS_SETTINGS'	=> 'Sneeuwstorm & Lichtjes instellingen',
	'SCL_ENABLED'			=> 'Vernielbare kerstlichtjes inschakelen',
	'SNOW_ENABLED'			=> 'Sneeuwstorm inschakelen',
	'SNOWSTORM_LIGHTS'		=> 'Sneeuwstorm & Lichtjes',
	'SNOWSTORM_LIGHTS_EXPLAIN'	=> 'Sneeuwstorm & Lichtjes beheren.',
	'SNOWSTORM_LIGHTS_SAVED'	=> 'Wijzigingen succesvol opgeslagen.',
));
