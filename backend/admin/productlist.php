<?php
include "/xampp/htdocs/E-Motorbike-2.3-main/admin/header.php";
include "/xampp/htdocs/E-Motorbike-2.3-main/admin/slider.php";
include "/xampp/htdocs/E-Motorbike-2.3-main/admin/class/product_class.php";
?>
<?php
$product = new product;
$show_product = $product -> show_product();
?>
<div class="admin-content-right">
<div class="admin-content-right-category_list">
                <h1>Brand list</h1>
                <table>
                    <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Product's type</th>
                        <th>Product's name</th>
                        <th>Product's img</th>
                        <th>Custom</th>
                    </tr>
                    <?php
                    if($show_product) {
                        $i=0;
                        while($resultforproduct = $show_product -> fetch_assoc()) {
                            $i++;
                    ?>
                    <?php 

                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $resultforproduct['product_id'];?> </td>
                        <td><?php echo $resultforproduct['brand_name'];?> </td>
                        <td><?php echo $resultforproduct['product_name'];?> </td>
                        <td> <img src="img-on-php/<?php echo $resultforproduct['product_img']; ?>" width = 200> </td>
                        <td><a href="brandedit.php?brand_id=<?php echo $resultforproduct['brand_id'] ?>">Change</a>|<a href="productdelete.php?product_id=<?php echo $resultforproduct['product_id'] ?>">Delete</a></td>
                        
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            </div>
        </div>
    </section>
</body>
</html>