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

.. _bhenk\logger\unit\ConsoleLoggerTrait:

ConsoleLoggerTrait
==================

.. table::
   :widths: auto
   :align: left

   ========== =================== 
   namespace  bhenk\\logger\\unit 
   predicates Trait               
   ========== =================== 


**Trait capable of redirecting log output to console**



.. note::
   Caveat: only log statements logged via :ref:`bhenk\logger\log\Log` will be redirected.
   Test cases that want to inspect
   log output of classes under test use this trait. It is recommended to use this trait together with
   :ref:`bhenk\logger\unit\LogAttribute`.

Example usage:

.. code-block:: php

   class SomeTest extends TestCase {
       use ConsoleLoggerTrait;
   ...

All log statements via :ref:`bhenk\logger\log\Log` will be redirected during runtime of the TestCase,
permanently.
At least until you remove the ``use`` statement. When more flexibility is required also use
:ref:`bhenk\logger\unit\LogAttribute`.

.. code-block:: php

     #[LogAttribute()]
     class SomeTest extends TestCase {
         use ConsoleLoggerTrait;
     ...

All log statements via :ref:`bhenk\logger\log\Log` will be redirected.
To stop redirecting log statements for the entire
TestCase just type *false* as the first argument for :ref:`bhenk\logger\unit\LogAttribute`. To change the
*Level* of all log statements that pass to console do something like
``#[LogAttribute(true, Level::Error)]``. When more fine-grained control is needed use
:ref:`bhenk\logger\unit\LogAttribute` also on individual test methods.

.. code-block:: php

         #[LogAttribute(false)]
         public function testSomeFeature() : void {
              ...
         }

Suppress all logging via console of code touched by SomeFeature. When revisiting the test method just
change the LogAttribute parameter to true. Optionally change the level of log statements seen via console
as well.

The on/off setting of :ref:`bhenk\logger\unit\LogAttribute` on class level has precedence
over that on method level. A class
with ``#[LogAttribute(false)]`` will never output via console.

The setting of the level parameter of :ref:`bhenk\logger\unit\LogAttribute` on individual
methods has precedence over that set
on class level.

This trait calls on :ref:`bhenk\logger\log\Log` to set the type of logger temporarily to
:ref:`bhenk\logger\build\LoggerTypes::clt`.
Skies look bright if the logger of this type has the handler :ref:`bhenk\logger\handle\ConsoleHandler`.
If so, this trait will use the :ref:`bhenk\logger\handle\ColorSchemeInterface` set on this handler.
Otherwise, a RuntimeException will be thrown with the message that you messed up the code.




.. admonition::  see also

    :ref:`bhenk\logger\build\ConsoleLoggerCreator`


.. contents::


----


.. _bhenk\logger\unit\ConsoleLoggerTrait::Constants:

Constants
+++++++++


.. _bhenk\logger\unit\ConsoleLoggerTrait::CONSOLE_LOGGER:

ConsoleLoggerTrait::CONSOLE_LOGGER
----------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 




**The logger type used**


Logger types are obtained from :ref:`bhenk\logger\build\LoggerFactory`. In this case the Logger obtained is equipped
with a :ref:`bhenk\logger\handle\ConsoleHandler`.



.. code-block:: php

   enum(bhenk\logger\build\LoggerTypes::clt) 




----


.. _bhenk\logger\unit\ConsoleLoggerTrait::Methods:

Methods
+++++++


.. _bhenk\logger\unit\ConsoleLoggerTrait::setUpBeforeClass:

ConsoleLoggerTrait::setUpBeforeClass
------------------------------------

.. table::
   :widths: auto
   :align: left

   ========== =============== 
   predicates public | static 
   ========== =============== 


**Sets up before the** `TestCase <https://www.google.com/search?q=PHPUnit\\Framework\\TestCase>`_ **starts running**



If :ref:`bhenk\logger\unit\LogAttribute` on class level is absent or
enabled, will print a line to console with the name of the TestCase.
Will call on :tech:`parent::setUpBeforeClass()` after this.


.. code-block:: php

   public static function setUpBeforeClass(): void


| :tag6:`return` void


----


.. _bhenk\logger\unit\ConsoleLoggerTrait::tearDownAfterClass:

ConsoleLoggerTrait::tearDownAfterClass
--------------------------------------

.. table::
   :widths: auto
   :align: left

   ========== =============== 
   predicates public | static 
   ========== =============== 


**Tears down after the** `TestCase <https://www.google.com/search?q=PHPUnit\\Framework\\TestCase>`_ **has run**



If :ref:`bhenk\logger\unit\LogAttribute` on class level is absent or enabled,
will print a farewell message to console as demarcation of the TestCase. Will call on
:tech:`parent::tearDownAfterClass()` after this.



.. code-block:: php

   public static function tearDownAfterClass(): void


| :tag6:`return` void


----


.. _bhenk\logger\unit\ConsoleLoggerTrait::setUp:

ConsoleLoggerTrait::setUp
-------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 


**Set up before an individual test method starts running**



If :ref:`bhenk\logger\unit\LogAttribute` on method level is absent or enabled, will print the name of the method to console.
Sets the :ref:`bhenk\logger\unit\ConsoleLoggerTrait::CONSOLE_LOGGER` as type on :ref:`bhenk\logger\log\Log`.
Will call on :tech:`parent::setUp()` after this.



.. code-block:: php

   public function setUp(): void


| :tag6:`return` void
| :tag6:`throws` `ReflectionException <https://www.php.net/manual/en/class.reflectionexception.php>`_


----


.. _bhenk\logger\unit\ConsoleLoggerTrait::tearDown:

ConsoleLoggerTrait::tearDown
----------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 


**Resets the Logger type**


Will reset the :ref:`bhenk\logger\log\Log` to its original :ref:`LoggerType <bhenk\logger\build\LoggerTypes>`.
Calls :tech:`parent::tearDown()` after this.


.. code-block:: php

   public function tearDown(): void


| :tag6:`return` void


----

:block:`Sat, 01 Apr 2023 12:44:22 +0000` 
