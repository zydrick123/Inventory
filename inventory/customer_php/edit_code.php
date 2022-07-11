<?php
                        if(isset($_GET['id']))
                        {
                            $customer_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM customer_tb WHERE Customer_ID ='$customer_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $customer = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="customer_id" value="<?= $customer['Customer_ID']; ?>">

                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <input type="text" name="lname" value="<?=$customer['lname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <input type="text" name="fname" value="<?=$customer['fname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <input type="text" name="mname" value="<?=$customer['mname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" name="address" value="<?=$customer['address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Contact Number</label>
                                        <input type="text" name="contact_no" value="<?=$customer['contact_no'];?>" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type="submit" name="update_customer" class="btn btn-primary">
                                            Update customer
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