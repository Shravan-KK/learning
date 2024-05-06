print("Multiple values to multiple variables")
x, y, z = "Orange" , "Banana" , "Cherry"
print(x)
print(y)
print(z)
print("One value to multiple variables")
x = y = z = "Potato"
print(x)
print(y)
print(z)
print("Unpack a collection")
fruits = ["Orange" , "Banana", "Cherry"]
x,  y, z = fruits
print(x)
print(y)
print(z)