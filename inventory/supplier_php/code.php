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
    $province = mysqli_real_escape_string($con, $_POST['province']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $barangay = mysqli_real_escape_string($con, $_POST['barangay']);
    $street = mysqli_real_escape_string($con, $_POST['street']);
    $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);

    $query = "UPDATE suppliers_tb SET Company_Name ='$name', Company_Contact='$contact', province ='$province', city ='$city', barangay ='$barangay', street ='$street', zip_code ='$zipcode' WHERE ID ='$supplier_id' ";
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
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);

    $province = mysqli_real_escape_string($con, $_POST['province']);
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $barangay = mysqli_real_escape_string($con, $_POST['barangay']);
    $street = mysqli_real_escape_string($con, $_POST['street']);
    $zipcode = mysqli_real_escape_string($con, $_POST['zipcode']);
    
    $valid = "SELECT * from suppliers_tb where Company_Name = '$cname' ";
    $run = mysqli_query($con, $valid);
    if(mysqli_num_rows($run)>0)
    {
        $_SESSION['message'] = "Company Existed";
        header("Location: create.php");
        exit(0);
    }
    else{
    $query = "INSERT INTO suppliers_tb (Company_Name,Company_Contact,province,city,barangay,street,zip_code) VALUES ('$name','$contact','$province','$city','$barangay','$street','$zipcode')";

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