// index.js

const express = require('express');
const app = express();

//question: 7
// Import the randomNumber module
const random = require('./randomNumber');

// Define a route that executes the random function and logs the result
app.get('/random', (req, res) => {
  const randomNumber = random.random();
  console.log(randomNumber);
  res.send(`Random number: ${randomNumber.toString()}`);
});

// Start the server
app.listen(3000, () => {
  console.log('Server is running on port 3000');
});