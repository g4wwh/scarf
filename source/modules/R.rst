:orphan:

******
R
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/R_files.txt

**Description for R:**

Description from `R project website <http://www.r-project.org/>`_: "R is a free software environment for statistical computing and graphics."

**Using R:**

Please run launch an interactive session:

.. code-block:: console

  $ bsub -Is /bin/bash
  Job <1223> is submitted to queue <scarf>.
  <<Waiting for dispatch ...>>
  <<Starting on cnXXX.scarf.rl.ac.uk>>

And then,

.. code-block:: console

  $ module load R/3.1.0
  $ R
  R version 3.1.0 (2014-04-10) -- "Spring Dance"
  Copyright (C) 2014 The R Foundation for Statistical Computing
  Platform: x86_64-unknown-linux-gnu (64-bit)
  R is free software and comes with ABSOLUTELY NO WARRANTY.
  You are welcome to redistribute it under certain conditions.
  Type 'license()' or 'licence()' for distribution details.
    Natural language support but running in an English locale
  R is a collaborative project with many contributors.
  Type 'contributors()' for more information and
  'citation()' on how to cite R or R packages in publications.
  Type 'demo()' for some demos, 'help()' for on-line help, or
  'help.start()' for an HTML browser interface to help.
  Type 'q()' to quit R.
  >

**Documentation for R:**

Manuals: `http://cran.r-project.org/manuals.html <http://cran.r-project.org/manuals.html>`_
