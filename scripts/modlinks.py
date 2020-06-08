#!/usr/bin/python3

#
# Script to create an html table of the available modules that have been lited in the modlist file
#

import math

url = "https://phil1.esc.rl.ac.uk"
tmp_file = "/sphinx/scarf/tmp/module_names"
num_cols = 4
num_mods = len(open(tmp_file).readlines(  ))

modfile = open(tmp_file)
all_modules = modfile.readlines()

col_width = len((max(all_modules, key=len)))

column = 1

print ('<table style="width:60%">')
print ("<tr>")

for module in all_modules:

#    print('<td><a href="https://www.scarf.rl.ac.uk/module/' + module.rstrip() + '">' + module.rstrip() + '</a></td>', end='')
    print('<td><a href="' + url + '/modules/' + module.rstrip() + '.html">' + module.rstrip() + '</a></td>', end='')

    if column < num_cols:
        column += 1
    else:
        print ('</tr>')
        column = 1

print ("</tr>")
print ("</table>")
print ("<br><br>")


