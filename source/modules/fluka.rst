:orphan:

******
fluka
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/fluka_files.txt

**Description for fluka:**

FLUKA is a fully integrated particle physics MonteCarlo simulation package. It has many applications in high energy experimental physics and engineering, shielding, detector and telescope design, cosmic ray studies, dosimetry, medical physics and radio-biology. Flair is a graphical frontend for FLUKA

**Using fluka:**

Log on to ui3.scarf.rl.ac.uk with X forwarding enabled

Do

.. code-block:: console

  module load fluka/flair/2.3-0-gcc-4.8.5
  flair

The flair window should now appear. Under the run tab, in the job section the pull down menu will contain a Scarf option, select that and it will a submit as many jobs onto SCARF as you’ve asked for in the spawn column

The default submission script will submit to the SCARF queue using the default settings - it will use 1 core and run for up to 2 days. To change these settings take a copy of the file

.. code-block:: console

  /apps/flair/2.3-0/submitscript/flukasub2.3_slurm

into your own area and change the slurm parameters, e.g. to use the ibis partition if you have access change it to

.. code-block:: console

  -p ibis

To run for the maximum duration of the scarf queue :

.. code-block:: console

  -t 168:00:00

You'll need to add the path to your new script into your local flair.ini file in the .flair directory in your home directory under the [Batch] section, e.g.

.. code-block:: console

  [Batch]
  *SCARF2 = /path/to/my/script/flukasub2.3_slurm

Then restart flair and it should appear in the dropdown in the Job section of the Run menu.

(The * will make it appear near the top of the list, and if your label (SCARF2 in the example above) would come alphabetically before SCARF it will be the preselected entry)

**Documentation for fluka:**

For help in using FLUKA, please see the `FLUKA website. <http://www.fluka.org/>`_

