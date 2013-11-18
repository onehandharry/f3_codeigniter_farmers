<h1> Add a farmer </h1>

<?php echo validation_errors(); ?>

<?php echo form_open('data'); ?>



<div class="row">

  <div class="col-xs-12 col-md-4 col-lg-3">
	<h5>Firstname</h5>
	<input type="text" class="form-control" placeholder="First Name" name="Firstname" value="" size="50" />
  </div>
  
  <div class="col-xs-12 col-md-4 col-lg-3">
	<h5>Surname</h5>
    <input type="text" class="form-control" placeholder="Surname" name="Surname" value="" size="50" />
  </div>
  
  <div class="col-xs-12 col-md-4 col-lg-3 ">
	<h5>County</h5>
    <input type="text" class="form-control" placeholder="County" name="County" value="" size="50" />
  </div>

<div class="col-xs-12 col-md-12 col-lg-3">
	
	<input type="submit" class="btn btn-success fake_head_padding" value="Submit" />
</div>
  
  
</div>












</form>