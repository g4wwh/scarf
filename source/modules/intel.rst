:orphan:

******
intel
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/intel_files.txt

**Description for intel:**

SCARF has a long list of intel software available. There is Intel C compiler (icc), Intel Fortran compiler (ifort), Intel MKL libraries, Intel debugger (idb), Intel MPI and Intel Threading Building Block (tbb).


**Using intel:**

**Using Intel Compilers**

The compilers can be used by loading the intel module:

.. code-block:: console

  $ module load intel/14.0
  $ which icc
  /apps/intel/2013_sp1.1.106/composer_xe_2013_sp1.1.106/bin/intel64/icc
  $ which ifort
  /apps/intel/2013_sp1.1.106/composer_xe_2013_sp1.1.106/bin/intel64/ifort

**Using Intel MPI**

By default IBM Platform MPI is used on SCARF because it is directly integrated into LSF the job scheduling system. But other MPI versions can be used.

To use Intel MPI, run module load command:

.. code-block:: console

  $ module load intel/mpi/4.1.2.040
  $ which mpirun
  /apps/intel/mpi/4.1.2.040/bin64/mpirun

To use Intel MPI (or any other MPI) with LSF you can submit your jobs using following mpirun arugment.

.. code-block:: console

  $ mpirun --hostfile $LSB_DJOB_HOSTFILE <COMMAND>

LSB_DJOB_HOSTFILE environment varilable points to the hostfile which contains the list of hosts that mpi job is going to run on.

**Using Intel Debugger**

The debugger can be used by loading the intel module:

.. code-block:: console

  $ module load intel/idb/13.0
  $ which idb
  /apps/intel/2013_sp1.1.106/bin/idb

To launch the IDB GUI or any other GUI based application please follow these instructions and then run:

.. code-block:: console

  $ idb 

Please make sure that you are not running any application or code on the headnodes. This slows down the machines and causes problems for all SCARF users.


**Documentation for intel:**

`https://software.intel.com/en-us/articles/intel-cluster-studio-xe-documentation <https://software.intel.com/en-us/articles/intel-cluster-studio-xe-documentation>`_

