.. required styles !!
.. raw:: html

    <style> .block {color:lightgrey; font-size: 0.6em; display: block; align-items: center; background-color:black; width:8em; height:8em;padding-left:7px;} </style>
    <style> .tag0 {color:grey; font-size: 0.9em; font-family: "Courier New", monospace;} </style>
    <style> .tag3 {color:grey; font-size: 0.9em; display: inline-block; width:3.1ch; font-family: "Courier New", monospace;} </style>
    <style> .tag4 {color:grey; font-size: 0.9em; display: inline-block; width:4.1ch; font-family: "Courier New", monospace;} </style>
    <style> .tag5 {color:grey; font-size: 0.9em; display: inline-block; width:5.1ch; font-family: "Courier New", monospace;} </style>
    <style> .tag6 {color:grey; font-size: 0.9em; display: inline-block; width:6.1ch; font-family: "Courier New", monospace;} </style>
    <style> .tag7 {color:grey; font-size: 0.9em; display: inline-block; width:7.1ch; font-family: "Courier New", monospace;} </style>
    <style> .tag8 {color:grey; font-size: 0.9em; display: inline-block; width:8.1ch; font-family: "Courier New", monospace;} </style>
    <style> .tag9 {color:grey; font-size: 0.9em; display: inline-block; width:9.1ch; font-family: "Courier New", monospace;} </style>
    <style> .tag10 {color:grey; font-size: 0.9em; display: inline-block; width:10.1ch; font-family: "Courier New", monospace;} </style>
    <style> .tag11 {color:grey; font-size: 0.9em; display: inline-block; width:11.1ch; font-family: "Courier New", monospace;} </style>
    <style> .tag12 {color:grey; font-size: 0.9em; display: inline-block; width:12.1ch; font-family: "Courier New", monospace;} </style>
    <style> .tagsign {color:grey; font-size: 0.9em; display: inline-block; width:3.2em;} </style>
    <style> .param {color:#005858; background-color:#F8F8F8; font-size: 0.8em; border:1px solid #D0D0D0;padding-left: 5px; padding-right: 5px;} </style>
    <style> .tech {color:#005858; background-color:#F8F8F8; font-size: 0.9em; border:1px solid #D0D0D0;padding-left: 5px; padding-right: 5px;} </style>

.. end required styles

.. required roles !!
.. role:: block
.. role:: tag0
.. role:: tag3
.. role:: tag4
.. role:: tag5
.. role:: tag6
.. role:: tag7
.. role:: tag8
.. role:: tag9
.. role:: tag10
.. role:: tag11
.. role:: tag12
.. role:: tagsign
.. role:: param
.. role:: tech

.. end required roles

.. _bhenk\logger\log\Req:

Req
===

.. table::
   :widths: auto
   :align: left

   ========== ========================================================== 
   namespace  bhenk\\logger\\log                                         
   predicates Cloneable | Instantiable                                   
   extends    :ref:`bhenk\logger\log\Log`                                
   hierarchy  :ref:`bhenk\logger\log\Req` -> :ref:`bhenk\logger\log\Log` 
   ========== ========================================================== 


**A log agent for recording request parameters**



The type of *Logger* used by this log agent defaults to "req".

Documentation of logging calls copied from https://www.php-fig.org/psr/psr-3/.



.. contents::


----


.. _bhenk\logger\log\Req::Methods:

Methods
+++++++


.. _bhenk\logger\log\Req::getType:

Req::getType
------------

.. table::
   :widths: auto
   :align: left

   ========== ==================================== 
   predicates public | static                      
   implements :ref:`bhenk\logger\log\Log::getType` 
   ========== ==================================== 









.. admonition:: @inheritdoc

    

   **Get the type of logger used by this log agent**
   
   
   
   
   | :tag6:`return` :ref:`bhenk\logger\build\LoggerTypes`  - type currently in use.
   
   ``@inheritdoc`` from method :ref:`bhenk\logger\log\Log::getType`




.. code-block:: php

   public static function getType(): LoggerTypes


| :tag6:`return` :ref:`bhenk\logger\build\LoggerTypes`


----


.. _bhenk\logger\log\Req::setType:

Req::setType
------------

.. table::
   :widths: auto
   :align: left

   ========== ==================================== 
   predicates public | static                      
   implements :ref:`bhenk\logger\log\Log::setType` 
   ========== ==================================== 









.. admonition:: @inheritdoc

    

   **Set the type of logger used by this log agent**
   
   
   
   
   | :tag6:`param` :ref:`bhenk\logger\build\LoggerTypes` :param:`$type` - the new type.
   | :tag6:`return` :ref:`bhenk\logger\build\LoggerTypes`  - the old type.
   
   ``@inheritdoc`` from method :ref:`bhenk\logger\log\Log::setType`




.. code-block:: php

   public static function setType(
         Parameter #0 [ <required> bhenk\logger\build\LoggerTypes $type ]
    ): LoggerTypes


| :tag6:`param` :ref:`bhenk\logger\build\LoggerTypes` :param:`$type`
| :tag6:`return` :ref:`bhenk\logger\build\LoggerTypes`


----


.. _bhenk\logger\log\Req::setLevel:

Req::setLevel
-------------

.. table::
   :widths: auto
   :align: left

   ============== ===================================== 
   predicates     public | static                       
   inherited from :ref:`bhenk\logger\log\Log::setLevel` 
   ============== ===================================== 


**Set the level at which the handlers of this log agents logger will fire**



**Warning:** do not use this method for logging configuration. Use a logger definition file instead.

Caveat: this method will only have effect on implementations of logger that expose
the method *getHandlers()* and only on handlers that expose the method *setLevel()*.



.. code-block:: php

   public static function setLevel(
         Parameter #0 [ <required> Monolog\Level|Psr\Log\LogLevel|string|int $level ]
    ): void


| :tag6:`param` `Level <https://www.google.com/search?q=Monolog\\Level>`_ | `LogLevel <https://www.php-fig.org/psr/psr-3/>`_ | string | int :param:`$level` - the level to set on the handlers of this log agent.
| :tag6:`return` void


----


.. _bhenk\logger\log\Req::emergency:

Req::emergency
--------------

.. table::
   :widths: auto
   :align: left

   ============== ====================================== 
   predicates     public | static                        
   inherited from :ref:`bhenk\logger\log\Log::emergency` 
   ============== ====================================== 


**System is unusable**





.. code-block:: php

   public static function emergency(
         Parameter #0 [ <required> Stringable|string $message ]
         Parameter #1 [ <optional> array $context = [] ]
    ): void


| :tag6:`param` `Stringable <https://www.php.net/manual/en/class.stringable.php>`_ | string :param:`$message`
| :tag6:`param` array :param:`$context`
| :tag6:`return` void


----


.. _bhenk\logger\log\Req::alert:

Req::alert
----------

.. table::
   :widths: auto
   :align: left

   ============== ================================== 
   predicates     public | static                    
   inherited from :ref:`bhenk\logger\log\Log::alert` 
   ============== ================================== 


**Action must be taken immediately**



Example: Entire website down, database unavailable, etc. This should
trigger the SMS alerts and wake you up.



.. code-block:: php

   public static function alert(
         Parameter #0 [ <required> Stringable|string $message ]
         Parameter #1 [ <optional> array $context = [] ]
    ): void


| :tag6:`param` `Stringable <https://www.php.net/manual/en/class.stringable.php>`_ | string :param:`$message`
| :tag6:`param` array :param:`$context`
| :tag6:`return` void


----


.. _bhenk\logger\log\Req::critical:

Req::critical
-------------

.. table::
   :widths: auto
   :align: left

   ============== ===================================== 
   predicates     public | static                       
   inherited from :ref:`bhenk\logger\log\Log::critical` 
   ============== ===================================== 


**Critical conditions**



Example: Application component unavailable, unexpected exception.



.. code-block:: php

   public static function critical(
         Parameter #0 [ <required> Stringable|string $message ]
         Parameter #1 [ <optional> array $context = [] ]
    ): void


| :tag6:`param` `Stringable <https://www.php.net/manual/en/class.stringable.php>`_ | string :param:`$message`
| :tag6:`param` array :param:`$context`
| :tag6:`return` void


----


.. _bhenk\logger\log\Req::error:

Req::error
----------

.. table::
   :widths: auto
   :align: left

   ============== ================================== 
   predicates     public | static                    
   inherited from :ref:`bhenk\logger\log\Log::error` 
   ============== ================================== 


**Runtime errors that do not require immediate action but should typically be logged and monitored**





.. code-block:: php

   public static function error(
         Parameter #0 [ <required> Stringable|string $message ]
         Parameter #1 [ <optional> array $context = [] ]
    ): void


| :tag6:`param` `Stringable <https://www.php.net/manual/en/class.stringable.php>`_ | string :param:`$message`
| :tag6:`param` array :param:`$context`
| :tag6:`return` void


----


.. _bhenk\logger\log\Req::warning:

Req::warning
------------

.. table::
   :widths: auto
   :align: left

   ============== ==================================== 
   predicates     public | static                      
   inherited from :ref:`bhenk\logger\log\Log::warning` 
   ============== ==================================== 


**Exceptional occurrences that are not errors**



Example: Use of deprecated APIs, poor use of an API, undesirable things
that are not necessarily wrong.



.. code-block:: php

   public static function warning(
         Parameter #0 [ <required> Stringable|string $message ]
         Parameter #1 [ <optional> array $context = [] ]
    ): void


| :tag6:`param` `Stringable <https://www.php.net/manual/en/class.stringable.php>`_ | string :param:`$message`
| :tag6:`param` array :param:`$context`
| :tag6:`return` void


----


.. _bhenk\logger\log\Req::notice:

Req::notice
-----------

.. table::
   :widths: auto
   :align: left

   ============== =================================== 
   predicates     public | static                     
   inherited from :ref:`bhenk\logger\log\Log::notice` 
   ============== =================================== 


**Normal but significant events**





.. code-block:: php

   public static function notice(
         Parameter #0 [ <required> Stringable|string $message ]
         Parameter #1 [ <optional> array $context = [] ]
    ): void


| :tag6:`param` `Stringable <https://www.php.net/manual/en/class.stringable.php>`_ | string :param:`$message`
| :tag6:`param` array :param:`$context`
| :tag6:`return` void


----


.. _bhenk\logger\log\Req::info:

Req::info
---------

.. table::
   :widths: auto
   :align: left

   ============== ================================= 
   predicates     public | static                   
   inherited from :ref:`bhenk\logger\log\Log::info` 
   ============== ================================= 


**Interesting events**



Example: User logs in, SQL logs.



.. code-block:: php

   public static function info(
         Parameter #0 [ <required> Stringable|string $message ]
         Parameter #1 [ <optional> array $context = [] ]
    ): void


| :tag6:`param` `Stringable <https://www.php.net/manual/en/class.stringable.php>`_ | string :param:`$message`
| :tag6:`param` array :param:`$context`
| :tag6:`return` void


----


.. _bhenk\logger\log\Req::debug:

Req::debug
----------

.. table::
   :widths: auto
   :align: left

   ============== ================================== 
   predicates     public | static                    
   inherited from :ref:`bhenk\logger\log\Log::debug` 
   ============== ================================== 


**Detailed debug information**





.. code-block:: php

   public static function debug(
         Parameter #0 [ <required> Stringable|string $message ]
         Parameter #1 [ <optional> array $context = [] ]
    ): void


| :tag6:`param` `Stringable <https://www.php.net/manual/en/class.stringable.php>`_ | string :param:`$message`
| :tag6:`param` array :param:`$context`
| :tag6:`return` void


----


.. _bhenk\logger\log\Req::log:

Req::log
--------

.. table::
   :widths: auto
   :align: left

   ============== ================================ 
   predicates     public | static                  
   inherited from :ref:`bhenk\logger\log\Log::log` 
   ============== ================================ 


**Logs with an arbitrary level**





.. code-block:: php

   public static function log(
         Parameter #0 [ <required> Monolog\Level|string|int $level ]
         Parameter #1 [ <required> Stringable|string $message ]
         Parameter #2 [ <optional> array $context = [] ]
    ): void


| :tag6:`param` `Level <https://www.google.com/search?q=Monolog\\Level>`_ | string | int :param:`$level`
| :tag6:`param` `Stringable <https://www.php.net/manual/en/class.stringable.php>`_ | string :param:`$message`
| :tag6:`param` array :param:`$context`
| :tag6:`return` void


----

:block:`Thu, 30 Mar 2023 20:36:52 +0000` 
