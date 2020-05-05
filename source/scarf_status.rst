######
STATUS
######

************
Availability
************

SCARF is available at all times, with the exception of essential planned maintenance to hardware or software and unexpected failures. Any problems that occour out of hours are dealt with the next working day, and hardware support is undertaken by the vendor on an agreed contract. Please note that Wednesday 8:30am -10:00am should always be considered as an 'at risk' period, as this is when essential maintenance is sheduled to occur. Reliability and performance statistics are available to all users via Ganglia results.

******
Status
******

We are working to reproduce the graphical view of SCARF that was previously generated from LSF data. In the interim you can determine which can Scarf nodes are available in particular partitions by running

**sinfo -p <partitionname>**

Valid partition names at time of writing are:

* scarf

* preemptable

* devel

* derevolutionibus

* fbioctopus

* fbioctopus-cpu

* fbioctopus-exclusive

* gpu

* gpu-exclusive

* ibis

* magnacarta

* numanlys-cpu

* numanlys-gpu
 

