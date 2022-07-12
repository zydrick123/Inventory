<?php 
    
                                    $query = "SELECT * FROM customers_tb";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['Customer_ID']; ?></td>
                                                <td><?= $row['lname']; ?></td>
                                                <td><?= $row['fname']; ?></td>
                                                <td><?= $row['mname']; ?></td>
                                                <td><?= $row['province']; ?></td>
                                                <td><?= $row['city']; ?></td>
                                                <td><?= $row['barangay']; ?></td>
                                                <td><?= $row['street']; ?></td>
                                                <td><?= $row['zip_code']; ?></td>
                                                <td><?= $row['contact_no']; ?></td>
                                                <td>
                                                    <a href="view.php?id=<?=$row['Customer_ID']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="edit.php?id=<?= $row['Customer_ID']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_customer" value="<?=$row['Customer_ID'];?>" class="btn btn-danger btn-sm">Delete</button>
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