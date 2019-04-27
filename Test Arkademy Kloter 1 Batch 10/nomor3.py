uk = int(input("Input Sisi :  "))

for a in range(uk - 2):
    if a % 2 != 0:
        val = (uk - 1) // 2
        print ("+" * val + "+" * (a) + "+" * val, end = "\n")

for b in range(uk + -2):
    if b % 2 != 0:
        val2 = (uk - 1) // 2
        print ("=" * val2 + "+" * (b) + "=" * val2 ,end = "\n")

for b in range(uk + -2):
    if b % 2 != 0:
        val2 = (uk - 1) // 2
        print ("=" * val2 + "+" * (b) + "=" * val2 ,end = "\n")

for b in range(uk + -2):
    if b % 2 != 0:
        val2 = (uk - 1) // 2
        print ("=" * val2 + "+" * (b) + "=" * val2 ,end = "\n")


for c in range(uk + -2):
	if c % 2 != 0:
		val3 = (uk - 1) //2
		print ("+" * val3 + "+" * (c) + "+" * val3 ,end = "\n")