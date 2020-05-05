#######################################################################
Browsing your SCARF home and work directory from your desktop or laptop
#######################################################################

SCARF runs a SAMBA server to make it easier for users to upload and download files between SCARF and their desktop or laptop.

As this service relies on the STFC authentication system, this service is only available to users with an STFC or Diamond federal id and from systems that are inside the STFC or Diamnd firewall or are connected to STFC via the VPN.

Note that deleting files in your SCARF account or work areas via this method will delete them permanently, the files will not be recoverable via the Recycle Bin or Trash Folder.

Accessing your files from a Microsoft Windows system
Open an explorer window
Either click on "Map Network Drive" in the ribbon or Tools -> Map Network Drive in the menu
In the new dialog that appears type \\files.scarf.rl.ac.uk in the Folder: line and click the Browse button
In this new dialog, expand the files.scarf.rl.ac.uk by clicking on the arrow, two folders should appear. One will be called Work3 corresponding to the SCARF /work3 directory, the other will correspond to your SCARF username and is your SCARF home directory. Select one and click Ok
In the original dialog box, click Finish, the directory you selected will now appear as new drive in explorer and you can interact with it as you would a hard disk attached to your computer.
Accessing your files from a Apple Mac OS X system
Open a new Finder window
Click on Go -> Connect to Server in the menu
In the dialog the appears type smb://files.scarf.rl.ac.uk in the Server field and press the Connect button
In the dialog that appears, select Registered User
In the name box enter your federal id prefixed with CLRC\, e.g. CLRC\dr35
Enter your federal id password in the password field and press Connect
You should now see a dialog box displaying the volumes available to mount. One will be your SCARF username and corresponds to your SCARF home directory, the other will be name Work3 and corresponds to the SCARF /work3 area. Select one and press OK
A new Finder window will appear showing the contents of the Volume you selected and can now be worked with normally
