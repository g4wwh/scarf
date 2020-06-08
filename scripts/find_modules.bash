#!/bin/bash

#search for modules and generate RST files

TMPDIR=/sphinx/scarf/tmp

rm ${TMPDIR}/module_names

MODS="/mnt/rhel7-modules /mnt/rhel7-gpu-modules"

#for MODPATH in ${MODS}
#do

    find $MODS  -not -path '*/.*' -type f -print | sed -e "s!/mnt/$MODPATH/!!g" > ${TMPDIR}/full.modlist

    cat ${TMPDIR}/full.modlist | sort | awk -F/ '{print $4}' | grep -v "modulefiles_include.tcl" | sort -u >> ${TMPDIR}/module_names

#done
