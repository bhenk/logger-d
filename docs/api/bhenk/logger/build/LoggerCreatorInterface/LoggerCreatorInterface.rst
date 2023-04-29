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

.. _bhenk\logger\build\LoggerCreatorInterface:

LoggerCreatorInterface
======================

.. table::
   :widths: auto
   :align: left

   ===================== ================================================================================================================================================================================================================================================= 
   namespace             bhenk\\logger\\build                                                                                                                                                                                                                              
   predicates            Abstract | Interface                                                                                                                                                                                                                              
   known implementations :ref:`bhenk\logger\build\AbstractLoggerCreator` | :ref:`bhenk\logger\build\ConsoleLoggerCreator` | :ref:`bhenk\logger\build\DefaultLoggerCreator` | :ref:`bhenk\logger\build\ErrorLoggerCreator` | :ref:`bhenk\logger\build\RequestLoggerCreator` 
   ===================== ================================================================================================================================================================================================================================================= 


**Defines an interface for classes that are capable of creating loggers**


The loggers implement `LoggerInterface <https://www.php-fig.org/psr/psr-3/>`_.



.. contents::


----


.. _bhenk\logger\build\LoggerCreatorInterface::Constants:

Constants
+++++++++


.. _bhenk\logger\build\LoggerCreatorInterface::LOG_DIR:

LoggerCreatorInterface::LOG_DIR
-------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 




**Name of an ancestor child directory expected to be dedicated for logfiles**



.. code-block:: php

   string(4) "logs" 




----


.. _bhenk\logger\build\LoggerCreatorInterface::Methods:

Methods
+++++++


.. _bhenk\logger\build\LoggerCreatorInterface::create:

LoggerCreatorInterface::create
------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ================= 
   predicates public | abstract 
   ========== ================= 


**Creates a logger that implements LoggerInterface**


.. code-block:: php

   public abstract function create(
         Parameter #0 [ <optional> array $paras = [] ]
    ): LoggerInterface


| :tag6:`param` array :param:`$paras` - array of name-value pairs needed for building the logger.
| :tag6:`return` `LoggerInterface <https://www.php-fig.org/psr/psr-3/>`_


----

:block:`Sat, 29 Apr 2023 12:38:18 +0000` 
