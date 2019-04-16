<?php
    include_once 'script.php';

    include_once 'classes/crud.php';
    $crud = new Crud();

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>

   <!-- Multiselect JS and CSS link -->
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
   
   <!-- Custom CSS -->
   <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- Custom JS -->
   <script type="text/javascript" src="main.js"></script>

    <script type="text/javascript">

   
    </script>

   
</head>

<body>

   <div class="container-fluid">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#">Shopping Cart
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
               <li class="nav-item active">
                  <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">Shopping</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">About</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link disabled" href="#">Protfolio</a>
               </li>
            </ul>
         </div>
      </nav>

      <!-- Search -->
      <nav class="navbar navbar-light bg-light">
         <form class="form-inline m-auto">
            <input class="form-control mr-sm-4" style="width:350px;" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-2" type="submit">Search</button>
         </form>
      </nav>

      <br>
      <!-- Filter and Cart -->
        
<div class="wrapper">
         <!-- Filters and Refining -->
         <nav class="col-md-3" id="sidebar">
            <div class="sidebar-header">
               <h5>Filters and Refining</h5>
            </div>
            
            <!-- Categories and Subcategories -->
            
            
            
            <div id="" class="">
             <strong class="mb-2 ml-5">Categories</strong>

                <table>
                  <tr>
                    <div class="row">
                      <td><label>Category:</label><br/></td>
                      <td><select name="category" id="demoMultipleBox" multiple>
                        <?php
                          $query = "SELECT * FROM category_table ORDER BY catg_name ASC";

                          $result = $crud->getData($query);

                          foreach($result as $catg) {
                        ?>
                            <option class="common_selector category" value="<?php echo $catg["id"]; ?>"><?php echo $catg["catg_name"]; ?></option>
                        <?php
                          }
                        ?>
                      </select></td>
                    </div>
                  </tr>
                  
                  <tr>
                    <div class="row">
                      <td><label>Subcategory:</label><br/></td>
                      <td><select name="subcategory" id="subcatg-list" multiple class="demoInputBox">
                      </select></td>
                    </div>
                  </tr>
                </table>

              </div>
            </nav>

            <!-- <div id="categories" class="">
                 <strong class="mb-2 ml-5">Categories</strong>
              <ul id="categories1" class="list-unstyled components ml-2">
                 <li class="active">
                    <a href="#subcategories" data-toggle="collapse" aria-expanded="false" class="dropdown-item">Home</a>
                    <ul class="collapse list-unstyled form-check ml-5" id="subcategories">
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
                 <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-item">Pages</a>
                    <ul class="collapse list-unstyled form-check ml-5" id="pageSubmenu">
                       <li>
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                             Page 1
                          </label>
                       </li>
                       <li>
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                             Page 2
                          </label>
                       </li>
                       <li>
                          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                          <label class="form-check-label" for="defaultCheck1">
                             Page 3
                          </label>
                       </li>
                    </ul>
                 </li>
              </ul>
            </div> -->
             
            <div class="col-md-9 mt-5">
              <div class="row justify-content-end mr-3">
                 <div class="dropdown btn-group dropleft">
                   <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Sorting
                   </button>
                   <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                     <a class="dropdown-item" href="#">Best Sellers</a>
                     <a class="dropdown-item" href="#">Most Rated</a>
                     <a class="dropdown-item" href="#">Date Added</a>
                     <a class="dropdown-item" href="#">Price : Low to High</a>
                     <a class="dropdown-item" href="#">Price : High to Low</a>
                   </div>
                 </div>
              </div>
              
              <div class="row mt-4">
                 Cart
              </div>
          </div>
</div>
      
      <div class="wrapper">
          
         <nav class="col-md-2" id="sidebar">
            <br>
            <!-- Brands -->
            <div id="brand" class="">
                  <strong class="ml-5">Brands</strong>
                  <?php
                        $query = "SELECT * FROM brand_table ORDER BY brand_name ASC";

                        $result = $crud->getData($query);
               
                      echo '<ul class="list-unstyled ml-5">';

                        foreach($result as $catg) {
                      ?>
                        <li>
                          <label>
                          <input type="checkbox" class="common_selector brand" value="<?php echo $catg["id"]; ?>" id="">
                          <?php echo $catg["brand_name"]; ?>
                          </label>
                        </li>
                      <?php
                        }
                        echo '</ul>';
                      ?>
               <!-- <ul class="list-unstyled components custom-control custom-checkbox ml-5">
                     <li>
                        <input type="checkbox" class="custom-control-input" id="customControlInline">
                        <label class="custom-control-label" for="customControlInline">Brand 1</label>
                     </li>
               </ul> -->
            </div>
            
            <br>
            <!-- Price Range -->
            <div>
               <strong class="">Price Range</strong>
               <span id="spanOutput"></span>
               <br><br>
                  <div id="slider"></div>
               <!-- <label>Minimim Age</label> -->
               <div class="row justify-content-between m-1">
               <input type="text" name="minimum_range" id="minimum_range" class="form-control col-md-5" value="Rs.100">
               <!-- <label>Maximum Age</label> -->
               <input type="text" name="minimum_range" id="maximum_range" class="form-control col-md-5" value="Rs.10000">
               </div>              
            </div>
         </nav>
         <!-- Sidebar Ends -->


         <!-- Carting Items -->
         <div class="col-md-10" id="content">
            <!-- Items -->
            <hr>
            <div class="row ml-5 filter_data">
               


               <!-- <div class="col-md-3" id="cartitem">
                  <div class="card" style="width: 18rem;">
                    <a href="#"><img class="card-img-top mt-2" src="Product Images/2012-Winter-Sweater-for-Men-for-better-outlook.jpg"></a>
                    <div class="card-body">
                      <h5 class="card-title text-center">Jacket</h5>
                      <p class="card-text text-center">Rs. 3000</p>
                    </div>
                    <div class='btn-group d-flex mb-2'> 
                      <button type='' class='btn btn-success flex-fill mr-4 ml-2'>Add To Cart</button>
                      <button type='' class='btn btn-warning flex-fill ml-3 mr-2'>Buy Now</button>
                    </div>
                  </div>
               </div> -->
                <!-- -------------- -->
               

            </div>
            <!-- Items Row Closed -->
            
            <br><br>
            <!-- Pagination -->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>


         </div>
         <!-- Carting Items Closed -->




      </div>
      <!-- Wrapper Closed -->





   </div>
   <!-- Container Fluid Closed -->


</body>

   <script type="text/javascript">


      // var outputSpan = $('#spanOutput')

      $(document).ready(function(){

            filter_data();

            function filter_data()
            {
                $('.filter_data').html('<div id="loading" style="" ></div>');
                var action = 'fetch_data';
                var brand = get_filter('brand');
                var category = get_filter('category');
                var subcategory = get_filter('subcategory');
                $.ajax({
                    url:"fetch_data.php",
                    method:"POST",
                    data:{action:action, brand:brand, category:category, subcategory:subcategory},
                    success:function(data){
                        $('.filter_data').html(data);
                    }
                });
            }

            function get_filter(class_name)
            {
                var filter = [];
                $('.'+class_name+':checked').each(function(){
                    filter.push($(this).val());
                });
                return filter;
            }

            $('.common_selector').click(function(){
                filter_data();
            });
         


         /*Image Slider*/
         $( "#slider" ).slider({
            range: true,
            min : 100,
            max : 10000,
            values : [100, 10000],
            slide : function(event, ui) {
               // outputSpan.html('Rs. ' + ui.values[0] + ' - ' + 'Rs. ' + ui.values[1]);
               $("#minimum_range").val('Rs.' + ui.values[0]);
               $("#maximum_range").val('Rs.' + ui.values[1]);
            }
         });

      });


   </script>

</html>
