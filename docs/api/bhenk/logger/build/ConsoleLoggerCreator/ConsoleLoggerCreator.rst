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

.. _bhenk\logger\build\ConsoleLoggerCreator:

ConsoleLoggerCreator
====================

.. table::
   :widths: auto
   :align: left

   ========== ================================================================================================= 
   namespace  bhenk\\logger\\build                                                                              
   predicates Cloneable | Instantiable                                                                          
   implements :ref:`bhenk\logger\build\LoggerCreatorInterface`                                                  
   extends    :ref:`bhenk\logger\build\AbstractLoggerCreator`                                                   
   hierarchy  :ref:`bhenk\logger\build\ConsoleLoggerCreator` -> :ref:`bhenk\logger\build\AbstractLoggerCreator` 
   ========== ================================================================================================= 


.. contents::


----


.. _bhenk\logger\build\ConsoleLoggerCreator::Constants:

Constants
+++++++++


.. _bhenk\logger\build\ConsoleLoggerCreator::CHANNEL:

ConsoleLoggerCreator::CHANNEL
-----------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(3) "clt" 




----


.. _bhenk\logger\build\ConsoleLoggerCreator::LEVEL:

ConsoleLoggerCreator::LEVEL
---------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(5) "debug" 




----


.. _bhenk\logger\build\ConsoleLoggerCreator::BUBBLE:

ConsoleLoggerCreator::BUBBLE
----------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   bool(false) 




----


.. _bhenk\logger\build\ConsoleLoggerCreator::WHITE_LINE:

ConsoleLoggerCreator::WHITE_LINE
--------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   bool(true) 




----


.. _bhenk\logger\build\ConsoleLoggerCreator::STACK_MATCH:

ConsoleLoggerCreator::STACK_MATCH
---------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(8) "/(.*?)/i" 




----


.. _bhenk\logger\build\ConsoleLoggerCreator::DATE_FORMAT:

ConsoleLoggerCreator::DATE_FORMAT
---------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(7) "H:i:s:u" 




----


.. _bhenk\logger\build\ConsoleLoggerCreator::EXCLAMATION:

ConsoleLoggerCreator::EXCLAMATION
---------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(6) "chips!" 




----


.. _bhenk\logger\build\ConsoleLoggerCreator::COLOR_SCHEME:

ConsoleLoggerCreator::COLOR_SCHEME
----------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(35) "bhenk\logger\handle\ColorSchemeDark" 




----


.. _bhenk\logger\build\ConsoleLoggerCreator::LOG_DIR:

ConsoleLoggerCreator::LOG_DIR
-----------------------------

.. table::
   :widths: auto
   :align: left

   ============== ========================================================= 
   predicates     public                                                    
   Inherited from :ref:`bhenk\logger\build\LoggerCreatorInterface::LOG_DIR` 
   ============== ========================================================= 




**Name of an ancestor child directory expected to be dedicated for logfiles**



.. code-block:: php

   string(4) "logs" 




----


.. _bhenk\logger\build\ConsoleLoggerCreator::Methods:

Methods
+++++++


.. _bhenk\logger\build\ConsoleLoggerCreator::create:

ConsoleLoggerCreator::create
----------------------------

.. table::
   :widths: auto
   :align: left

   ========== ======================================================== 
   predicates public                                                   
   implements :ref:`bhenk\logger\build\LoggerCreatorInterface::create` 
   ========== ======================================================== 






.. admonition:: @inheritdoc

    

   **Creates a logger that implements LoggerInterface**
   
   | :tag6:`param` array :param:`$paras` - array of name-value pairs needed for building the logger.
   | :tag6:`return` `LoggerInterface <https://www.php-fig.org/psr/psr-3/>`_
   
   ``@inheritdoc`` from method :ref:`bhenk\logger\build\LoggerCreatorInterface::create`




.. code-block:: php

   public function create(
         Parameter #0 [ <optional> array $paras = [] ]
    ): LoggerInterface


| :tag6:`param` array :param:`$paras`
| :tag6:`return` `LoggerInterface <https://www.php-fig.org/psr/psr-3/>`_


----


.. _bhenk\logger\build\ConsoleLoggerCreator::makeAbsolute:

ConsoleLoggerCreator::makeAbsolute
----------------------------------

.. table::
   :widths: auto
   :align: left

   ============== ============================================================= 
   predicates     public                                                        
   inherited from :ref:`bhenk\logger\build\AbstractLoggerCreator::makeAbsolute` 
   ============== ============================================================= 


**Tries to make the given filename absolute**


An absolute :tagsign:`param` :tech:`$filename` will be returned as such.

This method will than try to locate an ancestor directory with a child with the name specified
by :ref:`bhenk\logger\build\LoggerCreatorInterface::LOG_DIR` (*logs*). The returned absolute filename will than point to
a child of this ancestor-child directory.

A :tagsign:`param` :tech:`$filename` is invalid if it is the empty string ("") or the slash forward (/).



.. code-block:: php

   public function makeAbsolute(
         Parameter #0 [ <required> string $filename ]
    ): string


| :tag6:`param` string :param:`$filename` - absolute or relative to ancestor directory 'logs'
| :tag6:`return` string  - absolute filename


----

:block:`Wed, 29 Mar 2023 19:14:39 +0000` 
