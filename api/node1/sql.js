var mysql=require('mysql');
var con=mysql.createConnection({
    host:'localhost',
    user:'root',
    password:'root',
    database:'test'
});

con.connect(function(err){
    console.log('connected!')
    if(err) throw err;
    var sql="insert into db(username,password,utype)values('heshan','111','teacher')";
  /*
    var sql="insert into db(username,password,utype)values('hecha','222','parent') ";
    var sql="insert into db(username,password,utype)values('heshani','111','teacher')";
    var sql="insert into db(username,password,utype)values('umayanga','111','teacher')";
   */
    
    //var sql="insert into db(username,password,utype)values('uma','222','parent')";
//   var sql="drop table  ";
    con.query(sql,function(err,result){
        if(err) throw err;
        console.log('1 row added');
    
    });
});

