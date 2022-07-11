<?php 
session_start();
require 'dbconn.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
  
    <!-- CSS only -->
    <!-- JavaScript Bundle with Popper -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="/inventory/CSS/style.css" type="text/css">
<script src="https://kit.fontawesome.com/695dda2653.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>
<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <div class="header">
    <div class="side-nav">
        <a href="*" class="logo">
            <h1>SAMPLE</h1>
        </a>
        <ul class="nav-links">
            <li><a href="/inventory/home.php"><p><i class="fa-solid fa-house-user"></i> Dashboard</p></a></li>
            <li><a href="/inventory/product_php/product.php"><p><i class="fa-solid fa-box-open"></i> Product</p></a></li>
            <li><a href="/inventory/supplier_php/supplier.php"><p><i class="fa-solid fa-truck-field"></i> Supplier</p></a></li>
            <li><a href="/inventory/customer_php/customer.php"><p><i class="fa-solid fa-users"></i> Customer</p></a></li>
            <li><a href="/inventory/transaction_php/transaction.php"><p><i class="fa-solid fa-hand-holding-dollar"></i> Transaction</p></a></li>
            <div class="active"></div>
        </ul>
        
    </div>
    <div class="container mt-5">
    <?php include('message.php'); ?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>Customer Details
                    <a href="create.php" class="btn btn-primary float-end">Add Customer</a>
                </h4>
            </div>
            <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr> 
                            <th>Customer ID</th>
                            <th>Last Name</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Address</th>
                            <th>Contanct Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php include('p_display.php'); ?>
                        
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </div>
  </div>
  

</body>

</html>