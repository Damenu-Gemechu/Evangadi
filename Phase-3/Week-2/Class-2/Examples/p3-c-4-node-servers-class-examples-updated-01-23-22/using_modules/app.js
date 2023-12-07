
//core mudules



//const express = require("express");
//  const os =require('os');
//  console.log(os);

// // 1: Getting available space on the computer

// const totalmem=os.totalmem();
// console.log("Total Memory",totalmem);
//  const freemem=os.freemem();
//  console.log("Free Memory",freemem);
//  const platform = os.platform();
//  console.log("Operating System",platform );


////2: Getting detail information of a file from the path
// const path = require("path");
// // console.log(__filename);

// // // // path.parse() example
// // // // File name of the current file

// const fileNameParsed = path.parse(__filename);
// console.log(fileNameParsed);

// const fileName = fileNameParsed.name;
// console.log(fileName);

// // File name from any url
// const urlNameParsed = path.parse(
//   "https://github.com/powerline/fonts/blob/master/install.ps1"
// );
// console.log(urlNameParsed);
// const fileNameFromUrl = urlNameParsed.ext;
// console.log(fileNameFromUrl);

// // // 3: Dealing with files
// const {readdir,mkdir,readFile,writeFile}=require("fs");
// const fs=require('fs');
// fs.readFile('./abebe.txt','utf8',(err,data)=>{
//   if(err){
//     console.error(err)
//     return
//   }
//   console.log(data)
// })
// mkdir("solomon",(err,path)=>{
//   if (err) console.log("error",err);
//   console.log(path);
// });
// const readFile = fs.readFileSync("example.txt", "utf8");
// console.log(readFile);
// fs.writeFileSync("newFile.txt", "Abebe beso Teta");
// //console.log(t);
// // // Remove
// fs.unlink("abebe.txt", (err) => {
//   if (err) throw err;
//   console.log("newFile was deleted");
// });

// Emitting events
const events = require("events");
//const fs = require("fs");
 const { on } = require("process");
// There is an EventEmitter() class defined inside the events module
const emitter = new events.EventEmitter();

// // It is similar with the jQuery event listener we used on DOM
// // document.getElementById("someId").on("click", changeBackground());

emitter.on("abebe", function () {
  console.log("Abebe Event triggered");
});

try {
  // Tries to run this code first
  fs.writeFileSync("anotherFileExample.txt", "Checking events ");
  emitter.emit("abebe");
} catch (error) {
  console.log("Couldn't create the file");
}

