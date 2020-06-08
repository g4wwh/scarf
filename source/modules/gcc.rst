:orphan:

******
gcc
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/gcc_files.txt

**Description for gcc:**

The collection of GNU compilers. SCARF already has a version of gcc available without loading any modules. This module provides alternative versions, if required.


**Using gcc:**

Please run launch an interactive session:

.. code-block:: console

  $bsub -Is /bin/bash
  Job <1223> is submitted to queue <scarf>.
  <<Waiting for dispatch ...>>
  <<Starting on cnXXX.scarf.rl.ac.uk>>

And then,

.. code-block:: console

  $ module load gcc/4.8.2

This will load gcc binaries to your path.

.. code-block:: console

  $ which gcc
  /apps/gcc/4.8.2/bin/gcc

Here is a classis hello world example for GCC:

.. code-block:: console

  #include <stdio.h>

  int main ()
  {
    printf ("Hello World!\n");
  }

To compile:

.. code-block:: console

  gcc -o helloworld -ansi helloworld.c

Assuming the file name is 'helloworld.c'

.. code-block:: console

  $ ./helloworld
  Hello World!

There is also GCC version 4.4.7 installed via rpm. With no modules loaded:

.. code-block:: console

  $ which gcc
  /usr/bin/gcc
  $ gcc --version
  gcc (GCC) 4.4.7 20120313 (Red Hat 4.4.7-4)
  Copyright (C) 2010 Free Software Foundation, Inc.
  This is free software; see the source for copying conditions.  There is NO
  warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

**Documentation for gcc:**

`https://gcc.gnu.org/onlinedocs/ <https://gcc.gnu.org/onlinedocs/>`_

