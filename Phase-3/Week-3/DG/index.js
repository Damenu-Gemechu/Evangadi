
const express = require("express");
const app = express();

 app.listen(3000, (err) => {
  if (err) {
    console.log("Error found" + err);
  }
  console.log("Listening to port 3000");
});
app.get("/", (req, res) => {
        console.log("Request Received!");
        res.send("<h1>Hello Express!!</h1>");

});


// // 4: Serving simple message with Express
//  const express = require("express");

// // // Lets now create our Server Object
// // // We used createServer() when we used http module
// // // That is what the main express() method does for us
//  const app = express();

// // // The app object now has access to all of the methods 
//defined in the express module
// // // One of the methods is the listen() method
// // // This is what makes it listen to the port

//  app.listen(3000, (err) => {
//   if (err) {
//     console.log("Error found" + err);
//   }
//   console.log("Listening to port 3000");
// });

// // // The next thing we need to do is set up routes
// // // Home page route
// // // Returning "Hello Express"

//  app.get("/", (req, res) => {
//    console.log("Request Received!");
//   res.send("<h1>Hello Express!!</h1>");

// //   // It determines and includes the content header for us
// //   // It also includes all the other headers
// //   // Like status code, etag etc
// //   // We had to do this manually when we used http
//  });

// // 5: Serving static page using Express
// const express = require("express");

// // Lets now create our Server Object
// const app = express();

// app.listen(3000, (err) => {
//   if (err) {
//     console.log("Error found" + err);
//   }
//   console.log("Listening to port 3000");
// });

// // All we have to do in here is use the middleware 
// function and provide the location where all the static 
// files are located. Express searches the file inside the 
// provided directory and serves the requested file

// app.use(express.static("apple"));



// const express = require("express");
// const app = express();
// //serving static site
// app.use(express.static("PuppyLoversResponsiveMobileFirst"));
// const PORT = 2020;
// app.listen(PORT, (err)=>{
//   if (err) console.log(err);console.log('Server running on http://localhost:${PORT}');

// });