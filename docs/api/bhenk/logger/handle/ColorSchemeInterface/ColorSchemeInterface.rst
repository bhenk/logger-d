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

.. _bhenk\logger\handle\ColorSchemeInterface:

ColorSchemeInterface
====================

.. table::
   :widths: auto
   :align: left

   ===================== ========================================================================================= 
   namespace             bhenk\\logger\\handle                                                                     
   predicates            Interface                                                                                 
   known implementations :ref:`bhenk\logger\handle\ColorSchemeBright` | :ref:`bhenk\logger\handle\ColorSchemeDark` 
   ===================== ========================================================================================= 


**Provides color schema for** :ref:`bhenk\logger\handle\ConsoleHandler`



Implementations of this interface may override color constants.


.. contents::


----


.. _bhenk\logger\handle\ColorSchemeInterface::Constants:

Constants
+++++++++


.. _bhenk\logger\handle\ColorSchemeInterface::NL:

ColorSchemeInterface::NL
------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::RESET:

ColorSchemeInterface::RESET
---------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::END:

ColorSchemeInterface::END
-------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(4) "\033[0m" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::DEBUG:

ColorSchemeInterface::DEBUG
---------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::INFO:

ColorSchemeInterface::INFO
--------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::NOTICE:

ColorSchemeInterface::NOTICE
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


.. _bhenk\logger\handle\ColorSchemeInterface::WARNING:

ColorSchemeInterface::WARNING
-----------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::ERROR:

ColorSchemeInterface::ERROR
---------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::CRITICAL:

ColorSchemeInterface::CRITICAL
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


.. _bhenk\logger\handle\ColorSchemeInterface::ALERT:

ColorSchemeInterface::ALERT
---------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::EMERGENCY:

ColorSchemeInterface::EMERGENCY
-------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::C_DATE:

ColorSchemeInterface::C_DATE
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


.. _bhenk\logger\handle\ColorSchemeInterface::C_CLASS:

ColorSchemeInterface::C_CLASS
-----------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::C_FILE:

ColorSchemeInterface::C_FILE
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


.. _bhenk\logger\handle\ColorSchemeInterface::C_CONTEXT:

ColorSchemeInterface::C_CONTEXT
-------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::C_EXTRA:

ColorSchemeInterface::C_EXTRA
-----------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::T_EXCL:

ColorSchemeInterface::T_EXCL
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


.. _bhenk\logger\handle\ColorSchemeInterface::T_BY:

ColorSchemeInterface::T_BY
--------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::T_MSG:

ColorSchemeInterface::T_MSG
---------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::T_STACK:

ColorSchemeInterface::T_STACK
-----------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::T_CAUSE:

ColorSchemeInterface::T_CAUSE
-----------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::TRAIT_HELLO:

ColorSchemeInterface::TRAIT_HELLO
---------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::TRAIT_METHOD:

ColorSchemeInterface::TRAIT_METHOD
----------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::TRAIT_GOODBYE:

ColorSchemeInterface::TRAIT_GOODBYE
-----------------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(0) "" 




----


.. _bhenk\logger\handle\ColorSchemeInterface::TEST:

ColorSchemeInterface::TEST
--------------------------

.. table::
   :widths: auto
   :align: left

   ========== ====== 
   predicates public 
   ========== ====== 





.. code-block:: php

   string(26) "I'm a ColorSchemeInterface" 




----

:block:`Fri, 31 Mar 2023 11:09:19 +0000` 
