<?php
    session_start();
    include("connection/conn.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Details</title>
</head>
<body>



        <?php 


            if(isset($_GET['id'])){
                        $id = $_GET['id'];

                        $sql = "SELECT * FROM manage_payment WHERE id = $id";
                        $query = mysqli_query($connforEjie,$sql);

                        while($test = mysqli_fetch_assoc($query)){



                                $cartPendingId = $test['cartPendingId'];
                                $BuyerId = $test['BuyerId'];
                                $SellerId = $test['SellerId'];
                                $item_name = $test['item_name'];
                                $item_price = $test['item_price'];
                                $item_source = $test['item_source'];
                                $buyer_fullname = $test['buyer_fullname'];
                                $buyer_location = $test['buyer_location'];
                                $buyer_age = $test['buyer_age'];
                                $seller = $test['seller'];
                                $number = $test['number'];


                                 $sql2 = "INSERT INTO seller_approval_list (cartPendingId,BuyerId,SellerId,item_name,item_price,item_source,buyer_fullname,buyer_location,buyer_age,seller) VALUES ('$cartPendingId','$BuyerId','$SellerId','$item_name','$item_price','$item_source','$buyer_fullname','$buyer_location','$buyer_age','$seller');
                                          INSERT INTO transaction (cartPendingId,BuyerId,SellerId,item_name,item_price,item_source,buyer_fullname,buyer_location,buyer_age,seller,number) VALUES ('$cartPendingId','$BuyerId','$SellerId','$item_name','$item_price','$item_source','$buyer_fullname','$buyer_location','$buyer_age','$seller','$number');
                                        DELETE FROM manage_payment WHERE id = $id;
                                        DELETE FROM order_pending WHERE id = $id;

                                 
                                 
                                 ";

                                 mysqli_multi_query($connforEjie,$sql2);

                                 header("Location: payment.php");
                                 


                        }


            }

        ?>


    
</body>
</html>