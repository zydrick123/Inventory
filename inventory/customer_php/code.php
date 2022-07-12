<?php
session_start();
require 'dbconn.php';

if(isset($_POST['delete_customer']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_customer']);

    $query = "DELETE FROM customers_tb WHERE Customer_ID ='$id' ";
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
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $barangay = mysqli_real_escape_string($con, $_POST['barangay']);
    $street = mysqli_real_escape_string($con, $_POST['street']);
    $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);
    $contact_no = mysqli_real_escape_string($con, $_POST['contact_no']);
   

    $query = "UPDATE customers_tb SET lname ='$lname', fname='$fname', mname='$mname', province ='$province', city ='$city', barangay ='$barangay', street ='$street', zip_code ='$zipcode', contact_no='$contact_no' WHERE Customer_ID ='$customer_id' ";
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
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $barangay = mysqli_real_escape_string($con, $_POST['barangay']);
    $street = mysqli_real_escape_string($con, $_POST['street']);
    $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);
    $contact_no = mysqli_real_escape_string($con, $_POST['contact_no']);
    
    $valid = "SELECT * from customers_tb where lname = '$lname' and fname = '$fname' ";
    $run = mysqli_query($con, $valid);
    if(mysqli_num_rows($run)>0)
    {
        $_SESSION['message'] = "Customer Existed";
        header("Location: create.php");
        exit(0);
    }
    else{
    $query = "INSERT INTO customers_tb (lname,fname,mname,province,city,barangay,street,zip_code,contact_no) VALUES ('$lname','$fname','$mname','$province','$city','$barangay','$street','$zipcode','$contact_no')";

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