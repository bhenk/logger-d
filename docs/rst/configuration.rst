Configuration
=============

.. contents::

Configuration file
++++++++++++++++++

Everything will work on default settings. Nevertheless, configuration of loggers and handlers can be given.

The :ref:`bhenk\logger\build\LoggerFactory` will look for a directory *config* and a file
named *log_config.php*. The *config* directory and the :ref:`bhenk\logger\build\LoggerFactory` file
should have a common ancestor:

.. code-block::

                       | /config/log_config.php
     {common ancestor} |
                       | /{..}/vendor/{..}/bhenk/logger/{..}

See :ref:`bhenk\logger\build\LoggerFactory` for an example of a *log_config* file.

Log output files
++++++++++++++++

Unless specified with absolute filenames in the configuration file (see above) log files will be relative
to the directory *logs* that is a child of a common ancestor of the code base:

.. code-block::

                       | /logs/logger/{..}
     {common ancestor} |
                       | /{..}/vendor/{..}/bhenk/logger/{..}


