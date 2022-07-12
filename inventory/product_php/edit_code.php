<?php
                        if(isset($_GET['id']))
                        {
                            $student_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM products_tb WHERE Barcode_No ='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $student = mysqli_fetch_array($query_run);
                                
                                ?>
                            
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="barcode_id" value="<?= $student['Barcode_No']; ?>">

                                    <div class="mb-3">
                                        <label>Product Description</label>
                                        <input type="text" name="product" value="<?=$student['Product_desc'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Unity Price</label>
                                        <input type="number" name="price" value="<?=$student['Unit_Price'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Quanitity</label>
                                        <input type="number" name="quantity" value="<?=$student['Quantity'];?>" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type="submit" name="update_product" class="btn btn-primary">
                                            Update product
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>