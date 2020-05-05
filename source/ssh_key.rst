##################
Generating SSH Key
##################

Users can use access SCARF using an ssh key. This page explains how to create an ssh key, what part of it and in what format is needed by the site administrators to enable your access.

Generating ssh key
Generating ssh key on Linux or Mac OS X

Most Linux and OS X distributions come with a suitable ssh client and key generation tool

To generate a key run the command

ssh-keygen
this will ask a series of questions

Generating public/private rsa key pair.
Enter file in which to save the key (/home/me/.ssh/id_rsa): 
Enter passphrase (empty for no passphrase): 
Enter same passphrase again:
For the location, the default is reccomended as this location is automatically checked by the ssh client, so will not require any extra parameters to make it use the key

A strong passphrase is recommended as someone with access to your home directory will be able to access your accounts on remote systems using the ssh key if it is not password protected.

The system will then generate your key :

Your identification has been saved in /home/me/.ssh/id_rsa.
Your public key has been saved in /home/me/.ssh/id_rsa.pub.
The key fingerprint is:
d2:76:59:24:4e:ee:07:59:cd:0d:8b:ef:61:f9:05:83 me@mysystem
The site administrators need the contents of the id_rsa.pub file to enable access. Do not send the contents of the id_rsa file to anyone.

Generating an ssh key on Windows

The recommended ssh client on Windows is PuTTY. To use PuTTY with ssh keys, you will need three components which you can get from the PuTTY website

PuTTY
PuTTYgen
Pageant
To generate a key, run PuTTYgen. Once it has loaded press the Generate button and follow the instructions to generate a key. Once the key has been generated a textbox with the title “Public key for pasting into OpenSSH authorized_keys file:”, its the contents of this text box that the system adminstrators require to enable your account.

Enter a strong passphrase in the two passphrase boxes and the press the Save private key button to svae the key, Optionally also save the public key by pressing the Save public key button.

To use the ssh key run Pageant. It will appear in the system tray, at the far end of the Start bar. Right-click on it and select Add key from the menu, in the file chooser select the private key you saved above. You’ll now be prompted to enter the passphrase for the key after which it will be loaded in to Pageant. Now, when you run PuTTY the keys stored in Pageant will be used to try to authenticate with the host you are trying to log in to.
