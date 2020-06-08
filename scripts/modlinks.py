#!/usr/bin/python3

#
# Script to create an html table of the available modules that have been lited in the modlist file
#

import math

tmp_file = "/sphinx/scarf/tmp/module_names"
num_cols = 4
num_mods = len(open(tmp_file).readlines(  ))

modfile = open(tmp_file)
all_lines = modfile.readlines()

col_width = len((max(all_lines, key=len)))

column = 1

print ('<table style="width:60%">')
print ("<tr>")

for line in all_lines:

    print('<td><a href="https://www.scarf.rl.ac.uk/module/' + line.rstrip() + '">' + line.rstrip() + '</a></td>', end='')

    if column < num_cols:
        column += 1
    else:
        print ('</tr>')
        column = 1

print ("</tr>")
print ("</table>")
print ("<br><br>")


