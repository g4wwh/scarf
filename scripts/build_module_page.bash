#!/bin/bash

APPS_TEMPLATE=/sphinx/scarf/build/html/scarf_apps_template.html
APPS_PAGE=/sphinx/scarf/build/html/scarf_apps.html
MODLINKS=/sphinx/scarf/tmp/modlinks.html

cp -f $APPS_TEMPLATE $APPS_PAGE

/sphinx/scarf/scripts/find_modules.bash

/usr/bin/python3 /sphinx/scarf/scripts/modlinks.py > $MODLINKS

sed -i -e "/SCARF Modules:/r $MODLINKS" $APPS_PAGE 
