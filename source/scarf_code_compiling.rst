###################
Compiling your code
###################

One of the main uses for SCARF is the development, testing, and debugging of parallel code. Several compilers are available for use, together with a graphical parallel debugger.

There are small example MPI programs in C and Fortran at **/apps/mpi_examples**.  

$$$$$$$$$$$$$$$$$$$$$$$$$$$
Selecting your architecture
$$$$$$$$$$$$$$$$$$$$$$$$$$$

SCARF is a heterogenous cluster with Intel high performance processors. For most users it is not necessary to compile code for a specific architecture, as the default compiler options are good at producing applications which run effectively.

If you are confident in what you are doing and have a specific requirement to compile for only one architecture we would advise contacting the `Helpdesk <contact_us.html>`_ for further details, as this will enable us to give you the best advice for your situation.

$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
Getting access to a compilation node
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

**Compilation should not be done on either of the head nodes (scarf.rl.ac.uk and ui3.scarf.rl.ac.uk)**, as this can severely disrupt their use by other users.

When you need to compile you simply submit a request to the scheduler for an interactive session and it will return a shell prompt on a node. You can then compile your code, submit test jobs to the queues, recompile, etc. until you are happy and then log out of the interactive shell.

.. code-block:: console

  bash-4.2$ srun -p devel --pty /bin/bash

Please note that graphical editors will not work from the interactive nodes - if you wish to use one simply open the editor from one of the headnodes and start an interactive session in another shell. Your home directory is shared across the entire cluster so you simply edit and save your work on SCARF, but perform the compilation from the command line on the interactive node.

Choosing a compiler using GNU Modules
The GNU Modules command is used on SCARF, to remove the burden of manually setting environment variables. This enables users to simply and quickly switch between different compilers, and to gain access to a wide variety of software packages. The most important module commands are:

* module avail - lists all the currently available modules
* module list - lists all loaded modules
* module load modulename - load a named module
* module unload modulename - unload a named module
* module keyword string - search through modulefiles for string
* module help - display help for the module command

Documentation for the modules is available at the Applications and Libraries page

None of the modules are loaded when you first log in to SCARF. Please additionally note that:

* SCARF uses Platform MPI, which handles the high performance interconnect libraries and drivers automatically and are available be default with no action necessary. As such, please do not load "openmpi" module at any time as this will break your code. They are provided for compatability or testing reasons on old maintained code and should not be used.
* SCARF is a 64 bit platform. Compilation of 32 bit or non-64 bit clean code can cause problems. Whilst we will endeavour to provide assistance under these circumstances, this can only ever be on a best effort basis.
* All users are reminded that compilation should not be performed on the head node (scarf.rl.ac.uk, ui2.scarf.rl.ac.uk or ui3.scarf.rl.ac.uk). Details of how to request interactive sessions can be found above in the "Getting access to a compilation node" section.
* It is very important not to have additional unnecessary modules loaded when compiling applications, especially those relating to mpi. To avoid problems, it is best to start a compilation on a clean login, and to load only those modules that you know you will need.

$$$$$$$$$$$$$$$$$$$$$$$$$$
Specifying an MPI compiler
$$$$$$$$$$$$$$$$$$$$$$$$$$

The Platform MPI 'wrapper' compilers (mpicc, mpiCC, mpif90, mpif77 etc) are already in your default $PATH. These will use GNU compilers (gcc, gfortran etc) by default. If you load the Intel or PGI compiler modules, these 'wrapper' compiler scripts automatically detect and use the relevant underlying compiler.

The detection is done by environment variabls which are set by the intel/cce, intel/fce, intel, pgi modules when you load them. If you cannot use the modules for some reason, the variables are as follows:

* DEFAULT_CC and MPI_CC - your C compiler
* DEFAULT_CPP and MPI_CXX - your C++ compiler
* DEFAULT_F77 and MPI_F77, MPI_F90 - your Fortran or Fortran 90 compiler

These are already set by default if you are using GCC, so there is no need to do anything. To set a variable, use a command such as:

.. code-block:: console

  export MPI_CC=icc

$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
Compiling parallel code with Intel Compilers
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

As an example of code compilation, the following steps are those used on SCARF to compile the HPL Linpack benchmarking suite.

* module load intel
* Edit the Makefile. Note that mpicc is already in your PATH.
* make.

Assuming that the Makefile is correctly set up, this will successfully compile the program.
