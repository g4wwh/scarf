:orphan:

******
amber
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/amber_files.txt

**Description for amber:**

**Running amber:**
From the Amber website : "Amber" refers to two things: a set of molecular mechanical force fields for the simulation of biomolecules (which are in the public domain, and are used in a variety of simulation programs); and a package of molecular simulation programs

Running Amber
Amber is run on the command line using an LSF job submission script Eg :

.. code-block:: console

  #!/bin/bash
  #BSUB -n 4
  #BSUB -o %J.o
  #BSUB -e %J.e
  i#BSUB -W 60
  #BSUB -x

  #Load desired 
  imodule load amber/14

  #
  # Submit the job using mpirun
  mpirun -lsf pmemd.MPI -i mdin -o mdout -p prmtop -c inpcrd -r restrt

Submit using:

.. code-block:: console

  [me@scarf]$ bsub < jcl

Where jcl is the name of the job submission script file from above. If you would like to change the number of processors to run on, please change 'bsub -n' parameter.

To monitor your jobs progress use the normal LSF batch commands E.g.:

.. code-block:: console

  [me@scarf]$ bjobs

or

.. code-block:: console

  [me@scarf]$ bjobs -l

**Documentation for amber:**

Amber team has provided a long list of tutorials which can be found on: `http://ambermd.org/tutorials/ <http://ambermd.org/tutorials/>`_
