#!/bin/bash

#search for modules and generate RST files

for MODPATH in rhel7-modules rhel7-gpu-modules
do

    find /mnt/$MODPATH  -not -path '*/.*' -type f -print | sed -e "s!/mnt/$MODPATH/!!g" > ${MODPATH}.modlist

done
