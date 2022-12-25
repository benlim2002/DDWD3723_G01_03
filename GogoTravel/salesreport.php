<?php
    include 'navbar.php';
?>

<!DOCTYPE html>
<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
    <title>View Sales Report</title>  
</head>
<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
     }  
</style>  
  
<body>

<div class="table-scrol">
    <h1 align="center"><br>Sales Report</h1>
</div>

<div class="container col-lg-6">
     <div class="row">
        <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
        <thead>
        <tr>
<<<<<<< HEAD
            <th style="text-align: center">Most to Least Purchased</th>
            <th style="text-align: center">Sales</th>
            <?php 
                // Build the list from a query result-set array
                $list = "";
                $num = 0;
                $sql = "SELECT title, count(title) AS package_id FROM booking GROUP BY title ORDER BY package_id DESC";
                $query = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
                    $num++;
                    $title = $row["title"];
                    $package_id = $row["package_id"];
                    $list .= $num.') '.$title.' - <b>'.$package_id.'</b> customers<br><br><br>';
                }

            ?>
=======
            <th style="text-align: center">Package ID</th>
            <th style="text-align: center">Title</th>
            <th style="text-align: center">Price</th>
            <th style="text-align: center">Sales</th>
>>>>>>> 076eda7b2bb0af788c1ba1b412ea4f23f8a3ed91
        </tr>
        </thead>

        <?php
<<<<<<< HEAD
            $sql = "SELECT * FROM  packages WHERE package_id='1'";
=======
            $sql = "SELECT * FROM  packages";
>>>>>>> 076eda7b2bb0af788c1ba1b412ea4f23f8a3ed91
            $result = mysqli_query($conn, $sql);

            while($row=mysqli_fetch_array($result)){
                $package_id=$row[0];  
                $title=$row[1];  
                $price=$row[2];
                $sales=$row[3];
            
        ?>
<<<<<<< HEAD
        <tr> 
            <td style=""><br><?php echo $list;?></td><br>
            <td style="text-align: center; font-size: 80px"><br>RM7191</td><br>
=======
        <tr>
            <td style="text-align: center"><br><?php echo $package_id;?></td>  
            <td style="text-align: center"><br><?php echo $title;?></td>
            <td style="text-align: center"><br><?php echo $price;?></td>
            <td style="text-align: center"><br><?php echo $sales;?></td>
>>>>>>> 076eda7b2bb0af788c1ba1b412ea4f23f8a3ed91
        <?php } ?>
        
        </table>
    </body>
</html>