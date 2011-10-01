

var HTTPServer = require('http-server').HTTPServer;

var httpServer = new HTTPServer({
  root: './public/',
  port: 8080,
  cache: 3600000
});

httpServer.start();