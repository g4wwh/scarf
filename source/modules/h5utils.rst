:orphan:

******
h5utils
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/h5utils_files.txt

**Description for h5utils:**

Description from `h5utils <http://ab-initio.mit.edu/wiki/index.php/H5utils>`_ website: "h5utils is a set of utilities for visualization and conversion of scientific data in the free, portable HDF5 format. "

**Using h5utils:**

Please run launch an interactive session:

.. code-block:: console

  $ bsub -Is /bin/bash
  iJob <1223> is submitted to queue <scarf>.
 i <<Waiting for dispatch ...>>
  <<Starting on cnXXX.scarf.rl.ac.uk>>

And then do,

.. code-block:: console

  $ module load h5utils/1.12.1

This will add h5utils binaries to your path.

**Documentation for h5utils:**

There are man pages available for binaries.

.. code-block:: console

  $ ls /apps/h5utils/1.12.1/bin/
  h5fromtxt  h5topng  h5totxt  h5tovtk
  i$ man h5totxt 

Additional documentation is available on `h5util's website. <http://ab-initio.mit.edu/wiki/index.php/H5utils#h5utils_Programs>`_

