:orphan:

******
gromacs
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/gromacs_files.txt

**Description for gromacs:**

Description from `GROMACS website <http://www.gromacs.org/>`_.

"GROMACS is a versatile package to perform molecular dynamics, i.e. simulate the Newtonian equations of motion for systems with hundreds to millions of particles."


**Using gromacs:**

GROMACS can be run on the command line using an LSF job submission script Eg :

.. code-block:: console

  #!/bin/bash
  #BSUB -n 4
  #BSUB -o %J.o
  #BSUB -e %J.e
  #BSUB -W 60
  #BSUB -x

  #Load desired 
  module load gromacs/4.6.5

  #
  # Submit the job using mpirun
  mpirun -lsf mdrun_mpi -s example.tpr

where example.tpr is a gromacs input file.

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

**Documentation for gromacs:**

`http://www.gromacs.org/Documentation <http://www.gromacs.org/Documentation>`_
