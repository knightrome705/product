<?php
include "connection.php";
$id=$_GET['id'];
$sql=mysqli_query($conn,"DELETE FROM product WHERE p_id='$id'");

    if($sql)
    {
        echo '<script> alert("deleted sucessfully");window.location.href="view_product_seller.php";</script>';
    }
    else{
        echo '<script> alert("something went wrong");</script>';

    }

?>





