:orphan:

******
turbomole
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/turbomole_files.txt

**Description for turbomole:**

TURBOMOLE is an ab initio computational chemistry program that implements various quantum chemistry methods.

**Using turbomole:**

is run on the command line using an LSF job submission script eg:

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

To monitor your jobs progress use the normal LSF batch commands eg:

.. code-block:: console

  [me@scarf]$ bjobs

or

.. code-block:: console

  me@scarf]$ bjobs -l


**Documentation for turbomole:**

`https://www.turbomole.org <https://www.turbomole.org>`_
