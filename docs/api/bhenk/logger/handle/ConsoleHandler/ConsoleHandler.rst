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

.. _bhenk\logger\handle\ConsoleHandler:

ConsoleHandler
==============

.. table::
   :widths: auto
   :align: left

   ========== ============================================================================================================================================================================================================= 
   namespace  bhenk\\logger\\handle                                                                                                                                                                                         
   predicates Cloneable | Instantiable                                                                                                                                                                                      
   implements `ResettableInterface <https://www.google.com/search?q=Monolog\\ResettableInterface>`_ | `HandlerInterface <https://www.google.com/search?q=Monolog\\Handler\\HandlerInterface>`_                              
   extends    `AbstractHandler <https://www.google.com/search?q=Monolog\\Handler\\AbstractHandler>`_                                                                                                                        
   hierarchy  :ref:`bhenk\logger\handle\ConsoleHandler` -> `AbstractHandler <https://www.google.com/search?q=Monolog\\Handler\\AbstractHandler>`_ -> `Handler <https://www.google.com/search?q=Monolog\\Handler\\Handler>`_ 
   ========== ============================================================================================================================================================================================================= 


**Handler class for displaying log output on console**


.. contents::


----


.. _bhenk\logger\handle\ConsoleHandler::Constructor:

Constructor
+++++++++++


.. _bhenk\logger\handle\ConsoleHandler::__construct:

ConsoleHandler::__construct
---------------------------

.. table::
   :widths: auto
   :align: left

   ========== ==================== 
   predicates public | constructor 
   ========== ==================== 


**Outputs log statements to console**



This `AbstractHandler <https://www.google.com/search?q=Monolog\\Handler\\AbstractHandler>`_ is especially equipped to be used during development.
See `ConsoleLoggerTrait <https://www.google.com/search?q=ConsoleLoggerTrait>`_ on how to
switch logging to console for a particular TestCase.

The :tagsign:`param` :tech:`$stack_match` expects a regular expression. It can be used to suppress the amount of
stacktrace elements of `Throwable <https://www.php.net/manual/en/class.throwable.php>`_\ s. Par example, the regex
``"/application\/(bhenk|unit)/i"`` will only print traces of files that have either
``/application/bhenk`` or ``/application/unit`` in their filename.
Defaults to ``"/(.*?)/i"`` - all files.

The :tagsign:`param` :tech:`$date_format` defaults to a short *"H:i:s:u"*.

The :tagsign:`param` :tech:`$color_scheme` points to the (fully qualified) classname of a class implementing the
:ref:`bhenk\logger\handle\ColorSchemeInterface` and defaults to :ref:`bhenk\logger\handle\ColorSchemeDark`, a dark scheme.

See also `AbstractHandler <https://www.google.com/search?q=Monolog\\Handler\\AbstractHandler>`_.



.. code-block:: php

   public function __construct(
         Parameter #0 [ <optional> Monolog\Level|string|int $level = \Monolog\Level::Debug ]
         Parameter #1 [ <optional> bool $bubble = false ]
         Parameter #2 [ <optional> bool $white_line = true ]
         Parameter #3 [ <optional> ?string $stack_match = NULL ]
         Parameter #4 [ <optional> ?string $date_format = NULL ]
         Parameter #5 [ <optional> ?string $exclamation = NULL ]
         Parameter #6 [ <optional> ?string $color_scheme = NULL ]
    )


| :tag5:`param` `Level <https://www.google.com/search?q=Monolog\\Level>`_ | string | int :param:`$level` - accepted minimum logging level
| :tag5:`param` bool :param:`$bubble` - controls the bubbling process of the handler stack
| :tag5:`param` bool :param:`$white_line` - print empty line above each log statement (default true)
| :tag5:`param` ?\ string :param:`$stack_match` - reg-ex to match filenames in stack traces
| :tag5:`param` ?\ string :param:`$date_format` - date format for printed log statements
| :tag5:`param` ?\ string :param:`$exclamation` - thrown in when a throwable is reported
| :tag5:`param` ?\ string :param:`$color_scheme` - color scheme for this handler


----


.. _bhenk\logger\handle\ConsoleHandler::Methods:

Methods
+++++++


.. _bhenk\logger\handle\ConsoleHandler::getColorScheme:

ConsoleHandler::getColorScheme
------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 


**Get the color scheme used by this class**





.. code-block:: php

   public function getColorScheme(): ColorSchemeInterface


| :tag6:`return` :ref:`bhenk\logger\handle\ColorSchemeInterface`


----


.. _bhenk\logger\handle\ConsoleHandler::resetCount:

ConsoleHandler::resetCount
--------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 


**Reset the log statement counter**


.. code-block:: php

   public function resetCount(): void


| :tag6:`return` void


----


.. _bhenk\logger\handle\ConsoleHandler::handle:

ConsoleHandler::handle
----------------------

.. table::
   :widths: auto
   :align: left

   ========== ======================================================================================================== 
   predicates public                                                                                                   
   implements `HandlerInterface::handle <https://www.google.com/search?q=Monolog\\Handler\\HandlerInterface::handle>`_ 
   ========== ======================================================================================================== 






.. admonition:: @inheritdoc

    

   **Handles a record**
   
   
   
   All records may be passed to this method, and the handler should discard
   those that it does not want to handle.
   
   The return value of this function controls the bubbling process of the handler stack.
   Unless the bubbling is interrupted (by returning true), the Logger class will keep on
   calling further handlers in the stack with a given log record.
   
   
   | :tag6:`param` `AbstractHandler <https://www.google.com/search?q=Monolog\\Handler\\AbstractHandler>`_ :param:`LogRecord` - $record The record to handle
   | :tag6:`return` bool  -      true means that this handler handled the record, and that bubbling is not permitted. false means the record was either not processed or that this handler allows bubbling.
   
   ``@inheritdoc`` from method `HandlerInterface::handle <https://www.google.com/search?q=Monolog\\Handler\\HandlerInterface::handle>`_




.. code-block:: php

   public function handle(
         Parameter #0 [ <required> Monolog\LogRecord $record ]
    ): bool


| :tag6:`param` `LogRecord <https://www.google.com/search?q=Monolog\\LogRecord>`_ :param:`$record`
| :tag6:`return` bool


----


.. _bhenk\logger\handle\ConsoleHandler::isHandling:

ConsoleHandler::isHandling
--------------------------

.. table::
   :widths: auto
   :align: left

   ============== ================================================================================================================ 
   predicates     public                                                                                                           
   implements     `HandlerInterface::isHandling <https://www.google.com/search?q=Monolog\\Handler\\HandlerInterface::isHandling>`_ 
   inherited from `AbstractHandler::isHandling <https://www.google.com/search?q=Monolog\\Handler\\AbstractHandler::isHandling>`_   
   ============== ================================================================================================================ 






.. admonition:: @inheritdoc

    

   **Checks whether the given record will be handled by this handler**
   
   
   
   This is mostly done for performance reasons, to avoid calling processors for nothing.
   
   Handlers should still check the record levels within handle(), returning false in isHandling()
   is no guarantee that handle() will not be called, and isHandling() might not be called
   for a given record.
   
   
   | :tag5:`param` `LogRecord <https://www.google.com/search?q=Monolog\\LogRecord>`_ :param:`$record` - Partial log record having only a level initialized
   
   ``@inheritdoc`` from method `HandlerInterface::isHandling <https://www.google.com/search?q=Monolog\\Handler\\HandlerInterface::isHandling>`_




.. code-block:: php

   public function isHandling(
         Parameter #0 [ <required> Monolog\LogRecord $record ]
    ): bool


| :tag6:`param` `LogRecord <https://www.google.com/search?q=Monolog\\LogRecord>`_ :param:`$record`
| :tag6:`return` bool


----


.. _bhenk\logger\handle\ConsoleHandler::setLevel:

ConsoleHandler::setLevel
------------------------

.. table::
   :widths: auto
   :align: left

   ============== ========================================================================================================== 
   predicates     public                                                                                                     
   inherited from `AbstractHandler::setLevel <https://www.google.com/search?q=Monolog\\Handler\\AbstractHandler::setLevel>`_ 
   ============== ========================================================================================================== 


**Sets minimum logging level at which this handler will be triggered**





| :tag0:`phpstan-param` value-of<Level::VALUES>|value-of<Level::NAMES>|Level|LogLevel::* $level


.. code-block:: php

   public function setLevel(
         Parameter #0 [ <required> Monolog\Level|string|int $level ]
    ): self


| :tag6:`param` `Level <https://www.google.com/search?q=Monolog\\Level>`_ | string | int :param:`$level` - Level or level name
| :tag6:`return` self


----


.. _bhenk\logger\handle\ConsoleHandler::getLevel:

ConsoleHandler::getLevel
------------------------

.. table::
   :widths: auto
   :align: left

   ============== ========================================================================================================== 
   predicates     public                                                                                                     
   inherited from `AbstractHandler::getLevel <https://www.google.com/search?q=Monolog\\Handler\\AbstractHandler::getLevel>`_ 
   ============== ========================================================================================================== 


**Gets minimum logging level at which this handler will be triggered**


.. code-block:: php

   public function getLevel(): Level


| :tag6:`return` `Level <https://www.google.com/search?q=Monolog\\Level>`_


----


.. _bhenk\logger\handle\ConsoleHandler::setBubble:

ConsoleHandler::setBubble
-------------------------

.. table::
   :widths: auto
   :align: left

   ============== ============================================================================================================ 
   predicates     public                                                                                                       
   inherited from `AbstractHandler::setBubble <https://www.google.com/search?q=Monolog\\Handler\\AbstractHandler::setBubble>`_ 
   ============== ============================================================================================================ 


**Sets the bubbling behavior**





.. code-block:: php

   public function setBubble(
         Parameter #0 [ <required> bool $bubble ]
    ): self


| :tag6:`param` bool :param:`$bubble` - true means that this handler allows bubbling. false means that bubbling is not permitted.
| :tag6:`return` self


----


.. _bhenk\logger\handle\ConsoleHandler::getBubble:

ConsoleHandler::getBubble
-------------------------

.. table::
   :widths: auto
   :align: left

   ============== ============================================================================================================ 
   predicates     public                                                                                                       
   inherited from `AbstractHandler::getBubble <https://www.google.com/search?q=Monolog\\Handler\\AbstractHandler::getBubble>`_ 
   ============== ============================================================================================================ 


**Gets the bubbling behavior**





.. code-block:: php

   public function getBubble(): bool


| :tag6:`return` bool  - true means that this handler allows bubbling. false means that bubbling is not permitted.


----


.. _bhenk\logger\handle\ConsoleHandler::reset:

ConsoleHandler::reset
---------------------

.. table::
   :widths: auto
   :align: left

   ============== ==================================================================================================== 
   predicates     public                                                                                               
   implements     `ResettableInterface::reset <https://www.google.com/search?q=Monolog\\ResettableInterface::reset>`_  
   inherited from `AbstractHandler::reset <https://www.google.com/search?q=Monolog\\Handler\\AbstractHandler::reset>`_ 
   ============== ==================================================================================================== 






.. admonition:: @inheritdoc

    No DocComment found on method `ResettableInterface::reset <https://www.google.com/search?q=Monolog\\ResettableInterface::reset>`_


.. code-block:: php

   public function reset(): void


| :tag6:`return` void


----


.. _bhenk\logger\handle\ConsoleHandler::handleBatch:

ConsoleHandler::handleBatch
---------------------------

.. table::
   :widths: auto
   :align: left

   ============== ================================================================================================================== 
   predicates     public                                                                                                             
   implements     `HandlerInterface::handleBatch <https://www.google.com/search?q=Monolog\\Handler\\HandlerInterface::handleBatch>`_ 
   inherited from `Handler::handleBatch <https://www.google.com/search?q=Monolog\\Handler\\Handler::handleBatch>`_                   
   ============== ================================================================================================================== 






.. admonition:: @inheritdoc

    

   **Handles a set of records at once**
   
   
   
   
   | :tag5:`param` `array<LogRecord> <https://www.google.com/search?q=array<LogRecord>>`_ :param:`$records` - The records to handle
   
   ``@inheritdoc`` from method `HandlerInterface::handleBatch <https://www.google.com/search?q=Monolog\\Handler\\HandlerInterface::handleBatch>`_




.. code-block:: php

   public function handleBatch(
         Parameter #0 [ <required> array $records ]
    ): void


| :tag6:`param` array :param:`$records`
| :tag6:`return` void


----


.. _bhenk\logger\handle\ConsoleHandler::close:

ConsoleHandler::close
---------------------

.. table::
   :widths: auto
   :align: left

   ============== ====================================================================================================== 
   predicates     public                                                                                                 
   implements     `HandlerInterface::close <https://www.google.com/search?q=Monolog\\Handler\\HandlerInterface::close>`_ 
   inherited from `Handler::close <https://www.google.com/search?q=Monolog\\Handler\\Handler::close>`_                   
   ============== ====================================================================================================== 






.. admonition:: @inheritdoc

    

   **Closes the handler**
   
   
   
   Ends a log cycle and frees all resources used by the handler.
   
   Closing a Handler means flushing all buffers and freeing any open resources/handles.
   
   Implementations have to be idempotent (i.e. it should be possible to call close several times without breakage)
   and ideally handlers should be able to reopen themselves on handle() after they have been closed.
   
   This is useful at the end of a request and will be called automatically when the object
   is destroyed if you extend Monolog\Handler\Handler.
   
   If you are thinking of calling this method yourself, most likely you should be
   calling ResettableInterface::reset instead. Have a look.
   
   ``@inheritdoc`` from method `HandlerInterface::close <https://www.google.com/search?q=Monolog\\Handler\\HandlerInterface::close>`_




.. code-block:: php

   public function close(): void


| :tag6:`return` void


----


.. _bhenk\logger\handle\ConsoleHandler::__destruct:

ConsoleHandler::__destruct
--------------------------

.. table::
   :widths: auto
   :align: left

   ============== ============================================================================================== 
   predicates     public                                                                                         
   inherited from `Handler::__destruct <https://www.google.com/search?q=Monolog\\Handler\\Handler::__destruct>`_ 
   ============== ============================================================================================== 


.. code-block:: php

   public function __destruct()



----


.. _bhenk\logger\handle\ConsoleHandler::__sleep:

ConsoleHandler::__sleep
-----------------------

.. table::
   :widths: auto
   :align: left

   ============== ======================================================================================== 
   predicates     public                                                                                   
   inherited from `Handler::__sleep <https://www.google.com/search?q=Monolog\\Handler\\Handler::__sleep>`_ 
   ============== ======================================================================================== 


.. code-block:: php

   public function __sleep()



----

:block:`Sat, 29 Apr 2023 12:17:14 +0000` 
