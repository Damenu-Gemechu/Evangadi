// Core Node.js Modules: Exploration and Examples
// 1. os Module
// Purpose: Provides information about the operating system.
// Useful Methods:

// os.hostname(): Returns the hostname of the system.
//const os = require("os");

// const hostname = os.hostname();
// console.log(hostname); // Output: Hostname: [your-hostname]

// os.platform(): Returns the operating system platform (e.g., "linux", "darwin").
// const os = require("os");
// const platform = os.platform();
// console.log(`Platform: ${platform}`); // Output: Platform: [your-platform]

// os.uptime(): Returns the system uptime in seconds.
// const os = require("os");
// const uptime = os.uptime();
// console.log(`Uptime: ${uptime / 3600} hr`); // Output: Uptime: [uptime-in-seconds]

// 2. path Module
// Purpose: Provides utilities for working with file paths.
// path.join(...paths): Joins multiple path segments into a single path.
// Example:

//  const path = require("path");

// const filePath = path.join("public", "images", "logo.png");
// console.log(`File path: ${filePath}`); // Output: File path: public/images/logo.png

// __dirname property
// const filePath = __dirname;
// console.log(`Directory name: ${filePath}`); // Output: Directory name: public/images

// 3. fs Module
//Purpose: Allows interaction with the file system.
// const fs = require("fs");

// fs.readFile("examlew.txt", "utf8", (err, data) => {
//   if (err) {
//     console.error(err);
//   } else {
//     console.log(`File content: ${data}`);
//   }
// });

// 4. http Module
// Purpose: Provides tools for building and working with HTTP servers and clients.

// Useful Methods:
//http.createServer(callback): Creates an HTTP server instance.

const http = require("http");
//const server1=http.createServer();
const server = http.createServer((req, res) => {
  // req.url: Contains the URL path requested by the client.

  //const url = req.url;
  console.log(`Request received`);
  res.writeHead(200, { "Content-Type": "text/plain" }); // Sets the response status code and headers.
  res.write("Hello, world!"); //Writes data to the response body.
  res.end(); //Signals the end of the response.
});

// // server.listen(port, hostname, callback): Starts the server listening on a specific port and hostname.
server.listen(3000, "localhost", () => {
  console.log("Server listening on port 3000");
});
// server.listen(port, hostname, callback): Starts the server listening on a specific port and hostname.
// server1.listen(3000, "localhost", () => {
//   console.log("Server listening on port 3000");
// });