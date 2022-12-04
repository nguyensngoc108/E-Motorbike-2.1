<?php 
include '/xampp/htdocs/E-Motorbike-2.3-main/admin/header.php';
include "/xampp/htdocs/E-Motorbike-2.3-main/admin/slider.php";
include '/xampp/htdocs/E-Motorbike-2.3-main/admin/class/product_class.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <table border = 1 cellspacing = 0 cellpadding = 10>
        <tr>
            <td>#</td>
            <td>Image</td>
        </tr>
        <?php
        $i = 1;
        
        ?>

        <?php //foreach($rows as $row) : ?>

        <tr>
            
            <td><?php echo $i++; ?></td>
            <td><?php //echo $row["Id"]; ?></td>
            <!-- <td><?php //echo $row["Name"]; ?></td> -->
            <!-- <td><?php //echo "$" . $row["Price"]; ?></td> -->
            <td> <img src="img/<?php echo $result['product_img']; ?>" width = 200> </td>
            <td><?php //echo $row["Amount"]; ?></td>
        </tr>
        <?php //endforeach; ?>
    </table>
    <a href="index">Continue update</a>
</body>
</html>