<?php

$password=$_POST['password'];
$username=$_POST['username'];

if(isset('submit')){
    
}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap/css/boobootstrap.min.css" >
	<!--><link rel="stylesheet" href="./bootstrap/css/boobootstrap-grid.css" >
<!-->
<!-- Optional theme -->
<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" >
<!--><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-->
<!-- Latest compiled and minified JavaScript -->
<script src="./bootstrap/js/bootstrap.min.js"></script>
<scriprt src='./bootstrap/jquery-3.3.1.min.js'></script>
    <style>
        .right{
            float: right;
            text-align: right;
        }

        .left{
            float: left;
        }

        body{
            background-image: url('img/3.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

        h1{
            size: 100px;
            color: cyan;
        }

        p{
            color: cyan;
            backface-visibility: visible;
           
        }

        .img1{
            float: left;
            border-radius: 10px;
        }

        
    </style>
</head>
<body class="body">
    <div class="container">
        <div class="right">
                <h1><font></font>   
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima cum exercitationem recusandae modi quo suscipit placeat odit quos at totam? Labore quos qui aliquam illo? Accusantium harum eius architecto fugit.</p>
        </div><!--right-->

        <div class="left">
            <form action="index.html" method="POST">
                <legend>
                    <label for="username"><input type="text" placeholder="username" name="username"></label><br>
                    <label for="password"><input type="password" placeholder="password" name="password"></label><br>
                    <label for="button"><button value="submit" name="submit" class="button">submit</button></label>
                </legend>
            </form><br><br>

            <img src="img/1.jpeg" alt="" class="img1">
        </div><!--left-->
<br><br>
        <div class="img1">
        
        </div>
        
    </div><!--container-->
</body>
</html>