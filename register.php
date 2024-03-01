<?php

include("connection/conn.php");

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $fullname=$_POST["fullname"];
    $password=$_POST["pass"];
    $GcashNumber = $_POST['number'];


    $sql="INSERT INTO user_account (fullname,password,number) VALUES ('$fullname','$password','$GcashNumber')";
     mysqli_query($conn,$sql);



     header("Location: index.php");
   

    

    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "stylesheet" href = "register.css">

</head>
<body>
    <div class="form">
        <h3 id = "loginText">REGISTER FORM</h3>
        <form name="form" method ="post"><br>
            <Label>Fullname:</label> <br>
            <input type ="Text" id ="fullname" name ="fullname"><br><br>
            <label>Password</label><br>
            <input type="password" id ="pass" name="pass"><br>
            <label>Gcash Number:</label><br>
            <input type="number" id ="number" name="number"><br>
            <br><input type="submit" >
</form>
</div>       
</body>
</html>