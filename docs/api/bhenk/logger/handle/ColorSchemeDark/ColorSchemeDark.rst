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

.. _bhenk\logger\handle\ColorSchemeDark:

ColorSchemeDark
===============

.. table::
   :widths: auto
   :align: left

   ========== =============================================== 
   namespace  bhenk\\logger\\handle                           
   predicates Cloneable | Instantiable                        
   implements :ref:`bhenk\logger\handle\ColorSchemeInterface` 
   ========== =============================================== 


**Dark schema for** :ref:`bhenk\logger\handle\ConsoleHandler`





.. contents::


----


.. _bhenk\logger\handle\ColorSchemeDark::Constants:

Constants
+++++++++


.. _bhenk\logger\handle\ColorSchemeDark::NL:

ColorSchemeDark::NL
-------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(2) " " 




----


.. _bhenk\logger\handle\ColorSchemeDark::RESET:

ColorSchemeDark::RESET
----------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(26) "\033[0m\033[48;5;236m\033[38;5;252m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::DEBUG:

ColorSchemeDark::DEBUG
----------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;100m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::INFO:

ColorSchemeDark::INFO
---------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;107m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::NOTICE:

ColorSchemeDark::NOTICE
-----------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;111m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::WARNING:

ColorSchemeDark::WARNING
------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;128m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::ERROR:

ColorSchemeDark::ERROR
----------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(15) "\033[7m\033[38;5;124m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::CRITICAL:

ColorSchemeDark::CRITICAL
-------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(15) "\033[7m\033[38;5;203m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::ALERT:

ColorSchemeDark::ALERT
----------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(15) "\033[7m\033[38;5;199m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::EMERGENCY:

ColorSchemeDark::EMERGENCY
--------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(15) "\033[7m\033[38;5;196m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::C_DATE:

ColorSchemeDark::C_DATE
-----------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;245m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::C_CLASS:

ColorSchemeDark::C_CLASS
------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;245m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::C_FILE:

ColorSchemeDark::C_FILE
-----------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;249m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::C_CONTEXT:

ColorSchemeDark::C_CONTEXT
--------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;104m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::C_EXTRA:

ColorSchemeDark::C_EXTRA
------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;104m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::T_EXCL:

ColorSchemeDark::T_EXCL
-----------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(25) "\033[1m\033[48;5;15m\033[38;5;124m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::T_BY:

ColorSchemeDark::T_BY
---------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;114m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::T_MSG:

ColorSchemeDark::T_MSG
----------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;114m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::T_STACK:

ColorSchemeDark::T_STACK
------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;114m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::T_CAUSE:

ColorSchemeDark::T_CAUSE
------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;114m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::TRAIT_HELLO:

ColorSchemeDark::TRAIT_HELLO
----------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeDark::TRAIT_METHOD:

ColorSchemeDark::TRAIT_METHOD
-----------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;227m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::TRAIT_GOODBYE:

ColorSchemeDark::TRAIT_GOODBYE
------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;110m" 




----


.. _bhenk\logger\handle\ColorSchemeDark::TEST:

ColorSchemeDark::TEST
---------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(42) "I am a bhenk\logger\handle\ColorSchemeDark" 




----


.. _bhenk\logger\handle\ColorSchemeDark::END:

ColorSchemeDark::END
--------------------

.. table::
   :widths: auto
   :align: left

   ============== ==================================================== 
   predicates     public                                               
   Inherited from :ref:`bhenk\logger\handle\ColorSchemeInterface::END` 
   ============== ==================================================== 





.. code-block:: php

   string(4) "\033[0m" 




----

:block:`Sat, 29 Apr 2023 12:38:18 +0000` 
