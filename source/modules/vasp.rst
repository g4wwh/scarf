:orphan:

******
vasp
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/vasp_files.txt

**Description for vasp:**

From `VASP website: <http://www.vasp.at/>`_ "The Vienna Ab initio Simulation Package (VASP) is a computer program for atomic scale materials modelling, e.g. electronic structure calculations and quantum-mechanical molecular dynamics, from first principles."


**Using vasp:**

VASP is run on the command line using an LSF job submission script eg:

.. code-block:: console

  #!/bin/bash
  #BSUB -n 4
  #BSUB -o %J.o
  #BSUB -e %J.e
  #BSUB -W 60
  #BSUB -x

  #Load desired 
  module load vasp/5.3

  #
  # Submit the job using mpirun
  mpirun -lsf  vasp

Please make sure that you submit this script from the same directory that you have VASP files in.

Submit using:

.. code-block:: console

  [me@scarf]$ bsub < jcl

Where jcl is the name of the job submission script file from above. When changing the number of processors to run on, be sure to change 'bsub -n' as well as 'mpirun.lsf -np'

To monitor your jobs progress use the normal LSF batch commands E.g.:

.. code-block:: console

  [me@scarf]$ bjobs

or

.. code-block:: console

  [me@scarf]$ bjobs -l

**Documentation for vasp:**

`https://www.vasp.at/documentation/ <https://www.vasp.at/documentation/>`_
