
file = open("joe.db","r")
finalstring = ""

'''
loc  = "";
path = "";
year =  0;
desc  = "";
count = "";
state = "";
'''

for line in file:
	line = line.strip()
	finalstring += '{ "path": "' + line + '", "loc": "", "year": 0, "desc": "", "count": "", "state": ""}\n'

file.close()
file = open ("joe.db","w")

file.write(finalstring)
