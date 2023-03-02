<?php include ('../pesmcoetnp/connection.php');?>
<!DOCTYPE html>
<html>
    <head>
        <body>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Company Name</th>
                    <th>Questions</th>
                </tr>
                <?php
                    $sql = "SELECT * FROM questionbank ORDER BY id asc";
                    $query = mysqli_query($conn , $sql);
                    while($row= mysqli_fetch_array($query)){

                    }
                ?>
                    <tr>
                   <td><?=$row['ID']; ?></td>
                   <td><?=$row['CompanyName']; ?></td>
                   <td><?=$row['Questions']; ?></td>
                   <td><a href = "adminUpdateQuestionBankAPI.php?id='.$row['ID']?>">Update</a></td>
                   </tr>
                <?php 
                  

                ?>
                
            </table>
        </body>
    </head>
</html>