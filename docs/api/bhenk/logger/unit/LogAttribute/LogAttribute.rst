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

.. _bhenk\logger\unit\LogAttribute:

LogAttribute
============

.. table::
   :widths: auto
   :align: left

   ========== ======================== 
   namespace  bhenk\\logger\\unit      
   predicates Cloneable | Instantiable 
   ========== ======================== 


**Attribute to influence logging behavior**





| :tag4:`link` `Attribute::TARGET_CLASS <https://www.php.net/manual/en/class.attribute.php>`_
| :tag4:`link` `Attribute::TARGET_METHOD <https://www.php.net/manual/en/class.attribute.php>`_


.. contents::


----


.. _bhenk\logger\unit\LogAttribute::Constructor:

Constructor
+++++++++++


.. _bhenk\logger\unit\LogAttribute::__construct:

LogAttribute::__construct
-------------------------

.. table::
   :widths: auto
   :align: left

   ========== ==================== 
   predicates public | constructor 
   ========== ==================== 


**Constructs a** :ref:`bhenk\logger\unit\LogAttribute`





.. code-block:: php

   public function __construct(
         Parameter #0 [ <optional> bool $on = true ]
         Parameter #1 [ <optional> Monolog\Level $level = \Monolog\Level::Debug ]
    )


| :tag5:`param` bool :param:`$on` - set attribute on or off. Default true.
| :tag5:`param` `Level <https://www.google.com/search?q=Monolog\\Level>`_ :param:`$level` - set the level of log output. Default `Level::Debug <https://www.google.com/search?q=Monolog\\Level::Debug>`_.


----

:block:`Sat, 01 Apr 2023 09:21:30 +0000` 
