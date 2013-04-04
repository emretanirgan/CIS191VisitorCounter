
file = open('visitors.txt')
viscount = (file.readline().split())
viscount = int(viscount[0])
viscount+=1
file = open('visitors.txt', "w")
file.write(str(viscount))
file.close()

