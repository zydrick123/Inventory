<?php 
    
                                    $query = "SELECT * FROM suppliers_tb";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['ID']; ?></td>
                                                <td><?= $row['Company_Name']; ?></td>
                                                <td><?= $row['Company_Contact']; ?></td>
                                                <td><?= $row['Company_Address']; ?></td>
                                                <td>
                                                    <a href="view.php?id=<?=$row['ID']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="edit.php?id=<?= $row['ID']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_company" value="<?=$row['ID'];?>" class="btn btn-danger btn-sm">Delete</button>
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