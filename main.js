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
      buttonWidth: '200px',
      nonSelectedText: 'Select Subcategory',
      enableFiltering: true,
      enableCaseInsensitiveFiltering: true,
      maxHeight: 300
    });




});
