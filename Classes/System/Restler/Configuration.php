<?php
namespace Wenzel\T3eventsRest\System\Restler;

use Aoe\Restler\System\Restler\ConfigurationInterface;
use Luracast\Restler\Defaults;
use Luracast\Restler\Format\JsonFormat;
use Luracast\Restler\Restler;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2016 Dirk Wenzel <t3events@gmx.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

class Configuration implements ConfigurationInterface
{
    /**
     * @param Restler $restler
     * @return void
     */
    public function configureRestler(Restler $restler)
    {
				JsonFormat::$prettyPrint = true;

        $restler->setSupportedFormats('JsonFormat');
        $restler->addAPIClass('Wenzel\\T3eventsRest\\Controller\\EventController', 'api/events');

        // add exception-handler (which logs exceptions)
        //$restler->addErrorClass('Wenzel\\T3eventsRests\\System\\Restler\\ExceptionHandler');
		}
}
