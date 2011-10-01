

var HTTPServer = require('http-server').HTTPServer;

var httpServer = new HTTPServer({
  root: './public/',
  port: 8080,
  cache: 604800
});

httpServer.start();