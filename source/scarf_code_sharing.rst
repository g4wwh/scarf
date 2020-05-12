**********************************
Sharing your code with other users
**********************************

Having successfully compiled, tested and validated your code on SCARF, the next step is usually to make it available to other users, either specifically within your own group, or in general.

All users are asked not to run applications out of another user's home directory. In order to get around the problems that this tends to cause, a system of user accessible /apps/contrib directories have been provided, which allow all users to share their code in a structured manner.

$$$$$$$$
Overview
$$$$$$$$

* Make your binaries available
* Add a module file
* Create a run script
* Access Control
* Add new versions

$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
Making your binaries available
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

Once you have a stable binary version of your code which you would like to make available to other users, please contact us asking for a directory under the **/apps/contrib** hierarchy. Once that subdirectory has been set up, you can put a copy of your code inside it. You are free to set any permissions you like on the directory and files, and new groups can easily be created to give you total control over who can use your code.
Adding a module file

To make it easier for other to use, you can create a module file for your application. If you wish to do this, please let usk know so that we can create the appropriate directory **/apps/modulefiles/contrib/my_application**, you can then create a module file, named on the version number, inside it. The module file can be used to set any environment variables needed and add entries to path variables. It can even automatically load any dependent modules.
Creating a run script

Next, create a run script for your program in **/apps/contrib/<application>/bin/**, named after the main binary for your program. This script should be all that is needed to launch your code, and will typically load the modules necessary to make it work, set any environment variables, and finally run the executable and pass any arguments.
Access control

Lastly, if you want to make it available to people who are not in your group, you should let us know, we can set up additional groups and work out the process for how to add new people
Adding new versions

Having made a working program available, it should never be changed. If you would like to add newer versions, simply create a new directory, new module file, and new run script. The old run script should be renamed to **my_program-1.0**, or such, so that users who wish to make use of the older version can still do so.

