<?php
session_start();
require 'dbconn.php';

if(isset($_POST['delete_company']))
{
    $id = mysqli_real_escape_string($con, $_POST['delete_company']);

    $query = "DELETE FROM suppliers_tb WHERE ID ='$id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Supplier Deleted Successfully";
        header("Location: supplier.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Supplier Not Deleted";
        header("Location: supplier.php");
        exit(0);
    }
}

if(isset($_POST['update_supplier']))
{
    $supplier_id = mysqli_real_escape_string($con, $_POST['supplier_id']);

    //$barcode = mysqli_real_escape_string($con, $_POST['barcode_id']);
    $name = mysqli_real_escape_string($con, $_POST['company_name']);
    $contact = mysqli_real_escape_string($con, $_POST['company_contact']);
    $address = mysqli_real_escape_string($con, $_POST['company_address']);

    $query = "UPDATE suppliers_tb SET Company_Name ='$name', Company_Contact='$contact', Company_Address='$address' WHERE ID ='$supplier_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Supplier Updated Successfully";
        header("Location: supplier.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Supplier Not Updated";
        header("Location: supplier.php");
        exit(0);
    }

}


if(isset($_POST['save_supp']))
{
    $cname = mysqli_real_escape_string($con, $_POST['cname']);
    $ccontact = mysqli_real_escape_string($con, $_POST['ccontact']);
    $caddress = mysqli_real_escape_string($con, $_POST['caddress']);
    
    $valid = "SELECT * from suppliers_tb where Company_Name = '$cname' ";
    $run = mysqli_query($con, $valid);
    if(mysqli_num_rows($run)>0)
    {
        $_SESSION['message'] = "Company Existed";
        header("Location: create.php");
        exit(0);
    }
    else{
    $query = "INSERT INTO suppliers_tb (Company_Name,Company_Contact,Company_Address) VALUES ('$cname','$ccontact','$caddress')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Supplier Created Successfully";
        header("Location: create.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Supplier Not Created";
        header("Location: create.php");
        exit(0);
    }
    }   
}

?>