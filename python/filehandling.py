myfile=open("filehandling.txt", "r")
print(myfile.read(15))
print(myfile.read(20))
myfile.close()
myfile=open("filehandling.txt","r")
print(myfile.readline())
print(myfile.readline())
print(myfile.readline())
myfile.close()
myfile=open("filehandling.txt","r")
for x in myfile:
    print(x)