<?php $this->load->helper('url'); ?>
<h1> Add cow for <?php echo $farmer; ?></h1>

<div class="row">

<form>

  <div class="col-xs-12 col-md-4 col-lg-3">
	<h5>Cow Name</h5>
	<input type="text" class="form-control" placeholder="First Name" name="cow_name" id="cow_name" value="" size="50" />
  </div>
  

<div class="col-xs-12 col-md-12 col-lg-3">
	
	<input type="button" class="btn btn-success fake_head_padding btn_add_cow" value="Submit" />
</div>
  
  </form>
  
</div>

<div class="recently_added">
<h3> Recently Added </h3>
</div>

<div class="last_added">


</div>

<div class="noway">


</div>






<script>

$('.btn_add_cow').on('click', function() {
	
	var name_input = $('#cow_name').val();
	var farmer = '<?php echo $farmer; ?>';	

	$.ajax({
		type: "POST",
		url: "../add",
		data: { name: name_input, owner: farmer,  <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash(); ?>" },
		statusCode: { 404: function() { alert( "page not found" ); } },
		statusCode: { 500: function() { alert( "Server Error, try again - if the problem persists please panic" ); } },
		//statusCode: { 200: function() { alert( "Success" ); } },
	})

	.done(function() {

	if($('.recently_added').css('display','none')){$('.recently_added').css('display', 'block');};
		$( ".last_added" ).after('<li>'+name_input+'</li>').fadeIn(5000);


	});

});

</script>
