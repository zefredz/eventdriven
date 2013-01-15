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

require_once dirname(__FILE__) . "/event/inc.event.php";

// ---------------------- Test Class --------------------

/**
 * Sample event driven object
 */
class MyEventDrivenObject extends EventDriven
{
    /**
     * sample event callback
     */
    public function onHelloEventCallMe( )
    {
        echo "Hello World\n";
    }

    /**
     * sample event callback
     */
    public function onHelloEventCallMe2( )
    {
        echo "Hello World 2\n";
    }

    /**
     * sample event callback
     */
    public function onAnotherEventCallMe( )
    {
        echo "another event occurs\n";
    }

    /**
     * main() method
     * @static
     */
    public static function main( )
    {
        echo "> creating objects...\n";
        $registry = EventManager::getInstance();
        $edo = new MyEventDrivenObject();
        $em = new EventGenerator();
        echo "> done\n\n";

        echo "> registrering listeners\n";
        $id1 = $edo->addListener( "hello", 'onHelloEventCallMe' );
        $id2 = $edo->addListener( "another", 'onAnotherEventCallMe' );
        echo "> done\n\n";

        echo "> sending events\n";
        $em->sendEvent( new Event("hello") );
        $em->sendEvent( new Event("another") );
        echo "> done\n\n";

        echo "> lists\n";
        echo "* registry:\n";
        $registry->listRegisteredListeners( );

        echo "> registrering another hello listener\n";
        $id3 = $edo->addListener( "hello", 'onHelloEventCallMe2' );
        echo "> done\n\n";

        echo "> lists\n";
        echo "* registry:\n";
        $registry->listRegisteredListeners( );

        echo "> sending events\n";
        $em->sendEvent( new Event("hello") );
        $em->sendEvent( new Event("another") );
        echo "> done\n\n";
        
        echo "> sending events staticaly\n";
        EventManager::notify( new Event("hello") );
        EventManager::notify( new Event("another") );
        echo "> done\n\n";

        echo "> unregistrering another and second hello listener\n";
        $edo->removeListener( "another", $id2 );
        $edo->removeListener( "hello", $id3 );
        echo "> done\n\n";

        echo "> lists\n";
        echo "* registry:\n";
        $registry->listRegisteredListeners( );

        echo "> sending events\n";
        $em->sendEvent( new Event("hello") );
        $em->sendEvent( new Event("another") );
        echo "> done\n";
    }
}

// -------------------- Run Test ---------------------

if ( ! defined( "DEBUG_MODE" ) ) define ( "DEBUG_MODE", true );
echo "<pre>";
MyEventDrivenObject::main();
echo "</pre>";
