var express=require('express');
var app=express();
//const fs=require('fs');
//const http=require('http');
//var fs=require('fs');

app.get('/',function(req,res){
    res.sendFile('__dirname'+'/index.html');
});

app.get('/index',function(req,res){
    res.sendFile('__dirname'+'/index.html');
});

app.get('/parent',function(req,res){
    res.sendFile('__dirname'+'/parent.html');
});

app.get('/teacher',function(req,res){
    res.sendFile('__dirname'+'/teacher.html');
});

app.listen(3002);
