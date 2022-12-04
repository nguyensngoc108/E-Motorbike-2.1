<?php
include "database.php";
?>
<?php
class brand {
    private $db;
    public function __construct()
    {
    $this -> db = new Database();
    }
    public function insert_brand($category_id, $brand_name) {
        $query = "INSERT INTO tbl_brand (category_id, brand_name) VALUES ('$category_id', '$brand_name')";
        $result = $this -> db -> insert($query);
        header('Location:brandlist.php');
        return $result;
    }
    public function show_category(){
        $query = "SELECT * FROM tbl_category ORDER BY category_id DESC";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function show_brand(){
        // $query = "SELECT * FROM tbl_brand ORDER BY brand_id DESC";
        $query = "SELECT tbl_brand.*, tbl_category.category_name
        FROM tbl_brand INNER JOIN tbl_category ON tbl_brand.category_id = tbl_category.category_id
        ORDER BY tbl_brand.brand_id DESC";
        $result = $this -> db -> select($query);
        return $result;
    }
    public function get_brand($brand_id){
        $query = "SELECT * FROM tbl_brand WHERE brand_id = '$brand_id'";
        $result = $this -> db -> select($query);
        return $result;
    }


    public function update_brand($category_id, $brand_name, $brand_id){
        $query = "UPDATE tbl_brand SET brand_name = '$brand_name', category_id = '$category_id'  WHERE brand_id = '$brand_id'";
        $result = $this -> db -> update($query);
        header('Location:brandlist.php');
        return $result;
    }
    public function delete_brand($brand_id){
        $query = "DELETE FROM tbl_brand WHERE brand_id = '$brand_id' ";
        $result = $this -> db ->detele($query);
        header('Location:brandlist.php');
        return $result;
    }

    public function get_category($category_id){
        $query = "SELECT * FROM tbl_category WHERE category_id = '$category_id'";
        $result = $this -> db -> select($query);
        return $result;
    }
}
?>
