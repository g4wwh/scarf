:orphan:

******
abaqus
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/abaqus_files.txt

**Description for abaqus:**

Abaqus is a Finite Element Analysis Program.


**Running abaqus:**

Abaqus is run on the command line using the 'run_abaqus' script :

.. code-block:: console

  [me@scarf]$ module load abaqus
  [me@scarf]$ run_abaqus

The run_abaqus script asks questions about the memory and cpu requirements of your job and its input file name, then compiles the file abaqus_v6.env and starts abaqus to submit the job to the SCARF batch queues.

Any 'abaqus' command line options documented in the Abaqus manual are also accepted by the run_abaqus command for example:

.. code-block:: console

  run_abaqus input=discbrake_3d_extrapara.inp job=discbrake_3d_extrapara cpus=16

which will run the job over 16 CPUs in the cluster using MPI.

To monitor your jobs progress use the normal LSF batch commands E.g.:

.. code-block:: console

  [me@scarf]$ bjobs

or

.. code-block:: console

  [me@scarf]$ bjobs -l

It is possible to run the GUI Abaqus/CAE or Abaqus/Viewer on SCARF from one of the cluster nodes, but these only have simple VGA cards and the s/w must be run with hardware acceleration turned off. This is not recommended but may be useful for simple cases. If more advanced graphics capability is required please contact the scarf helpdesk.

.. code-block:: console

  [me@scarf]$ bsub -Is bash
  Job is submitted to default queue < scarf >.
  < < Waiting for dispatch ...> >
  < < Starting on scarf-cnxx > >
  [me@cnxx]$ export DISPLAY=mydesktop.esc.rl.ac.uk:0
  [me@cnxx]$ module load abaqus
  [me@cnxx]$ run_abaqus cae -mesa

or

.. code-block:: console

  [me@cnxx]$ run_abaqus viewer -mesa

**Documentation for abaqus:**

The main documentation for Abaqus is available as html (or pdf on request to the helpdesk):

.. code-block:: console

  [me@scarf]$ mozilla file:///apps/abaqus/Documentation/docs/index.html

There is an example input file at /apps/abaqus/examples/std_inst.inp or get one of the supplied Abaqus examples using 'fetch' eg:

.. code-block:: console

  run_abaqus fetch input=discbrake_3d_extrapara job=discbrake_3d_extrapara
