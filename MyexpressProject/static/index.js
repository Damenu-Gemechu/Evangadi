
//question:8
const express = require('express');
const app = express();

app.listen(1234, () => {
  console.log('Server is running on port 1234');
});

 app.use(express.static("apple-html-css-replica"));
