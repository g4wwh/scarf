###################
SCARF Configuration
###################

The hardware for SCARF is purchased on a yearly basis, with each new addition added to the same set of computational job queues so as to give the users a seamless experience. This has the advantage of meaning that no large outlay of money is needed in a single year, as well as enabling us to get the best quality hardware for our money on each occasion.

The original cluster was a 256 core, 128 node cluster purchased in 2004, which has since been retired from service and completely replaced with the incremental expansions listed below.

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
Current Hardware Configuration
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

The SCARF computational cluster is comprised of a number of host groups which are listed in the table below (Scroll to see all of table).

+----------+--------+----------------+-----+-----+-----+-------------+------+-------+------+
|Host      |Slurm   |CPU             |Nodes|Cores|Total| Infiniband  |Memory|Tot Mem|Disks |
|Group     |Feature |Type/Freq       |     |Node |Cores|             |      |       |      |
+==========+========+================+=====+=====+=====+=============+======+=======+======+
|SCARF 19  | scarf19| Intel Gold 6126| 16  |  24 | 384 | EDR         |192 GB| 3072GB| 1x1TB|
|          |        |                |     |     |     |             |      |       |      |
+----------+--------+----------------+-----+-----+-----+-------------+------+-------+------+
|SCARF 18  | scarf18| Intel Gold 6126| 148 | 243 | 552 | EDR         |192 GB|28416GB| 1x1TB|
|          |        |                |     |     |     |             |      |       |      |
+----------+--------+----------------+-----+-----+-----+-------------+------+-------+------+
|SCARF 17  | scarf17|Intel E5-2650 v4| 201 |  24 |4824 | EDR         |128 GB| 5728GB| 1x1TB|
|          |        |@ 2.2GHz        |     |     |     |             |      |       |      |
+----------+--------+----------------+-----+-----+-----+-------------+------+-------+------+
|SCARF 16  | scarf16|Intel E5-2650 v3|  20 |  20 | 400 | FDR         |128 GB| 2560GB|1x500G|
|          |        |@ 2.3GHz        |     |     |     |             |      |       |      |
+----------+--------+----------------+-----+-----+-----+-------------+------+-------+------+
|SCARF 15  | scarf15|Intel E5-2650 v3|  68 |  20 |1360 | FDR         |128 GB| 8704GB|1x500G|
|          |        |@ 2.3GHz        |     |     |     |             |      |       |      |
+----------+--------+----------------+-----+-----+-----+-------------+------+-------+------+
|SCARF 14  | scarf14| Intel E2650 v2 |  56 |  16 | 896 | QDR         |128 GB| 7168GB|1x500G|
|          |        | @ 2.60GHz      |     |     |     |             |      |       |      |
+----------+--------+----------------+-----+-----+-----+-------------+------+-------+------+
|SCARF Compute Total|                | 577 |     |12376|             |      | 7950GB|      | 
+----------+--------+----------------+-----+-----+-----+-------------+------+-------+------+
|GPU 13	   | gpu13  |       TBD	     |  12 |   8 |  86 | FDR         | 64 GB|  768GB|1x600G|
|          |        |                |     |     |     |             |      |       |      |
+----------+--------+----------------+-----+-----+-----+-------------+------+-------+------+
|GPU 14	   | gpu14  |          TBD   |   8 |   8 |  64 | FDR         |128 GB| 1024GB|1x250G|
|          |        |                |     |     |     |             |      |       |      |
+----------+--------+----------------+-----+-----+-----+-------------+------+-------+------+

There is an image gallery with SCARF hardware images available `here <https://www.scarf.rl.ac.uk/gallery/hardware>`_
