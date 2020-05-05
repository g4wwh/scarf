##################################
Understanding the SCARF partitions
##################################

As SCARF has grown over the years it has evolved into a heterogeneous cluster and not a single multi-node machine. As a result, in order to get the best results, it is important to review the resources available on it and to understand how the partitions give access to different parts of the cluster. The scarf partition is the default partition, other partitions can be selected using the -p option to srun and sbatch.

 

SCARF Partitions
Partition	Accessible by	Hardware	Runlimit	Other Notes
scarf	All Users	All non-gpu equipped generally accessible hardware	2 days by default, up to 7 days	Default Partition
devel	All Users	All non-gpu equipped generally accessible hardware	2 hours by default, up to 12 hours	Enforces exclusive node access
preemptable	All Users	All Hardware	2 days by default, up to 7 days	Jobs will be killed if nodes are needed to start jobs in other partitions
gpu	All Users	Generally  accessible GPU nodes	2 days by default, up to 7 days	Please see our page on GPUs for details as to how to request GPUs
gpu-exclusive	All Users	Generally  accessible GPU nodes	2 days by default, up to 7 days	
Please see our page on GPUs for details as to how to request GPUs

Enforces exclusive node access

ibis	ibis	10x SCARF16 nodes	2 days by default, up to 7 days	 
derevolutionibus	clfppg, clfextern	67x SCARF17 nodes	2 days by default, up to 7 days	Limited to 800 CPUs per user
magnacarta	clfppg	24x SCARF16 nodes	2 days by default, up to 7 days	 
fbioctopus	clfoctopus	12 K40 equipped GPU nodes	2 days by default, up to 7 days	
Please see our page on GPUs for details as to how to request GPUs

fbioctopus-exclusive	clfoctopus	12 K40 equipped GPU nodes	2 days by default, up to 7 days	 
Please see our page on GPUs for details as to how to request GPUs

Enforces exclusive node access

numanlys-cpu	scdcompmaths	cn255	2 days by default, up to 7 days	 
numanlys-gpu	scdcompmaths	cn1g01	2 days by default, up to 7 days	
Please see our page on GPUs for details as to how to request GPUs

Enforces exclusive node access

In the accessible by column, where the entries are not 'All Users' they refer to Slurm Accounts, you can see which accounts you are a member of by running the following command while logged into a SCARF node

sacctmgr show assoc where format=account,user user=$USER
