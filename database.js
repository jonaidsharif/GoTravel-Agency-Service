const express = require('express');
const mysql= require ('mysql');

let db= mysql.createConnection({
  host: "localhost",
  user: "root",
  password: "",
  connectionlimit: 10,
  database: 'booknow'
});
db.connect((err)=>{
  if(err){
    throw err;
}
  console.log('Database Connected Successfully....');
});
const app=express();

app.get('/createdb',(req,res)=>{
    let sql = 'CREATE DATABASE booknow';
    db.query(sql,(err,result)=>{
        if(err)throw err;
        console.log(result);
        res.send('DB created....');
    });
});
//fetching table content
app.get('/booking',(req,res)=>{
    let sql = 'select * from booking';
    db.query(sql,(err,result)=>{
        if(err) throw err;
        console.log(result);
        res.send('Table fetched..');
    });
});
app.listen('3016',()=>{
    console.log('Server started on port 3016');
})