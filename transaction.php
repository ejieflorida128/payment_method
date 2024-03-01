<?php
    session_start();
    include("connection/conn.php");
    

?>
 <?php include 'navbar.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trasaction</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="payment.css">
</head>
<body>

<a href="index.php" class = "btn btn-danger" STYLE = "margin: 20px;">LOGOUT</a>
 

<table class="table container table-bordered" style = "width:1100px; margin-top: 30px;">
  <thead class = "table-dark">
    <tr>
      <th scope="col">Pending No. </th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Item Source</th>
      <th scope="col">Buyer Location</th>
      <th scope="col">Buyer Age</th>
      <th scope="col">Gcash Number</th>
      <th scope="col">Seller</th>
      <th scope="col">Date Payment Confirmed</th>

    </tr>
  </thead>
  <tbody>

  <?php

if(isset($_SESSION['GcashNumber'])){

    $number = $_SESSION['GcashNumber'];
        
$sql = "SELECT * FROM transaction WHERE number = $number";
$query = mysqli_query($connforEjie,$sql);
$count = 1;

while($test = mysqli_fetch_assoc($query)){

            echo '

                    <tr>
                            <td>'.$count.'</td>
                            <td>'.$test['item_name'].'</td>
                            <td>'.$test['item_price'].'</td>
                            <td>'.$test['item_source'].'</td>
                            <td>'.$test['buyer_location'].'</td>
                            <td>'.$test['buyer_age'].'</td>
                            <td>'.$test['number'].'</td>
                            <td>'.$test['seller'].'</td>
                            <td>'.$test['date'].'</td>
                    </tr>
            
            ';

            $count++;
}
}


?>

</tbody>
</table>


<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.j"></script>

</body>
</html>