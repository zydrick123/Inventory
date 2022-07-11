<?php 
    
                                    $query = "SELECT * FROM transactions_tb";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {

                                            
                                            ?>
                                            <tr>
                                                <td><?= $row['Transaction_ID']; ?></td>
                                                <td><?= $row['Customer_ID']; ?></td>
                                                <td><?= $row['Barcode_No']; ?></td>
                                                <td><?= $row['Quantity']; ?></td>
                                               
                                                <td>
                                                    <a href="view.php?id=<?=$row['Customer_ID']; ?>" class="btn btn-info btn-sm">View</a>
                                                 
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_transaction" value="<?=$row['Transaction_ID'];?>" class="btn btn-danger btn-sm">Delete</button>
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