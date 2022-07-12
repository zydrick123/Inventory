<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Supplier Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<link rel="stylesheet" href="/inventory/CSS/style.css" type="text/css">
<script src="https://kit.fontawesome.com/695dda2653.js" crossorigin="anonymous"></script>


</head>
<body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <div class="header">
    <div class="side-nav">
        <a href="*" class="logo">
            <h1>SAMPLE</h1>
        </a>
        <ul class="nav-links">
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

                    <h4>Supplier Add 
                            <a href="supplier.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">

                           
                            <div class="mb-3">
                                <label>Company Name</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Company Contact</label>
                                <input type="number" name="contact" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Province</label>
                                <input type="text" name="province" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>City</label>
                                <input type="text" name="city" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Barangay</label>
                                <input type="text" name="barangay" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Street</label>
                                <input type="text" name="street" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>Zip Code</label>
                                <input type="number" name="zipcode" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="save_supp" class="btn btn-primary">Save supplier</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>