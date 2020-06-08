:orphan:

******
matlab
******

.. include:: ../scarf_apps_subpage_template.rst

**RHEL7 Modules:**

.. include:: ../../tmp/matlab_files.txt

**Description for matlab:**

"The MATLAB Compiler Runtime (MCR) is a standalone set of shared libraries that enables the execution of compiled MATLAB applications or components on computers that do not have MATLAB installed." from Mathworks website.

"MATLAB® is a high-level language and interactive environment for numerical computation, visualization, and programming." from Mathworks website.

**Using matlab MCR:**

MCR stands for Matlab Compiler Runtime is a set of standalone libraries that enables you to run Matlab compiled code without having the need to Matlab.

To use Matlab MCR on SCARF, please make sure that you have already compiled your code using Matlab Compiler. To run the code you can use the following jobscript:

.. code-block:: console

  #!/bin/bash
  #BSUB -n 4
  #BSUB -o %J.o
  #BSUB -e %J.e
  #BSUB -x

  module load matlab/mcr/8.2
  ./YourCompiledMatlabCode

**Running Matlab**

Matlab is run on the command line using an LSF job submission script Eg :

.. code-block:: console

  #!/bin/bash
  #BSUB -n 4
  #BSUB -o %J.o
  #BSUB -e %J.e
  #BSUB -x

  module load matlab/R2013b/8.2
  matlab -r matlabcode.m

Submit using:

.. code-block:: console

  [me@scarf]$ bsub < jcl

Where jcl is the name of the job submission script file from above. When changing the number of processors to run on, be sure to change 'bsub -n' as well as 'mpirun.lsf -np'

To monitor your jobs progress use the normal LSF batch commands eg:

.. code-block:: console

  [me@scarf]$ bjobs

or

.. code-block:: console

  [me@scarf]$ bjobs -l

You can also run Matlab GUI by first following instructions available here and then by simply running matlab binary:

.. code-block:: console

  $ matlab

If you want to run commandline version (without GUI) run:

.. code-block:: console

  $ matlab -nodisplay

**Documentation for matlab:**

`http://www.mathworks.co.uk/help/matlab/ <http://www.mathworks.co.uk/help/matlab/>`_

`http://www.mathworks.co.uk/help/compiler/working-with-the-mcr.html <http://www.mathworks.co.uk/help/compiler/working-with-the-mcr.html>`_
