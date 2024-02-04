// const express = require("express");

// // Lets now create our Server Object
//  const app = express();

//  app.listen(3000, (err) => {
//    if (err) {
//     console.log("Error found" + err);
//    }
//   console.log("Listening to port 3000");
//  });

//  // All we have to do in here is use the middleware 
// // function and provide the location where all the static 
// // files are located. Express searches the file inside the 
// // provided directory and serves the requested file
//  app.use(express.static("apple"));

// const express = require("express");
// const app = express();
// //serving static site

// const PORT = 2020;
// app.listen(PORT, (err)=>{
// if (err) console.log(err);console.log(`Server running on http://localhost:${PORT}`);

// });

// app.use(express.static("PuppyLoversResponsiveMobileFirst"));

// const express = require('express');
// const app = express();

// // Define your routes and logic here
// // randomNumber.js
// function random() {
//     const randomNumber = Math.random();
//   console.log(randomNumber);
//   return randomNumber;
//   res.send(randomNumber," <h1>Hello Express!!</h1>");
  
//   }
//   app.get("/", (req, res) => {
//        console.log("Request Received!");
//       //res.send(randomNumber," <h1>Hello Express!!</h1>");
//   });
// app.listen(3000, () => {
//   console.log('Server is running on port 3000');
// });






// const express = require('express');
// const app = express();
// const randomNumber = require('./randomNumber');


// app.use((req, res) => {
//   const x = randomNumber.random();
//   res.send(` ${x}`);
// });

// app.listen(1234, () => {
//   console.log('Server is listening on port 1234');
// });