<?php

//fetch_data.php

include_once 'classes/crud.php';
$crud = new Crud();

/*if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM test1_table ORDER BY id ASC
 ";
  $output = '';


 if(isset($_POST["brand"]))
 {
  // $bid = $_POST["brand_id"];
  // $query = "SELECT * FROM test1_table WHERE brand_id = '$bid'";
  $brand_filter = implode("','", $_POST["brand"]);
  $query .= "
   AND brand_id IN('".$brand_filter."')
  ";



 $result = $crud->getData($query);
 $output = '';
 while($row = $result->fetch_array()){

  
   $output .= '
              <div class="col-md-3" id="cartitem">
                  <div class="card" style="width: 18rem;">
                    <a href="#"><img class="card-img-top mt-2" src="Product Images/'. $row['product_image'] .'"  ></a>
                    <div class="card-body">
                      <h5 class="card-title text-center">'. $row['product_name'] .'</h5>
                      <p class="card-text text-center">'. $row['product_sp'] .'</p>
                    </div>
                    <div class="btn-group d-flex mb-2"> 
                      <button type="" class="btn btn-success flex-fill mr-4 ml-2">Add To Cart</button>
                      <button type="" class="btn btn-warning flex-fill ml-3 mr-2">Buy Now</button>
                    </div>
                  </div>
               </div>
   ';
  }
 }
}
 else
 {
  $output = '<h3>No Data Found</h3>';
 }
 echo $output;
// }*/


if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM test1_table
 ";

  

  /*Brand*/
  if(isset($_POST["brand"]))
  {
   $id = implode("','", $_POST["brand"]);
   $query .= " WHERE brand_id IN ('".$id."') ";

  }

  /*Category*/
  if(isset($_POST["category"]))
  {
   $id1 = implode("','", $_POST["category"]);
   $query .= " WHERE catg_id IN ('".$id1."') ";

  }

  /*SubCategory*/
  if(isset($_POST["subcategory"]))
  {
   $id2 = implode("','", $_POST["subcategory"]);
   $query .= " WHERE subcatg_id IN ('".$id2."') ";

  }


     $result = $crud->getData($query);
     $output = '';
     if (is_array($result))
     {
     foreach($result as $row)
     {
      $output .= '
                  <div class="col-md-3" id="cartitem">
                      <div class="card" style="width: 18rem;">
                        <a href="#"><img class="card-img-top mt-2" src="Product Images/'. $row['product_image'] .'"  ></a>
                        <div class="card-body">
                          <h5 class="card-title text-center">'. $row['product_name'] .'</h5>
                          <p class="card-text text-center">'. $row['product_sp'] .'</p>
                        </div>
                        <div class="btn-group d-flex mb-2"> 
                          <button type="" class="btn btn-success flex-fill mr-4 ml-2">Add To Cart</button>
                          <button type="" class="btn btn-warning flex-fill ml-3 mr-2">Buy Now</button>
                        </div>
                      </div>
                   </div>
       ';
     }
    }
    else
     {
      $output = '<h3>No Data Found</h3>';
     }
   echo $output;
}


?>
