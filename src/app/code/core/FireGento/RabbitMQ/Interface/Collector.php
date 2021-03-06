<?php
/**
 * This file is part of a FireGento e.V. module.
 *
 * This FireGento e.V. module is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * This script is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * PHP version 5
 *
 * @category  FireGento
 * @package   FireGento_RabbitMQ
 * @author    FireGento Team <team@firegento.com>
 * @copyright 2017 FireGento Team (http://www.firegento.com)
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 */

/**
 * defining required methods for collectors
 *
 * @category FireGento
 * @package  FireGento_RabbitMQ
 * @author   FireGento Team <team@firegento.com>
 */
interface FireGento_RabbitMQ_Interface_Collector extends FireGento_RabbitMQ_Interface_Applicable
{
    /**
     * Collects list of event objects that can be used by message producers
     *
     * @param Varien_Event $event
     * @return Mage_Core_Model_Abstract[]
     */
    public function collect(Varien_Event $event);
}