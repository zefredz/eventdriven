<?php // $Id$

// vim: expandtab sw=4 ts=4 sts=4:

/* BEGIN LICENSE BLOCK

    Copyright (c) 2005-2013 Frederic Minne <zefredz@gmail.com>

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU LESSER General Public License as published by
    the Free Software Foundation; either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU Lesser General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  US

END LICENSE BLOCK */

/**
* generic event driven application
* @access public
* @abstract
*/
class EventDriven
{
    /**
     * constructor
     * @access public
     */
    public function __construct()
    {
    }

    /**
     * add an event listener to the event driven application
     * @access public
     * @param string methodName callback method, must be a method of the
     *   current event-driven instance
     * @param string eventType event type
     * @return string eventlistener ID
     */
    public function addListener( $eventType, $methodName )
    {
        $listener = new EventListener( array( $this, $methodName ) );
        return EventManager::addListener( $eventType, $listener );
    }

    /**
     * remove an event listener from the application
     * @access public
     * @param string eventType event type
     * @param string eventlistener ID
     * @return boolean
     */
    public function removeListener( $eventType, $id )
    {
        return EventManager::removeListener( $eventType, $id );
    }
}
