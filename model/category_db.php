<?php
function get_categories() {
    global $db;
    $query = 'SELECT * FROM categories
              ORDER BY categoryID';
    $result = $db->query($query);
    return $result;
}

function get_category_name($category_id) {
    global $db;
    $query = "SELECT * FROM categories
              WHERE categoryID = $category_id";
    $category = $db->query($query);
    $category = $category->fetch();
    $category_name = $category['categoryName'];
    return $category_name;
}
function delete_category($category_id){
    global $db;
    $query = "DELETE FROM categories
    WHERE categoryID = $category_id;";
    $db->query($query);
}
function add_category($categoryName){
    global $db;
    $query = "INSERT INTO `categories`(`categoryName`) VALUES ('$categoryName')";
    $db->query($query);

}
/*
 *if(isset($_POST['categoryName'])){
 * $categoryName = $_POST['categoryName']
 * }
 * if($categoryName === true){
 * echo "Category has been added";
 * }else{
 * echo "failed to add category"
 * }
 *
*/

/*
$added_category = $_POST['added_category_name'];
$query = "INSERT INTO categories (categoryName)
VALUES ('$added_category');";

$category_id = $_POST['category_id'];
$query = "DELETE FROM categories
WHERE categoryID = $category_id;";
*/


?>