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

.. _bhenk\logger\build\LoggerFactory:

LoggerFactory
=============

.. table::
   :widths: auto
   :align: left

   ========== ======================== 
   namespace  bhenk\\logger\\build     
   predicates Cloneable | Instantiable 
   ========== ======================== 


**Static class to create and stock Loggers**


.. contents::


----


.. _bhenk\logger\build\LoggerFactory::Constants:

Constants
+++++++++


.. _bhenk\logger\build\LoggerFactory::CONFIG_DIR:

LoggerFactory::CONFIG_DIR
-------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 




**The ancestor child directory that is expected to hold the log configuration file**



.. code-block:: php

   string(6) "config" 




----


.. _bhenk\logger\build\LoggerFactory::LOG_CONFIG_FILE:

LoggerFactory::LOG_CONFIG_FILE
------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 




**The expected configuration filename**



.. code-block:: php

   string(14) "log_config.php" 




----


.. _bhenk\logger\build\LoggerFactory::Methods:

Methods
+++++++


.. _bhenk\logger\build\LoggerFactory::getConfigFile:

LoggerFactory::getConfigFile
----------------------------

.. table::
   :widths: auto
   :align: left

   ========== =============== 
   predicates public | static 
   ========== =============== 


**Get the current configuration filename or** *false* **if no configuration file was found**


.. code-block:: php

   public static function getConfigFile(): string|bool


| :tag6:`return` string | bool  - the current configuration filename; *false* if not found


----


.. _bhenk\logger\build\LoggerFactory::setConfigFile:

LoggerFactory::setConfigFile
----------------------------

.. table::
   :widths: auto
   :align: left

   ========== =============== 
   predicates public | static 
   ========== =============== 


**Set the configuration file**


Loads logger definitions from the configuration file.



.. code-block:: php

   public static function setConfigFile(
         Parameter #0 [ <required> string|bool $config_file ]
    ): void


| :tag6:`param` string | bool :param:`$config_file`
| :tag6:`return` void


----


.. _bhenk\logger\build\LoggerFactory::getLogger:

LoggerFactory::getLogger
------------------------

.. table::
   :widths: auto
   :align: left

   ========== =============== 
   predicates public | static 
   ========== =============== 


**Get the logger of the given type**


.. code-block:: php

   public static function getLogger(
         Parameter #0 [ <required> bhenk\logger\build\LoggerTypes $type ]
    ): LoggerInterface


| :tag6:`param` :ref:`bhenk\logger\build\LoggerTypes` :param:`$type`
| :tag6:`return` `LoggerInterface <https://www.php-fig.org/psr/psr-3/>`_


----


.. _bhenk\logger\build\LoggerFactory::getDefinition:

LoggerFactory::getDefinition
----------------------------

.. table::
   :widths: auto
   :align: left

   ========== =============== 
   predicates public | static 
   ========== =============== 


**Get the definition for the given type of logger (if any)**


.. code-block:: php

   public static function getDefinition(
         Parameter #0 [ <required> bhenk\logger\build\LoggerTypes $type ]
    ): array


| :tag6:`param` :ref:`bhenk\logger\build\LoggerTypes` :param:`$type`
| :tag6:`return` array


----


.. _bhenk\logger\build\LoggerFactory::setDefinition:

LoggerFactory::setDefinition
----------------------------

.. table::
   :widths: auto
   :align: left

   ========== =============== 
   predicates public | static 
   ========== =============== 


**Set the definition for a given type of logger**





.. code-block:: php

   public static function setDefinition(
         Parameter #0 [ <required> bhenk\logger\build\LoggerTypes $type ]
         Parameter #1 [ <optional> array $definition = [] ]
    ): void


| :tag6:`param` :ref:`bhenk\logger\build\LoggerTypes` :param:`$type`
| :tag6:`param` array :param:`$definition`
| :tag6:`return` void


----


.. _bhenk\logger\build\LoggerFactory::isQuiet:

LoggerFactory::isQuiet
----------------------

.. table::
   :widths: auto
   :align: left

   ========== =============== 
   predicates public | static 
   ========== =============== 





.. code-block:: php

   public static function isQuiet(): bool


| :tag6:`return` bool


----


.. _bhenk\logger\build\LoggerFactory::setQuiet:

LoggerFactory::setQuiet
-----------------------

.. table::
   :widths: auto
   :align: left

   ========== =============== 
   predicates public | static 
   ========== =============== 


**Sets whether the factory will output error messages to** *STDOUT* **when creating loggers**


.. code-block:: php

   public static function setQuiet(
         Parameter #0 [ <required> bool $quiet ]
    ): void


| :tag6:`param` bool :param:`$quiet`
| :tag6:`return` void


----

:block:`Wed, 29 Mar 2023 19:14:39 +0000` 
