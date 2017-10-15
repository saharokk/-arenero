import socket

def Fred(filename):
    f = open(filename)
    String =f.readline(6)+'\n'
    f.close()
    return String

infile =  'out.txt'

ctrlstr = Fred(infile)

sock = socket.socket()
sock.bind(('', 9090))
sock.listen(1)
conn, addr = sock.accept()

print ('connected:', addr)

while True:
    nctrlstr = Fred(infile)
    if ctrlstr != nctrlstr and nctrlstr[0]=='%': 
        ctrlstr = Fred(infile)
 #       print(ctrlstr)
        conn.send(ctrlstr.encode())
            

