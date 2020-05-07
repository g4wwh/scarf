#############
GPUs on SCARF
#############

**********************
Available GPU Hardware
**********************

12 nodes with dual K40 cards, restricted to the fbioctopus and fbioctopus-exclusive partitions and only usable by the CLF LSF Octopus group
17 nodes with dual K80 cards (4 K80 devices available on node), available in the gpu partition
GPUs on SLURM
SCARF has integrated the previously separate GPUs into the gpu and gpu-devel partitions, they now have the same base software payload as the standard SCARF nodes with a few minor differences to support the GPUs. GPU software is integrated into the module system. GPU specific versions of software can be seen on RHEL7 hosts by running

.. code-block:: console

  module load GPUmodules

This adds the GPU modules to the set of visible modules to retain clarity for users not interested in using GPUs.

Requesting GPUs
All users have access to GPUs, there is no need to request special access to the GPU partitions

GPUs are allocated via Slurm's GRES mechanism and are requested on a per node basis. This resource allocation is enforced by linux cgroups meaning that you will not be able to see GPUs you have not requested. For example to request an interactive job with 3 CPU cores and 2 GPUs, do:

.. code-block:: console

  srun -p gpu --pty -n 3 --gres=gpu:3 /bin/bash

Running nvidia-smi commands show 3 GPUs

.. code-block:: console

  nvidia-smi -L

  GPU 0: Tesla K80 (UUID: GPU-9fbdcd8e-91f1-5f28-c01b-11645602d26e)
  GPU 1: Tesla K80 (UUID: GPU-919735d8-df0e-efef-91e6-9dae7f3c74d5)
  GPU 2: Tesla K80 (UUID: GPU-340a466c-6089-429f-b6b7-e2aee435ba51)

But the system actually has 4 GPU devices, cgroups has limited access to the 3 requested

.. code-block:: console

  ls  /dev/nvidia?

  /dev/nvidia0  /dev/nvidia1  /dev/nvidia2  /dev/nvidia3

************
GPU Hardware
************

SCARF has 17 generally accessible GPU systems, each has 4 K80 GPUs, while the examples in this document use the --gres=gpu:X format, the model of the gpus is also requestable with --gres=gpu:k80:X, this is somewhat moot currently as while SCARF does have does different GPU models (k40 and k80) they are not available in the same partitions as the K40 systems are restricted to specific communities.

 

************
MPI and GPUs
************

Running MPI jobs using sbatch works similarly to simple interactive jobs, however some important things to note are, the GRES mechanism allocates per node therefore the parameter:

.. code-block:: console

  --gres=gpu:3

requires every host allocated to the job to have 3 available GPUs, also MPI ranks started by the same invocation of srun or mpirun -srun will use the same gpus as other ranks on the same host.

Running Interactive MPI jobs with GPUs is a bit more complex. Slurm jobs actually consist of a number of "steps" which may be running concurrently or not. Running srun or using mpirun -srun inside your job creates additional steps to the "zeroth" step. However, when starting an interactive job with a GPU resource allocation, all the GPUs will be allocated to the interactive step leaving nothing for any other step, therefore we need to use a different command, salloc. Salloc creates a resource allocation and then runs a command, (the default is to run srun with 1 task and no resources). For example if we ask for 5 tasks and 2 gpus:

.. code-block:: console

  $ salloc -p gpu -n 5 --gres=gpu:2
  salloc: Granted job allocation 33072
  salloc: Waiting for resource configuration

  salloc: Nodes cn2g26 are ready for job
  cpu-bind=MASK - cn2g26, task  0  0 [147301]: mask 0x707 set

Because the default command is to run srun, we end up on a SCARF gpu node, but with no devices we can see, as the gpu requested have been allocated to the job, but not this specific step

.. code-block:: console

  $ nvidia-smi

  No devices were found

However if we run an mpi command, we can see that GPUs have been allocated to the job, and that these tasks, all running on the same node, all see the same 2 GPUs as noted above.

.. code-block:: console

  [scarf180@cn2g26 ~]$ mpirun -srun nvidia-smi -L
  cpu-bind=MASK - cn2g26, task  0  0 [147440]: mask 0x707 set
  cpu-bind=MASK - cn2g26, task  1  1 [147441]: mask 0x707 set
  cpu-bind=MASK - cn2g26, task  2  2 [147442]: mask 0x707 set
  cpu-bind=MASK - cn2g26, task  3  3 [147443]: mask 0x707 set
  cpu-bind=MASK - cn2g26, task  4  4 [147444]: mask 0x707 set
  GPU 0: Tesla K80 (UUID: GPU-9fbdcd8e-91f1-5f28-c01b-11645602d26e)
  GPU 1: Tesla K80 (UUID: GPU-919735d8-df0e-efef-91e6-9dae7f3c74d5)
  GPU 0: Tesla K80 (UUID: GPU-9fbdcd8e-91f1-5f28-c01b-11645602d26e)
  GPU 1: Tesla K80 (UUID: GPU-919735d8-df0e-efef-91e6-9dae7f3c74d5)
  GPU 0: Tesla K80 (UUID: GPU-9fbdcd8e-91f1-5f28-c01b-11645602d26e)
  GPU 1: Tesla K80 (UUID: GPU-919735d8-df0e-efef-91e6-9dae7f3c74d5)
  GPU 0: Tesla K80 (UUID: GPU-9fbdcd8e-91f1-5f28-c01b-11645602d26e)
  GPU 1: Tesla K80 (UUID: GPU-919735d8-df0e-efef-91e6-9dae7f3c74d5)
  GPU 0: Tesla K80 (UUID: GPU-9fbdcd8e-91f1-5f28-c01b-11645602d26e)
  GPU 1: Tesla K80 (UUID: GPU-919735d8-df0e-efef-91e6-9dae7f3c74d5)
