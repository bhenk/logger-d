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

.. _bhenk\logger\handle\ColorSchemeBright:

ColorSchemeBright
=================

.. table::
   :widths: auto
   :align: left

   ========== =============================================== 
   namespace  bhenk\\logger\\handle                           
   predicates Cloneable | Instantiable                        
   implements :ref:`bhenk\logger\handle\ColorSchemeInterface` 
   ========== =============================================== 


**Bright schema for** :ref:`bhenk\logger\handle\ConsoleHandler`


.. contents::


----


.. _bhenk\logger\handle\ColorSchemeBright::Constants:

Constants
+++++++++


.. _bhenk\logger\handle\ColorSchemeBright::NL:

ColorSchemeBright::NL
---------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(2) " " 




----


.. _bhenk\logger\handle\ColorSchemeBright::RESET:

ColorSchemeBright::RESET
------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(26) "\033[0m\033[48;5;231m\033[38;5;235m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::DEBUG:

ColorSchemeBright::DEBUG
------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;100m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::INFO:

ColorSchemeBright::INFO
-----------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;107m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::NOTICE:

ColorSchemeBright::NOTICE
-------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;111m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::WARNING:

ColorSchemeBright::WARNING
--------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;128m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::ERROR:

ColorSchemeBright::ERROR
------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(15) "\033[7m\033[38;5;124m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::CRITICAL:

ColorSchemeBright::CRITICAL
---------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(15) "\033[7m\033[38;5;203m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::ALERT:

ColorSchemeBright::ALERT
------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(15) "\033[7m\033[38;5;199m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::EMERGENCY:

ColorSchemeBright::EMERGENCY
----------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(15) "\033[7m\033[38;5;196m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::C_DATE:

ColorSchemeBright::C_DATE
-------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;245m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::C_CLASS:

ColorSchemeBright::C_CLASS
--------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;245m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::C_FILE:

ColorSchemeBright::C_FILE
-------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;249m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::CONTEXT:

ColorSchemeBright::CONTEXT
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


.. _bhenk\logger\handle\ColorSchemeBright::EXTRA:

ColorSchemeBright::EXTRA
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


.. _bhenk\logger\handle\ColorSchemeBright::T_EXCL:

ColorSchemeBright::T_EXCL
-------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(25) "\033[1m\033[48;5;15m\033[38;5;124m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::T_BY:

ColorSchemeBright::T_BY
-----------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;114m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::T_MSG:

ColorSchemeBright::T_MSG
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


.. _bhenk\logger\handle\ColorSchemeBright::T_STACK:

ColorSchemeBright::T_STACK
--------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;114m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::T_CAUSE:

ColorSchemeBright::T_CAUSE
--------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;114m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::TRAIT_HELLO:

ColorSchemeBright::TRAIT_HELLO
------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeBright::TRAIT_METHOD:

ColorSchemeBright::TRAIT_METHOD
-------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(10) "\033[38;5;40m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::TRAIT_GOODBYE:

ColorSchemeBright::TRAIT_GOODBYE
--------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(11) "\033[38;5;110m" 




----


.. _bhenk\logger\handle\ColorSchemeBright::TEST:

ColorSchemeBright::TEST
-----------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(44) "I am a bhenk\logger\handle\ColorSchemeBright" 




----


.. _bhenk\logger\handle\ColorSchemeBright::END:

ColorSchemeBright::END
----------------------

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


.. _bhenk\logger\handle\ColorSchemeBright::C_CONTEXT:

ColorSchemeBright::C_CONTEXT
----------------------------

.. table::
   :widths: auto
   :align: left

   ============== ========================================================== 
   predicates     public                                                     
   Inherited from :ref:`bhenk\logger\handle\ColorSchemeInterface::C_CONTEXT` 
   ============== ========================================================== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeBright::C_EXTRA:

ColorSchemeBright::C_EXTRA
--------------------------

.. table::
   :widths: auto
   :align: left

   ============== ======================================================== 
   predicates     public                                                   
   Inherited from :ref:`bhenk\logger\handle\ColorSchemeInterface::C_EXTRA` 
   ============== ======================================================== 





.. code-block:: php

   string(0) "" 




----

:block:`Sat, 29 Apr 2023 12:27:03 +0000` 
