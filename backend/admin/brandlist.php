<?php
include "header.php";
include "slider.php";
include "class/brand_class.php";
?>
<?php
$brand = new brand;
$show_brand = $brand -> show_brand();
?>
<div class="admin-content-right">
<div class="admin-content-right-category_list">
                <h1>Brand list</h1>
                <table>
                    <tr>
                        <th>No.</th>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Product's type</th>
                        <th>Custom</th>
                    </tr>
                    <?php
                    if($show_brand) {
                        $i=0;
                        while($result = $show_brand -> fetch_assoc()) {
                            $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td> 
                        <td><?php echo $result['brand_id']?> </td>
                        <td><?php echo $result['category_name']?> </td>
                        <td><?php echo $result['brand_name']?> </td>
                        <td><a href="brandedit.php?brand_id=<?php echo $result['brand_id'] ?>">Change</a>|<a href="branddelete.php?brand_id=<?php echo $result['brand_id'] ?>">Delete</a></td>
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