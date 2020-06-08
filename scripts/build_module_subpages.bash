#!/bin/bash

SUBPAGE_TEMPLATE=/sphinx/scarf/build/html/scarf_apps_subpage_template.html
SUBPAGE_ROOT=/sphinx/scarf/build/html
TMP_DIR=/sphinx/scarf/tmp
MODULE_NAMES=${TMP_DIR}/module_names


for MODULE in `cat ${MODULE_NAMES}`
do
    cp ${SUBPAGE_TEMPLATE} ${SUBPAGE_ROOT}/${MODULE}.html

    cat ${TMP_DIR}/full.modlist | cut -d'/' -f4- | grep "^${MODULE}" | sort > ${TMP_DIR}/${MODULE}_files.txt

    sed -i -e 's/^/| /g' ${TMP_DIR}/${MODULE}_files.txt
#    echo "<br><br>" >> ${TMP_DIR}/${MODULE}_files.txt

#    sed -i -e "/RHEL7 Modules:/r ${TMP_DIR}/${MODULE}_files.txt" ${SUBPAGE_ROOT}/${MODULE}.html 
done
