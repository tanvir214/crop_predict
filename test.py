#!C:/Users/Tanvir/AppData/Local/Programs/Python/Python39/python.exe

import sys
print ('Number of arguments:', len(sys.argv), 'arguments.')
print ('Argument List:', str(sys.argv))

sys.path.append("c:/users/tanvir/appdata/local/programs/python/python39/Lib/site-packages");
import pickle
import numpy

data=numpy.array([[sys.argv[1],sys.argv[2],sys.argv[3],sys.argv[4],sys.argv[5],sys.argv[6],sys.argv[7],sys.argv[8],sys.argv[9],sys.argv[10],sys.argv[11],sys.argv[12]]])

with open('Model.pkl','rb') as f:
    fm = pickle.load(f)

pred = fm.predict(data)

print(pred)

