<?php
require 'dbconn.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Supplier View</title>
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
          <li><a href="/warmup/home.html"><p><i class="fa-solid fa-house-user"></i> Dashboard</p></a></li>
          <li><a href="/warmup/pages/product.html"><p><i class="fa-solid fa-box-open"></i> Product</p></a></li>
          <li><a href="/warmup/pages/supplier.html"><p><i class="fa-solid fa-truck-field"></i> Supplier</p></a></li>
          <li><a href="/warmup/pages/customer.html"><p><i class="fa-solid fa-users"></i> Customer</p></a></li>
          <li><a href="/warmup/pages/transaction.html"><p><i class="fa-solid fa-hand-holding-dollar"></i> Transaction</p></a></li>
            <div class="active"></div>
        </ul>
        
    </div>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Company View Details 
                            <a href="supplier.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                    <?php require 'view_code.php'; ?>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>