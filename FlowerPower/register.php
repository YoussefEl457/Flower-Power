<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Registratie scherm</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="Vertical_Layout">
        <a href="index.php"><img src="bloemen.png" class="bloemen"></a>
        <div class="inloggen">
            <form method="post" action="loginEmployee.php">
                <input type="text" name="username" placeholder="Username" required/><br>
                <input type="text" name="firstname" placeholder="Name" required/>
                <input type="text" name="middlename" placeholder="Middlename" />
                <input type="text" name="lastname" placeholder="Lastname" required/><br/>
                <input type="text" name="email" placeholder="E-mail" required/>    
                <input type="password" name="password" placeholder="Password" required/><br>
                <input type="password" name="repeatpwd" placeholder="Rep. Password" required/>
                <button type="submit" name="submit" class="btn">Make Account</button><br>
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
  