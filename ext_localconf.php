<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['restler']['restlerConfigurationClasses'][] = 'DWenzel\\T3eventsRest\\System\\Restler\\Configuration';

