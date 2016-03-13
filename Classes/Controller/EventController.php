<?php
namespace Wenzel\T3eventsRest\Controller;

use Wenzel\T3eventsRest\Domain\Model\Event;
use Webfox\T3events\Domain\Repository\EventRepository;
use Luracast\Restler\RestException;

class EventController
{
	/**
	 * @var \Webfox\T3events\Domain\Repository\EventRepository
	 */
	protected $eventRepository;

	/**
	 * inject event repository
	 *
	 * @access private
	 * @param \Webfox\T3events\Domain\Repository\EventRepository $eventRepository
	 */
	public function injectEventRepository(EventRepository $eventRepository) {
		$this->eventRepository = $eventRepository;
	}

	/**
	 * Get an event by uid
	 *
	 * API-Endpoint is always callable
	 *
	 * @url GET {uid}
	 *
	 * @param integer $uid
	 * @return Event {@type \Wenzel\T3eventsRest\Domain\Model\Event}
	 */
	public function getEventByUid($uid)
	{
		$event = $this->eventRepository->findByUid($uid);
		return $event;
	}
}
