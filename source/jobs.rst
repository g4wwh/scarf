===============
Submitting Jobs
===============

Jobs are submitted using the Slurm scheduler, which allocates cluster resources when they become available. Sheduler software organises the workload on the cluster such that all users get a fair share of the resources.

$$$$$$$$$$$$$$$$$$
General principles
$$$$$$$$$$$$$$$$$$

Before learning how to use Slurm, it is worthwhile becoming familiar with the basic principles of scheduler operation in order to get the best use out of the SCARF cluster. Scheduler software exists simply because the amount of jobs that users wish to run on cluster at any given time is usually greatly in excess of the amount of resources available, typically by a factor of 2 or 3.

$$$$$$$$$$$$$$
Hints and tips
$$$$$$$$$$$$$$

Several factors are taken into account during scheduling, such as job length and size, but the basic principles remain the same throughout - every user gets a fair share on the cluster based on the jobs that they have submitted. This leads to a small number of important principles:

* Do not try to second guess the scheduler! Submit all of your jobs when you want to run them and let it figure it out for you. You will get a fair share, and if you don't then we need to adjust the scheduler.
* Give the scheduler as much information as possible. There are a number of optional parameters (see later) such as job length, and if you put these in then you have an even better chance of getting your jobs run.
* It is very difficult for one user to monopolise the cluster, even if they submit thousands of jobs. The scheduler will still aim to give everyone else a fair share, so long as there are other jobs waiting to be run.

$$$$$$$$$$$$$$$$$$$$$
Example of scheduling
$$$$$$$$$$$$$$$$$$$$$

.. image:: /_static/images/scheduler.png

Three users (left column) have jobs in the queue (middle column) which are waiting to run on the cluster (right column). As the blue user's job finishes (middle row), all three users could potentially use the two job slots that become available. However, the orange and purple users already have jobs running, whereas the blue user does not, and as such it is the blue user's jobs that are run (bottom row).

$$$$$$$$$$$$$$$
Submitting jobs
$$$$$$$$$$$$$$$

Slurm has two commands for submitting jobs, srun runs a single command, whereas sbatch takes a script file which may contain multiple commands, this page will focus mainly on the sbatch command, but most of the parameters apply equally to both.

$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
Important job submission flags
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

There are many flags available for the sbatch command, some of which should be included in every job, if possible. These are summarised below:

.. code-block:: console

  -p scarf (which queue to run on)
  -n 36 (number of processors to run on)
  -t 2:30 (Acceptable time formats include  "minutes",  "minutes:seconds", "hours:minutes:seconds", "days-hours", "days-hours:minutes" and "days-hours:minutes:seconds"
  --exclusive (exclusive node use, to avoid sharing with other jobs) ONLY FOR PARALLEL JOBS!
  -o %j.log (name of file for output of job)
  -e %j.err (name of file for error log)

$$$$$$$$$$$$$$$$
Interactive Jobs
$$$$$$$$$$$$$$$$

Interactive jobs are launched using the srun command, they are very useful for test runs, or compiling code (which should not be done on the frontends)

To run an interactive job in the default queue use:

.. code-block:: console

  srun --pty /bin/bash

As noted above, many of the same parameters passed used with sbatch, can be used with srun, but note that the command that srun will execute (bash in the example above) must be the last item on the command line.

$$$$$$$$$$$$$$$$$$$$$$$$$$
Advanced resource requests
$$$$$$$$$$$$$$$$$$$$$$$$$$

Sometimes you may need to more closely specify how you want your job to run. This is done through adding additional options to your sbatch command.

$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
Choosing a sub-section of the cluster
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

As SCARF is a heterogenous cluster you may wish to limit your job to running on a particular set of nodes. This is done using the "-C" parameter, and follow the format:

.. code-block:: console

  -C scarf17

If you are able to use multiple sets of nodes, these can be specified like

.. code-block:: console

  -C "[scarf17|scarf18]"

This allows you to explicitly select which part of the cluster you wish to run on, should you want to use one specific set of hardware. Slurm knows the topology of the nodes so will not allocate nodes which are connected to different low latency fabrics. A summary of which hardware generations are available in which partitions is given below:

The node features available in SCARF partitions:

+-------------------------------+-------------------------------------------+
|Partitions                     |Features                                   |
+===============================+===========================================+
|scarf, devel, preemptable 	|scarf14, scarf15, scarf16, scarf17, scarf18|
+-------------------------------+-------------------------------------------+
|gpu, gpu-exclusive             |gpu14, gpu15, gpu17                        |
+-------------------------------+-------------------------------------------+
|fbicoctopus, fbioctopus-exclusi|gpu13                                      |
+-------------------------------+-------------------------------------------+
|fbioctopus-cpu                 |scarf14, scarf15                           |
+-------------------------------+-------------------------------------------+
|ibis                           |scarf16                                    |
+-------------------------------+-------------------------------------------+
|magnacarta                     |scarf16                                    |
+-------------------------------+-------------------------------------------+
|derevolutionibus               |scarf17                                    |
+-------------------------------+-------------------------------------------+

$$$$$$$$$$$$$$$$$
Task Distribution
$$$$$$$$$$$$$$$$$


Slurm uses cpu affinity to bind tasks to specific cpus, by default this is 1 task per cpu. However sometimes (for example OpenMP and multithreaded applications) it is desirable to have 1 task use multiple cpus, for this you use the -c parameter to specify the number of cores per task, for example:

.. code-block:: console

  -c 5

will allocate 5 cpus per task.

Another way to alter the default task distribution, is to have a specific number of tasks per node:

.. code-block:: console

  --ntasks-per-node=2

will allocate 2 tasks per node. This task distribution method can also be combined with the previous one
 
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
Requesting more memory per process
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

Partitions have a default memory allocation per cpu, see the table below, if a partition is not listed below it uses the global default of 4000MB memory per core.


Partitions with higher default memory limits:

+--------------------------------+---------------------------+
|Partitions                      | Memory Limit              |
+================================+===========================+
|gpu, gpu-exclusive              |   8000M                   |
+--------------------------------+---------------------------+
|ibis, magnacarta, fbioctopus-cpu|   6000M                   |
+--------------------------------+---------------------------+
|derevolutionibus                |   5000M                   |
+--------------------------------+---------------------------+

To request more memory per core, use the parameter below, note that this can lead to allocated nodes having cores sitting idle, therefore where possible use the -C option discussed in the previous section to limit your job to sets of nodes where your increased memory limit can be met.

.. code-block:: console

  --mem-per-cpu=5000M

The table below shows the maximum efficient memory per core for SCARF hardware generations - this is the value that each core can use without reducing memory available to other cores, so to request all the memory on SCARF18 nodes, we'd say:

.. code-block:: console

  --mem-per-cpu=7994 -C scarf18

Maximum efficient memory per cpu for SCARF hardware generations:

+-----------------------------+----------------+
|Hardware(feature)            | Memory Limit   |
+=============================+================+
|gpu13                        | 4000M          |
+-----------------------------+----------------+
|scarf17                      | 5000M          |
+-----------------------------+----------------+
|scarf15, scarf16             | 6000M          |
+-----------------------------+----------------+
|scarf18, scarf19             | 7994M          |
+-----------------------------+----------------+
|scarf14, gpu14, gpu15, gpu17 |           8000M|
+-----------------------------+----------------+

$$$$$$$$$$$$$$$$$$$$$
Running parallel jobs
$$$$$$$$$$$$$$$$$$$$$

Parallel jobs are submitted using a simple script, such as the one given below for the Linpack benchmarking suite:

.. code-block:: console

  #!/bin/bash
  #SBATCH -p scarf
  #SBATCH -n 36
  #SBATCH -t 30
  #SBATCH -o %J.log
  #SBATCH -e %J.err
  mpirun -srun /home/vol09/scarf009/hpl/bin/xhpl-gm

To submit the job, do not run the script, but rather use it as the last option to sbatch, like so:

.. code-block:: console

  sbatch my_script_name

$$$$$$$$$$$$$$$$$$$$
Monitoring your jobs
$$$$$$$$$$$$$$$$$$$$

Once you have submitted your job, there are several command line tools for monitoring their status, and the overall performance of the cluster. The main ones are:

|  sinfo
|  squeue

$$$$$$$$$$$$$$$$$
Killing your jobs
$$$$$$$$$$$$$$$$$

If you would like to kill your job, the command to do it is scancel with the job id of the job you want to kill:

.. code-block:: console

  scancel <jobid>

These all have really good man pages, but if you have any problems then please contact the `helpdesk <scarf_contact.html>`_.

