import socket, select, sys, os, subprocess
import ConfigParser
from pathlib import Path
from time import sleep
import json
import re
import operator


config = ConfigParser.RawConfigParser()   
config.read('httpserver.conf')

result = {}

server_address = ('0.0.0.0',config.getint('server','port'))
server_socket = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server_socket.setsockopt(socket.SOL_SOCKET, socket.SO_REUSEADDR,1)
server_socket.bind(server_address)
server_socket.listen(5)

input_socket = [server_socket]


# The function that receives the request
def findcookie(request_header):
    for elements in request_header:
    	if "Cookie" in elements:
			m = re.search('name=(.+?)>', elements)
			if m:
			    found = m.group(1)
			    return found

def kunci (post_string):
	post_string = post_string.split("&")
	score = 0
	for elements in post_string:
		if elements == "question-1-answers=C":
			score += 20
		elif elements == "question-2-answers=C":
			score += 20
		elif elements == "question-3-answers=C":
			score += 20
		elif elements == "question-4-answers=C":
			score += 20
		elif elements == "question-5-answers=C":
			score += 20
	return score

def save_json(result):
	sorted_result = {}
	for key, value in sorted(result.iteritems(), key=lambda (k,v): (v,k)):
		sorted_result[key] = value
	with open('result.json', 'w') as outfile:
	    json.dump(sorted_result, outfile)

print 'Serve at %s port %s'%server_address
try:
	while True:
		read_ready, write_ready, exception = select.select(input_socket, [], [])
		for sock in read_ready:
			if sock == server_socket:
				client_socket, client_address = server_socket.accept()
				input_socket.append(client_socket)
			else:
				data = sock.recv(4096)
				if data:
					
					grep_host = subprocess.Popen(["grep", 'Host'], shell=False, stdin=subprocess.PIPE, stdout=subprocess.PIPE)
					grep_filtered, _ = grep_host.communicate(data)

					ip = grep_filtered[6:]

					request_header = data.split('\r\n')
					request_file = request_header[0].split()[1]
					
					print "------ REQUEST HEADER -------"
					for elements in request_header:
						print elements

					if "GET" in request_header[0]:
						
						file = Path(request_file[1:])
						print "------ GET RESPONSE ------"
						
						if request_file == '/index.html' or request_file == '/':
							f = open('index.html','r')
							response_data = f.read()
							f.close()
							content_length = len(response_data)
							response_header = 'HTTP/1.1 200 OK\r\nContent-Type: text/html; charset=UTF-8\r\nContent-Length:' +str(content_length) + '\r\n\r\n'
						
						elif request_file.endswith('.html') and file.is_file() :
							request_file = request_file[1:]
							f = open(request_file,'r')
							response_data = f.read()
							f.close()
							content_length = len(response_data)
							response_header = 'HTTP/1.1 200 OK\r\nContent-Type: text/html; charset=UTF-8\r\nContent-Length:' +str(content_length) + '\r\n\r\n'

						elif request_file.endswith('.css') and file.is_file() :
							request_file = request_file[1:]
							f = open(request_file,'r')
							response_data = f.read()
							f.close()
							content_length = len(response_data)
							response_header = 'HTTP/1.1 200 OK\r\nContent-Type: text/css; charset=UTF-8\r\nContent-Length:' +str(content_length) + '\r\n\r\n'

						elif request_file.endswith('.php') and file.is_file():
							currdir = os.getcwd()
							print currdir
							print request_file
							file = "php '"+request_file[1:]+"'"
							print file
							proc = subprocess.Popen(file, shell=True, stdout=subprocess.PIPE)
							response_data = proc.stdout.read()
							content_length = len(response_data)
							response_header = 'HTTP/1.1 200 OK\r\nContent-Type: text/html; charset=UTF-8\r\nContent-Length:' +str(content_length) + '\r\n\r\n'

						else :
							request_file = request_file[1:]
							if file.is_file():
							# file exists:
								f = open(request_file,'r')
								response_data = f.read()
								f.close()
								content_length = len(response_data)
								response_header = 'HTTP/1.1 200 OK\r\nContent-Type: text/html; charset=UTF-8\r\nContent-Length:' +str(content_length) + '\r\n\r\n'
							else :
								f = open('404.html','r')
								response_data = f.read()
								f.close()
								content_length = len(response_data)
								response_header = 'HTTP/1.1 404 Not Found\r\nContent-Type: text/html; charset=UTF-8\r\nContent-Length:' +str(content_length) + '\r\n\r\n'
						
						print response_header
						sock.sendall(response_header + response_data )
						
					elif "POST" in request_header[0]:
						print "----- POST RESPONSE -----"
						if "test.php" in request_header[0]:
							name = (request_header[-1])
							response_data = '<meta http-equiv="refresh" content="0; url=http://'+ ip +'/quiz/test.php"/>'
							content_length = len (response_data)
							response_header = 'HTTP/1.1 200 OK\r\nContent-Type: text/html; charset=UTF-8\r\nContent-Length:' +str(content_length) + '\r\nSet-Cookie: <username>=<'+str(name)+'>' + '\r\n\r\n'
						if "rank.php" in request_header[0]:
							cookie = findcookie(request_header)
							result [cookie] = kunci(request_header[-1])
							save_json (result)
							response_data = '<meta http-equiv="refresh" content="0; url=http://'+ ip +'/quiz/rank.php"/>'
							content_length = len (response_data)
							response_header = 'HTTP/1.1 200 OK\r\nContent-Type: text/html; charset=UTF-8\r\nContent-Length:' +str(content_length) + '\r\n\r\n'
							sleep(3)
						print response_header
						sock.sendall(response_header + response_data)


except KeyboardInterrupt:
	server_socket.close()
sys.exit(0)