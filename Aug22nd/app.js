const mysql=require("mysql2");
const express=require("express");

let app=express();

app.listen(3001,()=>console.log("Listening to port:3001!"));
let mysqlConnection=mysql.createConnection({
    //socketPath:
    user: "aug22nd",
    password: "aug22nd",
    host: "127.0.0.1",
    databaase: "aug22nd",
});
mysqlConnection.connect((err)=>{
    if(err)console.log(err);
    else console.log("Connected");
});

