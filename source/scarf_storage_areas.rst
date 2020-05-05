###################
SCARF Storage Areas
###################

Having gained access to SCARF, it is useful to take a moment to familiarise yourself with the general filesystem layout and procedures that are used on the cluster. These factors can directly influence your work on the cluster, including the speed of execution of your jobs, the amount of storage available to you, and whether your data will be recoverable in the event of a hardware failure.

Your /home directory
As in any other UNIX based operating system, you will automatically start your login session in your /home directory. This directory is exported over the whole cluster, and is visible from any of the nodes.

Each user has a file limit of 80GB in their home directory, which is enforced by the operating system. If you exceed this limit by a small amount for a brief period of time, but then delete enough data to bring it back into quota, then you will not have any problems. However, if you continue to exceed the limit, you will find that you become unable to add any more files, and that you will be unable to run any jobs. In this circumstance, the only option is to reduce the amount of space that you are using.

You can check your current usage and quota using e.g. the command

$ pan_quota
The home directories are backed up on a nightly basis.

The /work3 directories
The /work3 directories are intended to allow users access to very large amounts of storage, so that they are able to have access to things like large datasets or temporary files that would not fit in their home directories. When you register, you are not automatically given a /work directory. However you are free to create one under the directory corresponding to the group you have been placed in - use the command

groups
and it will be the first entry listed after the colon

The /work3 directory is exported over the whole cluster, and is visible from any of the nodes.

It is critically important to note that the data in the /work3 directories is NEVER backed up. As such, vital results or data should not be stored here. However, the data is stored in our Pansas file system which is capable of reconstructing files if one of the underlying storage units fails, so there is some measure of resiliency.

The /scratch, /fastscratch and /tmp directories
The /scratch directory is a temporary filespace that is shared across the whole cluster, to allow parallel jobs to access the same files over the course of their execution. This directory uses the Panasas high speed parallel file system. Please create a subdirectory eg /scratch/scarf011 and run your jobs there.

The /fastscratch is a temporary filespace that is shared across the SCARF K80 GPU nodes (cn2g13-29) accessible via the gpu and gpu-exclusive partition. This uses a GPFS high speed parallel file system. Please create a directory e.g. /fastscratch/scarf180 and run jobs from there. Please note that files in this area are not accessible from the head nodes, so please remeber to copy files out to your home directory or other globally mounted directory.

Finally, the /tmp directories are all local directories, one per node. These should be used to store temporary data for a job that only needs to be read by the local process. Although it is not distributed across the cluster, the benefit of using this space is somewhat increased performance compared to /scratch. Please make sure that your jobs delete any files in /tmp when they complete.

Data in these directories is temporary and may be arbitrarily removed at any point once your job has finished running. Do not use them to store important output.

Backups
Full backups of the SCARF filestore occur weekly, together with daily incremental dumps, on a two weekly cycle. The primary purpose of backups is to enable reconstruction of the filesystem in the event of total failure of the disks, but requests to recover user files that are deleted in error will be satisfied as soon as possible.

Please note that the only user data that is backed up is the contents of your /home directory.

Storage Summary
File system	Availability	Backups	Available size	Cleanup policy
Home directory
(/home/...)	Cluster wide	Weekly backup to tape
Daily Panasas snapshot, kept for 7 days	80 Gigabytes quota per user	No data will be deleted without consultation if the data is owned by an active user of SCARF.
Work directory
(/work3)	Cluster wide	No backups	100 Terabytes, though some groups have their own dedicated areas	No data will be deleted without consultation if the data is owned by an active user of SCARF.
Scratch directory
(/scratch)	Cluster wide	No backups	70 Terabytes shared across all users	Data deleted automatically if has not been accessed within 30 days
Fastscratch directory (/fastscratch)

gpu and gpu-exclusive partitions only	No backups	2 Petabytes shared across all users	Data deleted automatically if has not been accessed within 30 days
Temp directory
(/tmp)	Local to host	No backups	
At least 100 Gigabye(dependent on hardware generation)

Data may be deleted without consultation if no jobs for the owner are currently running on the affected host

 Inactive Users
SCARF performs an audit of users annually in October/November, if the audit determines that a user has become inactive then their home directory will be compressed, if on the next audit the user remains inactive the compressed home directory will be removed. Files owned by inactive users in the work directories will be removed. If the files are in use by multiple users it is the users' responsibility to ensure that they are owned by an active user of SCARF.
