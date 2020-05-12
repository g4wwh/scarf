*****************
Advanced Features
*****************

Advanced features of SCARF that most users may not need to know about

$$$$$$$$$$$$$$$
Disabling turbo
$$$$$$$$$$$$$$$

By default we assume user's wish their codes to go as fast as possible, so we have turbo mode enabled - this means that if not all cores on a host are in use, the active cores may go faster. However if you are benchmarking then a consistent CPU speed is necessary to compare runs, therefore in particular circumstances we allow turbo mode to be disabled.

Disable Turbo mode by submitting your jobs to the devel partition, then in your job, running:

.. code-block:: console

  sudo /usr/local/bin/enable_no_turbo.sh

Renable Turbo mode by running at the end of your job by running:

.. code-block:: console

  sudo /usr/local/bin/disable_no_turbo.sh

See the current state of the no_turbo setting by running:

.. code-block:: console

  /usr/local/bin/show_no_turbo.sh

0 means turbo is enabled, 1 means turbo is disabled.

If running across multiple nodes, then you can use srun to run the commands across all nodes like:

.. code-block:: console

  srun -N ${SLURM_NNODES} -n ${SLURM_NNODES} sudo /usr/local/bin/enable_no_turbo.sh

 
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
Controlling the environment passed to the job
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

By default slurm will pass all environment variables through to your job, this can be controlled with the **--export** option, which either takes the keywords **ALL** or **NONE** or a list of the environment variables to pass to the job. Note that if the export option is set it may pass through to other slurm commands - e.g **srun** can be used to launch mpi tasks, so you should ensure that if you have made changes to the environment, for example loading modules, that these will not be lost by giving **--export=ALL** to subseqent srun calls.


