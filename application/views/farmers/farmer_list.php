<?php $this->load->helper('form'); ?>

<h1> Farmers </h1>

<table class="table table-striped">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>County</th>
			<th>Daily Production</th>
			<th>View Stock</th>					
			<th>Add Stock</th>			
          </tr>
        </thead>
        <tbody>



<?php
 if(is_array($result)&&!empty($result)) 
	foreach ($result as $row){
 ?>

           <tr class="farmer_<?php echo $row['id']; ?>" id="view_<?php echo $row['id']; ?>_results">
            <td><?php echo $row['firstname']; ?></td>
            <td><?php echo $row['surname']; ?></td>
            <td>County</td>
            <td>	   
				<?php echo form_open('farmers/production'); ?>
				  <input type="hidden" value="<?php echo $row['id']; ?>" name="farmer">	   
				  <input type="submit" value="Production" class="btn btn-success">
				  </form>
			</td>
		

			<td> 
				  <a class="btn btn-success btn_view_stock" id="view_<?php echo $row['id']; ?>"> View Stock </a>
			  
			</td>
			
			<td>
				  <?php echo form_open('farmers/stock'); ?>			
				  <input type="hidden" value="<?php echo $row['id']; ?>" name="farmer">	   
				  <input type="submit" value="Add Cows" class="btn btn-success">
				  </form>				  
			</td>
			
          </tr>



<?php } //close foreach loop ?>

        </tbody>
      </table>
	  
	  <div class="farmer_">
	  
	  </div>


<?php echo $pagination; ?>

<script>

$('.btn_view_stock').on('click', function() {

	var this_row = $(this).attr('id');
	if($(this).parent('tr').next('tr').hasClass('cow_list')){
	console.log("full");
	return;
	}
	
	//console.log($(this).parent('tr').next('tr').attr('class'));
	var cow_list = $(this).closest('tr').next('tr');
	if($(cow_list).hasClass('cow_list_head')){
		//$(cow_list).css('display', 'none');
	
	return;
	
	};



	var identify_farmer = $(this).attr('id');
	var trimmed = identify_farmer.substring(5); //remove the view_ from identifier for farmer id

	$.ajax({
		type: "POST",
		url: "../../ajax_list_stock",
		data: {farmer: trimmed, <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash(); ?>" },
		statusCode: { 404: function() { alert( "page not found" ); } },
		statusCode: { 500: function() { alert( "Server Error, try again - if the problem persists please panic" ); } },
		//statusCode: { 200: function() { alert( "Success" ); } },
		
	success:function(result){
	var response = jQuery.parseJSON(result);	
	var count = Object.keys(response).length; // how many items in json result
	
	var i = 0;

			$.each(response,function(object){
			
				$.each(response[object],function(values){
				
					while(i < count)
		            {				
				  console.log(response[i].id);	
				  html = response[i].id;
				  name = response[i].cow_name;
				  owner = response[i].cow_owner;				  
				  $(html).after(".farmer_");
				  $('#'+this_row+'_results').after( "<tr class='cow_list'><td>"+html+"</td><td>"+name+"</td><td>"+owner+"</td></tr>" );
				 
					i++;
					}
				  
				});
			})
			
			$('#'+this_row+'_results').after("<tr class='cow_list_head'><td>Cow ID</td><td>Cow Name</td><td>Cow Owner</td></tr>");	

	}
	
	})

	
	

});

</script>
