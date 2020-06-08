:orphan:

******
gaussian
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/gaussian_files.txt

**Description for gaussian:**

This description of Gaussian 09 comes from the `Gaussian.com web site. <http://www.gaussian.com/g_prod/g09.htm>`_ 

"Gaussian 09 is the latest version of the Gaussian® series of electronic structure programs, used by chemists, chemical engineers, biochemists, physicists and other scientists worldwide. Starting from the fundamental laws of quantum mechanics, Gaussian 09 predicts the energies, molecular structures, vibrational frequencies and molecular properties of molecules and reactions in a wide variety of chemical environments. Gaussian 09’s models can be applied to both stable species and compounds which are difficult or impossible to observe experimentally (e.g., short-lived intermediates and transition structures)."

<add description here>

**Using gaussian:**

<add gaussian usage info hereGaussian is run on the command line using an LSF job submission script eg:

.. code-block:: console

  #!/bin/bash
  #BSUB -n 8
  #BSUB -o %J.o
  #BSUB -e %J.e
  #BSUB -W 60
  #BSUB -x
  #BSUB -J MyJobName

  # G09
  module load Gaussian/g09_D01
  input=gaussian.in
  output=gaussian.out

  (time rung09_D01 < $input > $output) >&time.out

Submit using:

.. code-block:: console

  [me@scarf]$ bsub < jcl

Where jcl is the name of the job submission script file from above.
Please note that you must use "%NProcLinda" in the gaussian input deck and that it must be set to the same number of processors as in the "#BSUB -n" card.

To monitor your jobs progress use the normal LSF batch commands eg:

.. code-block:: console

  [me@scarf]$ bjobs

or

.. code-block:: console

  [me@scarf]$ bjobs -l

Gaussian scratch files are directed to the network shared directory /work/scratch/LSF_$LSF_JOBID unless the job is allocated to the processors of one slave host, in which case the scratch files are located locally at /tmp/LSF_$LSF_JOBID if there is >20Gbytes free on /tmp disc on that node.

>

**Documentation for gaussian:**


The online Gaussian manual can be found on the Gaussian web site here : `http://gaussian.com/gaussian16 <http://gaussian.com/gaussian16>`_

There are available example test input files found at **/apps/Gaussian/example**.

