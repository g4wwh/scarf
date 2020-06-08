:orphan:

******
epoch
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/epoch_files.txt

**Description for epoch:**
This desciption of EPOCH comes from the `EPOCH CCPForge web site. <http://ccpforge.cse.rl.ac.uk/gf/project/epoch>`_

"EPOCH is the Extendable PIC Open Collaboration project to develop a UK community advance relativistic EM PIC code."


**Using epoch:**

EPOCH is run on the command line using an LSF job submission script eg:

.. code-block:: console

  #!/bin/bash
  #SBATCH -q scarf
  #SBATCH -n 4
  #SBATCH -J Test1
  #SBATCH -W 01:00
  i#SBATCH -o log.dat
  #SBATCH -e errors.dat
  # Load EPOCH module
  module load epoch/4.8.5

  icd /home/scarfxxx/epoch/epoch3d/run1
  #
  # Submit the Epoch job using mpirun script
  # use epoch1d, epoch2d, or epoch3d codes mpirun -lsf

  mpirun -srun epoch3d

Where /home/scarfxxx/epoch/epoch3d/run1 contains the deck epoch control file. You can run 1d,2d or 3d version of epoch using the above jcl file by changing the mpirun executable to epoch2d, epoch3d etc.

Please also make sure that a file name USE_DATA_DIRECTORY is created under /home/scarfxxx/epoch/epoch3d/run1 which contains the path to your data directory.

.. code-block:: console

  $ cat USE_DATA_DIRECTORY
  /home/scarfxxx/epoch/epoch3d/run1/

If this is not specified, your job will crash.

Submit using:

.. code-block:: console

  [prompt]$ sbatch jcl

Where jcl is the name of the job submission script file from above.

To monitor your jobs progress use the normal LSF batch commands eg:

.. code-block:: console

  [prompt]$ squeue

or

.. code-block:: console

  i[prompt]$ squeue -l

**Documentation for epoch:**

An online tutorial can be found here :

Tutorial: `http://www2.warwick.ac.uk/fac/sci/csc/events/epoch/notes/ <http://www2.warwick.ac.uk/fac/sci/csc/events/epoch/notes/>`_


