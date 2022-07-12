<?php
                        if(isset($_GET['id']))
                        {
                            $supplier_id = mysqli_real_escape_string($con, $_GET['id']);
                            $query = "SELECT * FROM suppliers_tb WHERE ID ='$supplier_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $supplier = mysqli_fetch_array($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="supplier_id" value="<?= $supplier['ID']; ?>">

                                    <div class="mb-3">
                                        <label>Company Name</label>
                                        <input type="text" name="company_name" value="<?=$supplier['Company_Name'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Company Contact</label>
                                        <input type="number" name="company_contact" value="<?=$supplier['Company_Contact'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Province</label>
                                        <input type="text" name="province" value="<?=$supplier['province'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>City</label>
                                        <input type="text" name="city" value="<?=$supplier['city'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Barangay</label>
                                        <input type="text" name="barangay" value="<?=$supplier['barangay'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Street</label>
                                        <input type="text" name="street" value="<?=$supplier['street'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Zip Code</label>
                                        <input type="number" name="zipcode" value="<?=$supplier['zip_code'];?>" class="form-control">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type="submit" name="update_supplier" class="btn btn-primary">
                                            Update Supplier
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