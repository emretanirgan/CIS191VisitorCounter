def getVis():
	file = open('visitors.txt')
	viscount = file.read()
	file.close()
	print viscount
	return viscount

getVis()
