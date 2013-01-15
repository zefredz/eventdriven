eventdriven
===========

EventDriven is a PHP Event driven architecture with the following components :

- EventManager : implements the event queue and registry that dispatch event 
to the corresponding listeners
- EventListener : listen to the occurence of a given event type and call a
callaback method or function when this event occurs
- EventDriven : an event driven class that declare event listener to the
event manager
- EventGenerator : a class taht generate events
- Event : the basic event class

<div>
<pre>
     +---------------+
     |EVENT GENERATOR|
     +------+--------+
            |
            |
            |     +-----+                   +------------+
            +-----+EVENT|                   |EVENT DRIVEN|
            |     +-----+                   +-----+------+
            |                                     |
            |                                     |
      +-----+-------+                      +------+-------+
      |EVENT MANAGER+-----------+----------+EVENT LISTENER|
      +-------------+           |          +--------------+
                                |
                             +--+--+
                             |EVENT|
                             +-----+
</pre>
</div>

Copyright notice
----------------

(see COPYING for more details)
    
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
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA