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
 * Event used within event manager architecture
 * @access public
 */
class Event
{
    // event type
    protected $_type;
    // additionnal arguments needed by event listeners
    protected $_args;

    /**
     * constructor
     * @access public
     * @param $type string event type
     * @param $args array extra parameters
     */
    public function __construct( $type, $args = null )
    {
        $this->_type = $type;
        $this->_args = $args;
    }

    /**
     * get event type
     * @access public
     * @return string event type
     */
    public function getEventType( )
    {
        return $this->_type;
    }

    /**
     * get extra parameters
     * @access public
     * @return array event extra parameters
     */
    public function getArgs( )
    {
        return $this->_args;
    }
}
