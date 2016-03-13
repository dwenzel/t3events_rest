<?php
namespace Wenzel\T3eventsRest\Domain\Model;

use Webfox\T3events\Domain\Model\Event as BaseEvent;

class Event extends BaseEvent 
{
	/**
	 * @var integer {@required true} {@min 1}
	 */
	public $uid;
}
