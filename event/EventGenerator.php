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
* Generic event generator for test purpose
* @access public
*/
class EventGenerator
{
    /**
    * constructor
    * @access public
    */
    public function __construct()
    {
    }

    /**
    * notify the event manager for an event occurence
    * @access public
    * @param Event event the event that occurs; an instance of the event class
    */
    function sendEvent( $event )
    {
        EventManager::notify( $event );
    }

    /**
    * public function to notify manager that an event occured,
    * using this fucntion instead of sendEvent allow to let the class create
    * the Event instance for you
    *
    * @param string eventType the type of the event
    * @param array args an array containing any parameters needed
    *   to describe the event occurence
    */

    function notifyEvent( $eventType, $args )
    {
        $event = new Event( $eventType, $args );
        $this->sendEvent( $event );
    }
}
