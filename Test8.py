rows = int(input("Enter number of rows : "))

#        i = rows; i > 0; i--
for i in range(rows, 0, -1):
    
    #      j = 0; j < rows - i; j++
    for j in range(0, rows - i, 1):
        print(" ", end=" ")
    
    #      k = 0; k < 2 * i - 1; k++    
    for k in range(0, 2 * i - 1, 1):
        print("*", end=" ")
    print()