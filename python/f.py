'''def greet():
    print("Hi there!")
print("At the top most level right now")
print("Inside",__name__)

x=int(input("enter a number:"))
y = int(input("enter another number:"))
def calcsum():
    sum = x+y
    return sum
print("Their sum is",calcsum())'''

def update(str1):
    length = len(str1)
    temp=""
    for i in range(0,length):
        if str1[i].islower():
            temp = temp + str1[i].upper()
        elif str1.isupper():
            temp=temp + str1[i].lower()
        elif str1[i].isdigit():
            temp =temp + str(int(str1[i])+1)
        else:
            temp= temp +'#'
    print(temp)

update("CBSE-2023 EXAMS")