var http=require("http")
var sleep=require("system-sleep")
var os=require("os")

var hostname = os.hostname();

http.createServer(function (request, response) {
	sleep(1);
	response.writeHead(200, {'Content-Type':'text/plan'});
	response.end("Swarm service (Node App), hostname=" + hostname);
}).listen(8085); 

console.log("NodeJS App, port 8085, hostname=" + hostname); 