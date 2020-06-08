:orphan:

******
idl
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/idl_files.txt

**Description for idl:**

IDL is the ideal, timesaving solution for data analysis, data visualization, and software application development. From quick-look analysis and display to commercial programming projects, IDL combines the technology and tools you need with a modern, extensible environment. IDL requires less code and programming expertise to produce dynamic visualizations and analyses, or to develop powerful software applications.


**Using idl:**

IDL is run on command line on SCARF after submitting an interactive job onto one of the compute node:

.. code-block:: console

  [scarfxxx@scarf ~]$ bsub -Is /bin/bash
  Job <11> is submitted to queue <scarf-rhel6>.
  <<Waiting for dispatch ...>>
  <<Starting on cnxxx.scarf.rl.ac.uk>>
  [scarfxxx@cnxxx ~]$ module load idl/8.2
  [scarfxxx@cnxxx ~]$ idl
  IDL Version 8.2 (linux x86_64 m64). (c) 2012, Exelis Visual Information Solutions, Inc.
  Installation number: XXXXX.
  Licensed for use by: Science & Technology Facilitie

  IDL>


**Documentation for idl:**

EXELIS website have IDL documentation section which can be found at: `http://www.exelisvis.com/docs/using_idl_home.html <http://www.exelisvis.com/docs/using_idl_home.html>`_
