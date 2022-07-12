<?php
                        if(isset($_GET['id']))
                        {
                            $customer_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM customers_tb WHERE Customer_ID = '$customer_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $row = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Customer ID</label>
                                        <p class="form-control">
                                            <?=$row['Customer_ID'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Last Name</label>
                                        <p class="form-control">
                                            <?=$row['lname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>First Name</label>
                                        <p class="form-control">
                                            <?=$row['fname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Middle Name</label>
                                        <p class="form-control">
                                            <?=$row['mname'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Province</label>
                                        <p class="form-control">
                                            <?=$row['province'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>City</label>
                                        <p class="form-control">
                                            <?=$row['city'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Barangay</label>
                                        <p class="form-control">
                                            <?=$row['barangay'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Street</label>
                                        <p class="form-control">
                                            <?=$row['street'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Zip Code</label>
                                        <p class="form-control">
                                            <?=$row['zip_code'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Contact Number</label>
                                        <p class="form-control">
                                            <?=$row['contact_no'];?>
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