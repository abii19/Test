<?php
include_once '../classes/crud.php';
$crud = new Crud();


if(!empty($_POST["category_id"])) {
    
    $query = ("SELECT * FROM subcategory_table WHERE catg_id = '" . $_POST["category_id"] . "' ORDER BY subcatg_name ASC");
    
    $result = $crud->getData($query);
    
?>
    <option value="" selected disabled>Select Subcategory</option>
<?php
    foreach($result as $subcatg) {
?>
    <option value="<?php echo $subcatg["id"]; ?>"><?php echo $subcatg["subcatg_name"]; ?></option>
<?php
    }
}
?>


?>