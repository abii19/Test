<?php
    include_once 'script.php';

    include_once '../classes/crud.php';
    $crud = new Crud();

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Catg</title>

   
    <!-- Custom CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

	
	<!-- Custom JS -->
	<!-- <script src="main.js" type="text/javascript" charset="utf-8" async defer></script> -->

	<script type="text/javascript">
		
		// $(document).ready(function() {

			/*function getSubcatg(val) {
				$.ajax({
				type: "POST",
				url: "action2.php",
				data:'category_id='+val,
				success: function(data){
					$("#selectSubcategory").html(data);
				}
				});
			}
*/
		// });

	</script>
   

   
</head>

<body>
	
			<div id="categories" class="">
                 <strong class="mb-2 ml-5">Categories</strong>


				<?php
                    $query = "SELECT * FROM category_table ORDER BY catg_name ASC";
					$result = $crud->getData($query);
					if(isset($result)) {
                    	// $results = $result->fetch_array();
						echo '<ul id="categories1" class="list-unstyled components ml-2">';
							foreach($result as $row) {
					        
					        // while($row = $result->fetch_array()){
                    			
							echo '<li class="active" class="categorydd">';
							echo '<a href="#" data-toggle="collapse" aria-expanded="false" class="dropdown-item" id="categorydd" onChange="getSubcatg(this.value);" value="'.$row["id"].'">'.$row["catg_name"].'</a>';
                    		
                ?>

	                
	                	<ul class="collapse list-unstyled form-check ml-5" id="selectSubcategory">
							<!-- <li>
								<input class="form-check-input" type="checkbox" value="" id="subcategorydd">
												      		<label class="form-check-label" for="subcategorydd">Name</label>
												    	</li> -->
						</ul>

						<?php
							/*$query = ("SELECT * FROM subcategory_table WHERE catg_id = ".$row['id']);
					        $result = $crud->getData($query);
					        if(isset($result)) {
					            echo '<ul class="collapse list-unstyled form-check ml-5" id="selectSubcategory">';
					            while($row = $result->fetch_array()){
					                echo '<li>';
					                echo '<input class="form-check-input" type="checkbox" value="" id="subcategorydd">';
					                echo '<label class="form-check-label" for="subcategorydd">';
					                echo $row["subcatg_name"];
					                echo '</label>';
					                echo '</li>';
					            }
					            echo '</ul>';
					            }*/
						    ?>


				<?php
							echo '</li>';
							}
		            echo '</ul>';
		          		}
		      	
			?>

            </div>
             
	



			<!-- <ul id="categories1" class="list-unstyled components ml-2">
			                 <li class="active">
			                    <a href="#subcategories1" data-toggle="collapse" aria-expanded="false" class="dropdown-item">Home</a>
			                    <ul class="collapse list-unstyled form-check ml-5" id="subcategories1">
			                       <li>
			                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
			                          <label class="form-check-label" for="defaultCheck1">
			                             Home 1
			                          </label>
			                       </li>
			                       <li>
			                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
			                          <label class="form-check-label" for="defaultCheck1">
			                             Home 2
			                          </label>
			                       </li>
			                       <li>
			                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
			                          <label class="form-check-label" for="defaultCheck1">
			                             Home 3
			                          </label>
			                       </li>
			                    </ul>
			                 </li>
			            </ul> -->




</body>


</html>