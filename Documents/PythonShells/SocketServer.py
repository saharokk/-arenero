import socket

def Fred(filename):
    f = open(filename)
    String =f.read()
    f.close()
    return String

infile =  'in.txt'

ctrlstr = Fred(infile)

sock = socket.socket()
sock.bind(('', 9090))
sock.listen(1)
conn, addr = sock.accept()

print ('connected:', addr)

while True:
    if ctrlstr != Fred(infile): 
        ctrlstr = Fred(infile)
        print(ctrlstr)
        conn.send(ctrlstr.encode())
            

