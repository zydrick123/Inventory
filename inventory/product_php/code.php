<?php
session_start();
require 'dbconn.php';

if(isset($_POST['delete_product']))
{
    $barcode_id = mysqli_real_escape_string($con, $_POST['delete_product']);

    $query = "DELETE FROM products_tb WHERE Barcode_No='$barcode_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Product Deleted Successfully";
        header("Location: product.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Product Not Deleted";
        header("Location: product.php");
        exit(0);
    }
}

if(isset($_POST['update_product']))
{
    $barcode_id = mysqli_real_escape_string($con, $_POST['barcode_id']);

    //$barcode = mysqli_real_escape_string($con, $_POST['barcode_id']);
    $product = mysqli_real_escape_string($con, $_POST['product']);
    $price = mysqli_real_escape_string($con, $_POST['price']);
    $quantity = mysqli_real_escape_string($con, $_POST['quantity']);

    $query = "UPDATE products_tb SET Product_desc ='$product', Unit_Price='$price', Quantity='$quantity' WHERE Barcode_No ='$barcode_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Product Updated Successfully";
        header("Location: product.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Product Not Updated";
        header("Location: product.php");
        exit(0);
    }

}


if(isset($_POST['save_prod']))
{
    $barcodes = mysqli_real_escape_string($con, $_POST['barcodes']);
    $products = mysqli_real_escape_string($con, $_POST['products']);
    $unit = mysqli_real_escape_string($con, $_POST['unit']);
    $quant = mysqli_real_escape_string($con, $_POST['quant']);
    $valid = "SELECT * from products_tb where Barcode_No = '$barcodes' ";
    $run = mysqli_query($con, $valid);
    if(mysqli_num_rows($run)>0)
    {
        $_SESSION['message'] = "Product Existed";
        header("Location: create.php");
        exit(0);
    }
    else{
    $query = "INSERT INTO products_tb (Barcode_No,Product_desc,Unit_Price,Quantity) VALUES ('$barcodes','$products','$unit','$quant')";

   
    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Product Created Successfully";
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Product Not Created";
        header("Location: create.php");
        exit(0);
    }
    }   
}

?>