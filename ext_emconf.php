<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "t3events_rest".
 *
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Events RESTful API',
	'description' => 'Provides a REST API for Events',
	'category' => 'service',
	'version' => '0.0.0',
	'state' => 'alpha',
	'uploadfolder' => 0,
	'createDirs' => '',
	'clearcacheonload' => 1,
	'author' => 'Dirk Wenzel',
	'author_email' => 't3events@gmx.de',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '7.6.2-8.6.99',
			'php' => '5.5.0-0.0.0',
			't3events' => '0.32.0-0.0.0',
			'restler' => '1.6.10-1.99.99'
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => ' ',
);

