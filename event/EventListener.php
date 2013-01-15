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
* listen to a particular event
* @access public
*/
class EventListener
{
    // protected fields
    protected $_callback;

    /**
    * constructor
    * @access public
    * @param callback to call when the observed event occurs
    */
    public function __construct( $callback )
    {
        $this->_callback = $callback;
    }

    /**
    * notification of event occurence
    * @access package private
    * @param Event event the event to handle
    */
    public function handle( $event )
    {
        call_user_func( $this->_callback, $event );
    }
}
