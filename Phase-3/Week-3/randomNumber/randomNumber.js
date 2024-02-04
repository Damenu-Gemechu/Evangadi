
// const randomNumber = require('./randomNumber');

// //const randomNumber=Math.random();
// app.use((req, res) => {
//   const x = randomNumber.random();
//   console.log("Request Received!");

//   res.send(` ${x}`);
//   return(x);
// });

// app.listen(1234, () => {
//   console.log('Server is listening on port 1234');
// });
// module.exports=randomNumber;

// // // randomNumber.js

// // // Generate a random number between min and max (inclusive)
// // function generateRandomNumber(min, max) {
// //   min = Math.ceil(min);
// //   max = Math.floor(max);
// //   return Math.floor(Math.random() * (max - min + 1)) + min;
// // }

// //module.exports = generateRandomNumber;



// randomNumber.js
const express = require('express');
const app = express();
// Function to generate a random number
function random() {
  return Math.random();
}

// Execute the random function
const randomNumber = random();

// Log the variable on the console
console.log(randomNumber);

// Export the module
module.exports = random;