:orphan:

******
mcstas
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/mcstas_files.txt

**Description for mcstas:**

Description from `McStas website <http://www.mcstas.org/>`_: "McStas is a general tool for simulating neutron scattering instruments and experiments. It is actively supported by `DTU Physics <http://www.fysik.dtu.dk/>`_, `NBI KU <http://www.nbi.dk/>`_, `ESS <http://www.europeanspallationsource.se/>`_, `PSI <http://www.psi.ch/>`_ and `ILL <http://www.ill.eu/>`_."


**Using mcstas:**

McStas is run on the command line using a job submission script eg:

.. code-block:: console

  #!/bin/bash
  #SBATCH -n 4 #### Number of cores to use
  #SBATCH -o %j.o
  #SBATCH -e %j.e
  # Run for 60 hours
  #SBATCH -t 60:00:00
  #SBATCH --exclusive

  #Load desired
  module load mcstas/2.4.1-intel-17.0.2

  # compiling the c file
  mcstas -I <path_to_instrument_files> -t -o <c_file> <instr_file>
  # compiling using mpicc
  mpicc -o <outputfile> <c_file> -lm -DUSE_MPI
  # running
  mcrun <outputfile> --ncount=<neutrons> --format=PGPLOT --mpi=auto
  wait

Submit using:

.. code-block:: console

  [me@scarf]$ sbath jcl

Where jcl is the name of the job submission script file from above. To change the number of cores, please make sure to change the #SBATCH -n value.

To monitor your jobs progress use the normal LSF batch commands eg:

.. code-block:: console

  [me@scarf]$ squeue -u <username>

or

.. code-block:: console

  [me@scarf]$ squeue -u <username> -l

ISIS_tables have been added to McStas.


**Documentation for mcstas:**

The McStas manual can be found on: `http://www.mcstas.org/documentation/manual/mcstas-2.0-manual.pdf <http://www.mcstas.org/documentation/manual/mcstas-2.0-manual.pdf>`_
