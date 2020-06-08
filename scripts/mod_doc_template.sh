MODNAME=$1

echo ":orphan:"
echo
echo "******"
echo "$MODNAME"
echo "******"
echo
echo ".. include:: ../scarf_apps_subpage_template.rst"
echo
echo "**RHEL7 Modules:**"
echo
echo ".. include:: ../../tmp/${MODNAME}_files.txt"
echo
echo "**Description for ${MODNAME}:**"
echo
echo "<add description here>"
echo
echo "**Using ${MODNAME}:**"
echo
echo "<add ${MODNAME} usage info here>"
echo
echo "**Documentation for ${MODNAME}:**"
echo
echo "<add URL to ${MODNAME} docs here>"
echo
echo "\`${MODNAME} <https://www.${MODNAME}.org/>\`_"
