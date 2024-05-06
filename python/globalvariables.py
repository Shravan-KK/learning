x = "awesome"
def myfunc():
    print("Python is " + x)
myfunc()
def myfunc():
    x = "fantastic"
    print("Python is " + x)
myfunc()
print("Python is ", x)    
def myfunc():
    global x
    x = "fun"
myfunc()
print("Python is",x)