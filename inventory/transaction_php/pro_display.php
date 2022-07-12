<?php 
    include 'dbconn.php';
                                    $query = "SELECT * FROM products_tb";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['Barcode_No']; ?></td>
                                                <td><?= $row['Product_desc']; ?></td>
                                                <td><?= $row['Unit_Price']; ?></td>
                                                <td><?= $row['Quantity']; ?></td>
                                                <td>
                                                   
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="add_product" value="<?=$row['Barcode_No'];?>" class="btn btn-success btn-sm">Select</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>