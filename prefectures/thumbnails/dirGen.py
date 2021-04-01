import sys
import os

def read_file():
    for line in sys.stdin:
        line = line.strip("\n")
        if not (os.path.isdir(line)):
            os.mkdir(line)

        print(line)

read_file()
