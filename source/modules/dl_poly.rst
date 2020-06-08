:orphan:

******
dl_poly
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/dl_poly_files.txt

**Description for dl_poly:**

This desciption of DL_POLY comes from the `DL_POLY web site <http://www.stfc.ac.uk/SCD/research/app/ccg/software/DL_POLY/44516.aspx>`_.

"DL_POLY is a general purpose classical molecular dynamics (MD) simulation software developed at Daresbury Laboratory by I.T. Todorov and W. Smith.

Currently, only one version of the DL_POLY software is available under an STFC licence, DL_POLY_4, and with support provisioned to the UK's academia only. The former DL_POLY_2 version (authored by W. Smith, T.R. Forester and I.T. Todorov) is now transformed into `DL_POLY_CLASSIC <http://www.ccp5.ac.uk/DL_POLY_CLASSIC/>`_ (link opens in a new window) and available as open source under the `BSD <http://www.opensource.org/licenses/bsd-license.php>`_ (link opens in a new window) at `CCPForge <http://ccpforge.cse.rl.ac.uk/gf/project/dl_poly_classic/>`_ (link opens in a new window)."


**Running dl_poly:**

DL_POLY is run on the command line using an LSF job submission script eg:

.. code-block:: console

  #!/bin/bash
  #SBATCH -n 4
  #SBATCH -o %j.o
  #SBATCH -e %j.e
  #SBATCH -t 60:00:00
  #SBATCH --exclusive
  #SBATCH -J MyJobName

  cd mydlpolydir

  # Load DL_POLY4 module
  module load dl_poly/4.07-intel-17.0.2

  #
  # Submit the DL_POLY4 job using mpirun script
  mpirun -srun DLPOLY.Z

Submit using:

.. code-block:: console

  [prompt]$ sbatch jcl

Where jcl is the name of the job submission script file from above.

To monitor your jobs progress use the normal LSF batch commands E.g.:

[prompt]$ squeue
or

.. code-block:: console

  [prompt]$ squeue -l

**Documentation for dl_poly:**

There is DL_POLY tutorial that can be found on the dl_poly web site here : `<http://www.ccp5.ac.uk/DL_POLY/TUTORIAL/index.html <http://www.ccp5.ac.uk/DL_POLY/TUTORIAL/index.html>`_

