Usage
=====

.. contents::

Requirements
++++++++++++

| Minimum (tested) PHP-version is 8.1.
| Minimum (tested) PHPUnit version is PHPUnit 9.5.

Installing with composer
++++++++++++++++++++++++

.. code-block::

   composer require bhenk/logger

Configuration
+++++++++++++

Configuration file
------------------

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
----------------

Unless specified with absolute filenames in the configuration file (see above) log files will be relative
to the directory *logs* that is a child of a common ancestor of the code base:

.. code-block::

                       | /logs/logger/{..}
     {common ancestor} |
                       | /{..}/vendor/{..}/bhenk/logger/{..}


Logging
+++++++

Static logger classes make for easy and concise coding. *Logger* facilitates two logger agents:

* :ref:`bhenk\logger\log\Log` - for normal use;
* :ref:`bhenk\logger\log\Req` - for logging request properties

Both have static methods as specified on interface `LoggerInterface <https://www.php-fig.org/psr/psr-3/>`_.

Console logging with PHPUnit
++++++++++++++++++++++++++++

Testing your code is great. Using `PHPUnit <https://phpunit.de/>`_ invites you to write testable code. But there
will always be more or less obscure places in your code. Does the program flow take the expected junction
at an *if* statement? Has this or that variable the right value at a precise moment? You can put in *debug* statements
for your logger at those places, but chances are you drown in log statements by the time your code base has grown
sufficiently large. Wouldn't it be great to see exactly those log statements on your console,
of that part of your codebase that is under test, with the chosen severity level? A Trait and an Attribute in
the package *bhenk\logger\unit* allows you to precisely do that.

The :ref:`bhenk\logger\unit\ConsoleLoggerTrait` use the
`PHPUnit fixtures <https://docs.phpunit.de/en/10.0/fixtures.html#fixtures>`_ ``setUp``, ``tearDown``,
``setUpBeforeClass`` and ``tearDownAfterClass`` to redirect log statements of the code under test to console.
The injected :ref:`bhenk\logger\handle\ConsoleHandler` makes for readable and clickable log statements that
otherwise would be lost in the log files. The :ref:`bhenk\logger\unit\LogAttribute` enables you to
choose exactly which test methods and which test classes will output to console.

Here is an example of console output using ConsoleLoggerTrait and LogAttribute on a TestCase.

.. image:: /img/console_1.jpg
   :alt: console view example

*Console view example*

The start and exit of the TestCase (here AbstractDaoTest) are clearly marked. The start of the test method is
indicated (here testInsert) and the log statements invoked by the code under test are printed to console,
with the originating location of the log statement (in most IDE's) as clickable link.
Note that among the 22 tests only the chosen test method is outputting log statements to console.

Check if an error message is clear and understandable by producing that error in a test method.

.. image:: /img/console_2.jpg
   :alt: console view example of inspecting error messages

*Console view example of inspecting error messages*

See :ref:`bhenk\logger\unit\ConsoleLoggerTrait` for directions of how to use Trait and Attribute on TestCases.

Happy coding!
