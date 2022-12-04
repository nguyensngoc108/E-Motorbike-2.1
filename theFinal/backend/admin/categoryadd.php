<?php
include "header.php";
include "slider.php";
include "class/category_class.php";
?>
<?php
$category = new category;
if($_SERVER['REQUEST_METHOD']==='POST'){
    $category_name = $_POST['category_name'];
    $insert_category = $category -> insert_category($category_name);
}
?>

<div class="admin-content-right">
            <div class="admin-content-right-category_add">
                <h1>Add Category</h1>
                <form action="" method="POST">
                    <input required name="category_name" type ="text" placeholder="Input category's name">
                    <button type="submit">Add</button>
                </form>
            </div>

        </div>
    </section>
</body>
</html>
