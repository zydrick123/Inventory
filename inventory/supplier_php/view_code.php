<?php
                        if(isset($_GET['id']))
                        {
                            $supplier_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM suppliers_tb WHERE ID = '$supplier_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $row = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>Company ID</label>
                                        <p class="form-control">
                                            <?=$row['ID'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Company Name</label>
                                        <p class="form-control">
                                            <?=$row['Company_Name'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Company Number</label>
                                        <p class="form-control">
                                            <?=$row['Company_Contact'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Company Address</label>
                                        <p class="form-control">
                                            <?=$row['Company_Address'];?>
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