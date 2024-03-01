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
    <title>Payment</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="payment.css">
</head>
<body>

  
<table class="table container table-bordered" style = "width:1100px; margin-top: 30px;">
  <thead class = "table-dark">
    <tr>
      <th scope="col">Pending No. </th>
      <th scope="col">Item Name</th>
      <th scope="col">Item Price</th>
      <th scope="col">Item Source</th>
      <th scope="col">Seller</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

  <a href="index.php" class = "btn btn-danger" STYLE = "margin: 20px;">LOGOUT</a>
 

    <?php

        if(isset($_SESSION['GcashNumber'])){

            $number = $_SESSION['GcashNumber'];
                
        $sql = "SELECT * FROM manage_payment WHERE number = $number";
        $query = mysqli_query($connforEjie,$sql);
        $count = 1;

        while($test = mysqli_fetch_assoc($query)){

                    echo '

                            <tr>
                                    <td>'.$count.'</td>
                                    <td>'.$test['item_name'].'</td>
                                    <td>'.$test['item_price'].'</td>
                                    <td>'.$test['item_source'].'</td>
                                    <td>'.$test['seller'].'</td>
                                    <td>

                                        <a class = "btn btn-success"href = "toPay.php?id='.$test['id'].'">Confirm Payment</a>
                                    
                                    </td>
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