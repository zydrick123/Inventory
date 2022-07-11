<?php
session_start();
require 'dbconn.php';

if(isset($_POST['delete_customer']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_customer']);

    $query = "DELETE FROM customer_tb WHERE Customer_ID ='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Customer Deleted Successfully";
        header("Location: customer.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Deleted";
        header("Location: customer.php");
        exit(0);
    }
}

if(isset($_POST['update_customer']))
{
    $customer_id = mysqli_real_escape_string($con, $_POST['customer_id']);

    //$barcode = mysqli_real_escape_string($con, $_POST['barcode_id']);
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $mname = mysqli_real_escape_string($con, $_POST['mname']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $contact_no = mysqli_real_escape_string($con, $_POST['contact_no']);
   

    $query = "UPDATE customer_tb SET lname ='$lname', fname='$fname', mname='$mname', address ='$address', contact_no='$contact_no' WHERE Customer_ID ='$customer_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Customer Updated Successfully";
        header("Location: customer.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Updated";
        header("Location: customer.php");
        exit(0);
    }

}


if(isset($_POST['save_customer']))
{
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    $mname = mysqli_real_escape_string($con, $_POST['mname']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $contact_no = mysqli_real_escape_string($con, $_POST['contact_no']);
    
    $valid = "SELECT * from customer_tb where lname = '$lname' and fname = '$fname' ";
    $run = mysqli_query($con, $valid);
    if(mysqli_num_rows($run)>0)
    {
        $_SESSION['message'] = "Customer Existed";
        header("Location: create.php");
        exit(0);
    }
    else{
    $query = "INSERT INTO customer_tb (lname,fname,mname,address,contact_no) VALUES ('$lname','$fname','$mname','$address','$contact_no')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Customer Created Successfully";
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Customer Not Created";
        header("Location: create.php");
        exit(0);
    }
    }   
}

?>