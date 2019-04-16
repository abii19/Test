<?php
    require_once 'script.php';

    include_once '../classes/crud.php';
    $crud = new Crud();
	
	
	$query = "SELECT * FROM category_table ORDER BY catg_name ASC";

	$result = $crud->getData($query);

?>

<html>
<head>
<TITLE>jQuery Dependent DropDown List - Countries and States</TITLE>
<head>
	
	<!-- <script src="js/bootstrap.bundle.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">

<style>
body{width:610px;font-family:calibri;}
.frmDronpDown {border: 1px solid #7ddaff;background-color:#C8EEFD;margin: 2px 0px;padding:40px;border-radius:4px;}
.demoInputBox {padding: 10px;border: #bdbdbd 1px solid;border-radius: 4px;background-color: #FFF;width: 50%;}
.row{padding-bottom:15px;}
</style>


<script type="text/javascript">

	$(document).ready(function() {
        
        $('#demoMultipleBox').multiselect({
        	buttonClass: 'btn btn-secondary',
        	buttonWidth: '200px',
        	nonSelectedText: 'Select Category',
        	enableFiltering: true,
        	enableCaseInsensitiveFiltering: true,
            // includeSelectAllOption: true,
            selectAllJustVisible: false,
            maxHeight: 300,
            onChange:function(option, checked){
			   $('#subcatg-list').html('');
			   $('#subcatg-list').multiselect('rebuild');
			  
			   var selected = this.$select.val();
			   if(selected.length > 0)
			   {
			    $.ajax({
			     url:"action1.php",
			     method:"POST",
			     data:{selected:selected},
			     success:function(data)
			     {
			      $('#subcatg-list').html(data);
			      $('#subcatg-list').multiselect('rebuild');
			     }
			    });
			   }
			  }


        });

        $('#subcatg-list').multiselect({
			buttonClass: 'btn btn-info',
        	buttonWidth: '300px',
        	nonSelectedText: 'Select Subcategory',
        	enableFiltering: true,
        	enableCaseInsensitiveFiltering: true,
        	maxHeight: 300
        });

    });


/*function getSubcatg1() {
        var str='';
        var val=document.getElementById('demoMultipleBox1');
        for (i=0;i< val.length;i++) { 
            if(val[i].selected){
                str += val[i].value + ','; 
            }
        }         
        var str=str.slice(0,str.length -1);
        
	$.ajax({          
        	type: "GET",
        	url: "action1.php",
        	data:'category_id1='+str,
        	success: function(data){
        		$("#subcatg-list").html(data);
        	}
	});
}
*/


function getSubcatg(val) {
	$.ajax({
	type: "POST",
	url: "action.php",
	data:'category_id='+val,
	success: function(data){
		$("#subcatg-list1").html(data);
	}
	});
}


</script>
</head>
<body>
<div class="frmDronpDown">

	<div class="row">
		<label>Category:</label><br/>
		<select name="category" id="demoMultipleBox" multiple class="demoInputBox">
		<!-- <option value="" disabled selected>Select Category</option> -->
		<?php
		foreach($result as $catg) {
		?>
		<option value="<?php echo $catg["id"]; ?>"><?php echo $catg["catg_name"]; ?></option>
		<?php
		}
		?>
		</select>
	</div>

	<div class="row">
		<label>Subcategory:</label><br/>
		<select name="subcategory" id="subcatg-list" multiple class="demoInputBox">
		<!-- <option value="">Select Category First</option> -->
		</select>
	</div>


<!-- ------------- -->

	<div class="row">
		<label>Category:</label><br/>
		<select name="category" id="demoMultipleBox1" class="demoInputBox" onChange="getSubcatg(this.value);">
		<option value="" disabled selected>Select Category</option>
		<?php
		foreach($result as $catg) {
		?>
		<option value="<?php echo $catg["id"]; ?>"><?php echo $catg["catg_name"]; ?></option>
		<?php
		}
		?>
		</select>
	</div>

	<div class="row">
		<label>Subcategory:</label><br/>
		<select name="subcategory" id="subcatg-list1" class="demoInputBox">
		<option value="">Select Categoty First</option>
		</select>
	</div>

</div>
</body>
</html>