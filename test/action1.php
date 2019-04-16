<?php
include_once '../classes/crud.php';
$crud = new Crud();


/*if(!empty($_GET["category_id1"])) {
    

    $coun_id = $_GET["category_id1"];
    $query = "SELECT * FROM subcategory_table WHERE catg_id IN ($coun_id) ORDER BY catg_id ASC";
    
    $result = $crud->getData($query);
 	// $output = '';
?>
    <option value="" selected disabled>Select Subcategory</option>
<?php
    foreach($result as $subcatg) {
        // $output .= '<option value="'.$subcatg["id"].'">'.$subcatg["subcatg_name"].'</option>';
?>
    <option value="<?php echo $subcatg["id"]; ?>"><?php echo $subcatg["subcatg_name"]; ?></option>
<?php
    }
    // echo $output;
}*/

if(isset($_POST["selected"]))
{
 $id = join("','", $_POST["selected"]);
 $query = " SELECT * FROM subcategory_table WHERE catg_id IN ('".$id."') ";
 $result = $crud->getData($query);
 $output = '';
 foreach($result as $row)
 {
  $output .= '<option value="'.$row["id"].'">'.$row["subcatg_name"].'</option>';
 }
 echo $output;
}


?>


