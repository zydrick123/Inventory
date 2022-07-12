<?php
                        if(isset($_GET['id']))
                        {
                            $barcode_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM products_tb WHERE Barcode_No = '$barcode_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $row = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Barcode NO.</label>
                                        <p class="form-control">
                                            <?=$row['Barcode_No'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Product Description</label>
                                        <p class="form-control">
                                            <?=$row['Product_desc'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Unit Price</label>
                                        <p class="form-control">
                                            <?=$row['Unit_Price'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Quantity</label>
                                        <p class="form-control">
                                            <?=$row['Quantity'];?>
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>