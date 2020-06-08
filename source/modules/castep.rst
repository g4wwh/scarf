:orphan:

******
castep
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/castep_files.txt

**Description for castep:**

CASTEP is a software package which uses density functional theory to provide a good atomic-level description of all manner of materials and molecules. CASTEP can give information about total energies, forces and stresses on an atomic system, as well as calculating optimum geometries, band structures, optical spectra, phonon spectra and much more. It can also perform molecular dynamics simulations.


**Running castep:**

Castep is run on the command line using an SLURM job submission script Eg :

.. code-block:: console

  #!/bin/bash
  #SBATCH -n 4
  #SBATCH -o %j.o
  #SBATCH -e %j.e
  # Run for 60 hours
  #SBATCH -t 60:00:00
  #SBATCH --exclusive

  #Load desired CASTEP module
  module load castep/17.2.1

  #
  # Submit the job using mpirun
  mpirun -srun castep.mpi <SEEDNAME>

Submit using:

.. code-block:: console

  [me@scarf]$ sbatch jcl

Where jcl is the name of the job submission script file from above. If you would like to change the number of processors to run on, please change '-n' parameter.

To monitor your jobs progress use the normal SLURM batch commands eg:

.. code-block:: console

  [me@scarf]$ squeue

or

.. code-block:: console

  [me@scarf]$ squeue -l


**Documentation for castep:**


The castep website is here `www.castep.org <http://www.castep.org/>`_ where you can find tutorials and FAQs.
