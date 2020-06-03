###############
Access to SCARF
###############

Access to the cluster is different depending on whether you are a member of staff at STFC or an external collaborator.

$$$$$$$$$$$$$$$$$$$$
STFC & Diamond staff
$$$$$$$$$$$$$$$$$$$$

<<<<<<< HEAD
Simply apply for an account using the `application form <registration.html>`_. Nothing else is required.
=======
Simply apply for an account using the `application form <registration>`_. Nothing else is required.
>>>>>>> a38760091299894572d9d174db02e54580e9ef1e

$$$$$$$$$$$$$$
Non-STFC staff
$$$$$$$$$$$$$$

If you are not a member of STFC or Diamond staff you will have to tell us the name of your STFC or Diamond Collaborator and `provide an ssh public key <ssh_key>`_ on the application form.

$$$$$$$$$$$$$$$$$$$$$$$
Applying for an account
$$$$$$$$$$$$$$$$$$$$$$$

<<<<<<< HEAD
SCARF is only available for scientific and academic research purposes by STFC and Diamond staff and their collaborators. As such, in order to authorise you for access we need you to fill out an `application form <registration.html>`_.
=======
SCARF is only available for scientific and academic research purposes by STFC and Diamond staff and their collaborators. As such, in order to authorise you for access we need you to fill out an `application form <registration>`_.
>>>>>>> a38760091299894572d9d174db02e54580e9ef1e

$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$
Logging in as STFC or Diamond Staff
$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$

STFC runs a Single Sign On service which means that staff are able to log into SCARF using their Federal ID and password. This can be done using most SSH clients which are commonly available, including:

* Putty & WinSCP (Windows)
* Command line SSH (Linux and MacOS)
* Logging in as non staff

You will need to ensure that your ssh agent is running and has your key loaded before trying to ssh into SCARF.

For Windows, the agent supplied with with Putty ssh client is call Pageant and, if running it should appear in the icon bar on the Windows taskbar. Double click on it and it should bring up a list of the loaded keys

For Linux or Mac OS X, open a terminal and run the command ssh-add -L, this will list the ssh keys loaded in to the ssh agent

$$$$$$$$$$$
Login Hosts
$$$$$$$$$$$

SCARF provides three login hosts:

| scarf.rl.ac.uk
| ui3.scarf.rl.ac.uk
| ui4.scarf.rl.ac.uk

scarf.rl.ac.uk is a highly available Virtual machine, but does not have a large amount of CPU power. It should not be used for running heavy workloads - they should either be submitted to the cluster as `interactive jobs <jobs.html>`_. ui3 and ui4 are more suitable for more intensive applications, but be aware that we apply limits to the amount of CPU and Memory that an individual user is able to access on the login nodes as they are shared between all users and heavy users can disrupt other SCARF users.

Note: scarf.rl.ac.uk and ui3.scarf.rl.ac.uk currently support user logins on port 2222. This is a historical artifact and is no longer required or supported, port 22 is the standard, default port. ui4 does not support logins on port 2222.

If you have problems
Before trying to access SCARF, please check the items on this list, as it helps to eliminate a lot of the common problems.

Check that your machine is correctly registered with its DNS server.

$$$$$$$
WINDOWS
$$$$$$$

* Click "Start", "Run" and then type "cmd" and press enter.
* Go into the new DOS window, and type "ipconfig /all".
* Make a note of the Hostname, Primary DNS Suffix and IP Address.
* Type "nslookup _my_ip_address_" where _my_ip_address_ is the address form the previous step.
* Check that the Name returned by this command is the same as the one you get by combining the Hostname and Primary DNS Suffix. If it is not, you need to contact your network administrator.
* Type "nslookup _my_hostname_" where _my_hostname_ is the name from the third step.
* Check that the Address returned by this command is the same as the one you get from the third step. If it is not, you need to contact your network administrator.

$$$$$$$$$$$$$$$$
LINUX/UNIX/MACOS
$$$$$$$$$$$$$$$$

* Open a new shell window as root or the superuser.
* Type hostname, and make a note of the result.
* Type ifconfig, and make a note of the inet addr for your main network connection (usually eth0).
* Type nslookup _my_ip_address_ where _my_ip_address_ is the address form the previous step.
* Check that the Name returned by this command is the same as the one from the second step. If it is not, you need to contact your network administrator.
* Check that the Address returned by this command is the same as the one from the third step. If it is not, you need to contact your network administrator.
* Check the system can connect to SCARF

$$$$$$$
WINDOWS
$$$$$$$

* Click "Start", "Run" and then type "cmd" and press enter.
* Go into the new DOS window, and type "telnet 130.246.142.230 22".
* If you do not get an OpenSSL message, there is a problem with your network connection to SCARF.
* Press "Ctrl-]", "q", "Enter" to quit.

$$$$$$$$$$$$$$$$$
LINUX/UNIX/MACOSX
$$$$$$$$$$$$$$$$$

* Open a new shell window.

* Type telnet 130.246.142.230 22.

* If you do not get an OpenSSL message, there is a problem with your network connection to SCARF.

* Press "Ctrl-]", "Enter", "q", "Enter" to quit.
