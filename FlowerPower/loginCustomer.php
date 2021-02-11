<?php

include 'database.php';

$msg = '';
if(isset($_POST['submit'])){
    
    $fieldnames = ['username', 'password'];
    $error = false;
    
    foreach($fieldnames as $fieldname){
        if(!isset($_POST[$fieldname]) || empty($_POST[$fieldname])){
            $error = true; 
            $msg = 'error';
        }

    }

    if(!$error){
        $obj = new database();
        $obj->loginklant($_POST['username'], $_POST['password']);
        //yurr
    }else{
        //do something
    }
}    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlowerPower</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="Vertical_Layout">
        <a href="index.php"><img src="bloemen.png" class="bloemen"></a>
        <div class="inloggen">
            <form method="post" action="loginCustomer.php">
                <input type="text" name="username" placeholder="Username" /><br>
                <input type="password" name="password" placeholder="Password" /><br>
                <button type="submit" name="submit" class="btn">Login</button><br>
            </form>
        </div>    
    </div>
    <div id="background_image">
        <img src="bloemenwinkel.jpg" class="bloemenwinkel">
    </div>      
    <div id="container">
        <div class="Horizontal_Layout">
            <h1 id="title">Flowerpower</h1>
        </div>   
    </div>           
</body>