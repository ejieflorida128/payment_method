<?php
session_start();
include("connection/conn.php");

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $GcashNumber=$_POST["number"];
    $password=$_POST["pass"];

    $sql = "SELECT * FROM user_account";
    $query = mysqli_query($conn,$sql);

    while($test = mysqli_fetch_assoc($query)){

        if($test['number'] == $GcashNumber){
            if($test['password'] == $password){
                
                $_SESSION['GcashNumber'] = $test['number'];
                header("Location: dashboard.php");
            }
        }

    }

   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "index.css">

</head>
<body>
    <div id="form">
        <h2 id = "loginText">LOGIN FORM</h2><br><br>
        <form name="form" method ="post" action="index.php"><br>
            <Label>Number:</label> <br>
            <input type ="Text" id ="user" name ="number"><br><br>
            <label>Password</label><br>
            <input type="password" id ="pass" name="pass"><br>
            <br><input type="submit" >
            <Label>You Don't Have An Account?: <a href = "register.php">CLICK HERE!</a></label> 
            

</form>
</div>       
</body>
</html>