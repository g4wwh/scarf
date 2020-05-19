********************************
Launching GUI based applications
********************************

By default users will not be able to run any GUI based applications. If you would like to run these applications please follow the instructions  below.

If you do not have one you will need to `generate an ssh key <ssh_key>`_.

$$$$$$$$$$$
First steps
$$$$$$$$$$$

* When logged in to SCARF run **$ whoami**, which will give you your SCARF username. Please note it as this will be used to login.
* Now create a directory named **.ssh** using **mkdir ~/.ssh** (if doesn't exists already) and create a file named **authorized_keys** file under the **.ssh** directory.


$$$$$$$$$$
On Windows
$$$$$$$$$$

* Paste the text copied from **'Public key for pasting into OpenSSH authorized_keys file'** text area from Puttygen into the **authorized_keys** file. Note that the text wil begin with either **ssh-rsa** or **ssh-dsa**.
* Launch Xserver on your desktop to capture the GUI sent back.
* Now login to SCARF on port 22 with your scarf username which begins with **scarfXXX** (**XXX** is three digits) using the generated private key with X11 and agent forwarding.
*     To enable Agent forwarding on Putty, go to **Connection-> SSH-> Auth** and then check **'Allow agent forwarding box'**.
*     To enable X11 forwarding on Putty, go to **Connection-> SSH->X11** and then check **'Enable X11 forwarding'**.

$$$$$$$$
On Linux
$$$$$$$$

* Either paste the contents of your public key file **id_rsa.pub** or **id_dsa.pub** into the **authorized_keys** file or you can also copy using scp command:

.. code-block:: console

  $scp ~/.ssh/id_rsa.pub <yourfederalid>@scarf.rl.ac.uk:~/.ssh/ 

or 

.. code-block:: console

  $scp ~/.ssh/id_dsa.pub <yourfederalid>@scarf.rl.ac.uk:~/.ssh/ 

depending on your key type.

* Now login to SCARF on port 22 with your scarf username which begins with **scarfXXX** (**XXX** is three digits) using the generated private key with X11 and agent forwarding **'ssh scarfXXX@scarf.rl.ac.uk -AYX'**.

After successfully login, now launch an interactive job with X and Agent forwarding using 

.. code-block:: console

  $srun -x11 --pty /bin/bash

This will land you onto a compute node and then you can launch GUI of any application.

If you run into any problems or if these instructions aren't clear enough, please contact the `helpdesk <scarf_contact>`_.

