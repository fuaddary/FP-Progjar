# server.py
import socket

file = open('website/index.html', 'r')

def start_server(HOST, PORT):
    s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
    s.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR, 1)
    s.bind((HOST, PORT))
    s.listen(1)

    print('Serving HTTP on port %s ...' % PORT)
    while True:
        client_connection, client_address = s.accept()
        request = client_connection.recv(1024)
        print(request.decode('utf-8'))

        http_response = """\
http/1.1 200 OK

""" + file.read() + """
"""
        client_connection.sendall(bytes(http_response, 'utf-8'))
        client_connection.close()