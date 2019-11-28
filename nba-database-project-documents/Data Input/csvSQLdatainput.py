'''
Created by Jeremy Tandjung
03/06/2019
'''

import csv

'''
INPUT: The csv filename
PURPOSE: Converts a csv file to a MySQL script equivalent for the data values in
inserting data to table
'''
def csvSQLinput(fileName):
    

    file = open(fileName, mode = 'r')
    csv_reader = csv.reader(file)

    outName = fileName.split('.')[0] + '_sql_input.txt'
    outfile = open(outName, 'w')

    '''
    Helper method to determine if the input is an int or not
    '''
    def isinteger(a):
        try:
            int(a)
            return True

        except ValueError:
            return False

    def isfloat(a):
        try:
            float(a)
            return True

        except ValueError:
            return False
    
    #Ignore header for csv
    csv_reader.__next__()

    count = 1
    #Go through each line
    for line in csv_reader:
        
        #Go through each value
        for i in range(len(line)):
            #Open each line with a '('
            if i == 0:
                outfile.write("\t(")

            
            if i is not (len(line) - 1):        
                if (isinteger(line[i])):            #if value is int
                    outfile.write(line[i] + ', ')
                else:                               #if value is non - int
                    if line[i] == 'NULL':           #for NULL values
                        outfile.write(line[i] + ", ")
                    else:
                        outfile.write("'" + line[i] + "', ")

            if(i == len(line) - 1):
                if (isinteger(line[i]) and isfloat(line[i])):            #if value is int
                    outfile.write(line[i] + ')')
                else:                               #if value is non - int
                    if line[i] == 'NULL':           #for NULL values
                        outfile.write(line[i] + ")")
                    else:
                        outfile.write("'" + line[i] + "')")

                #This doesn't work (Goes straight to else)
                if (i == csv_reader.line_num): #if line is last line
                    outfile.write(";")
                else:
                    outfile.write(",")
                outfile.write("\n")

    outfile.close()

def csvFloat(fileName):
    

    file = open(fileName, mode = 'r')
    csv_reader = csv.reader(file)

    outName = fileName.split('.')[0] + '_sql_input.txt'
    outfile = open(outName, 'w')

    '''
    Helper method to determine if the input is an int or not
    '''
    def isinteger(a):
        try:
            int(a)
            return True

        except ValueError:
            return False

    def isfloat(a):
        try:
            float(a)
            return True

        except ValueError:
            return False
    
    #Ignore header for csv
    csv_reader.__next__()

    count = 1
    #Go through each line
    for line in csv_reader:
        
        #Go through each value
        for i in range(len(line)):
            #Open each line with a '('
            if i == 0:
                outfile.write("\t(")

            
            
            if i is not (len(line) - 1):        
                outfile.write(line[i] + ', ')

            if(i == len(line) - 1):
                outfile.write(line[i] + ')')

                #This doesn't work (Goes straight to else)
                if (i == csv_reader.line_num): #if line is last line
                    outfile.write(";")
                else:
                    outfile.write(",")
                outfile.write("\n")

    outfile.close()         
